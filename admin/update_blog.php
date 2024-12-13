<?php
require "top.php";

//get blog post
if (isset($_GET['id']) && $_GET['id'] != "") {
  $id = $_GET['id'];
  $sql = "SELECT * FROM `post` WHERE `id` = '$id'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {
    echo "<script>window.location.assign('blog')</script>";
  }
} else {
  echo "<script>window.location.assign('blog')</script>";
}

//blog update
if (isset($_POST['blog_submit'])) {
  $title = $_POST['title'];
  $product = $_POST['product'];
  $details = $_POST['details'];
  $tags = $_POST['tags'];
  $postId = $_POST['post_id'];

  $uploadDirectory = "storage/blog/";

  $oldThumbnail = $_POST['old_thumbnail'];

  $thumbnailPath = $oldThumbnail;
  $uploadError = false;
  $error_msg = '';

  $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

  // Upload Thumbnail
  if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['error'] == 0) {
    $randomName = mt_rand(100000, 999999);
    $thumbnailExt = pathinfo($_FILES['thumbnail']['name'], PATHINFO_EXTENSION);
    $thumbnailPath = $randomName . "_thumbnail." . $thumbnailExt;

    if (in_array(strtolower($thumbnailExt), $allowedTypes)) {
      if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $uploadDirectory . $thumbnailPath)) {
        if (!empty($oldThumbnail) && file_exists($uploadDirectory . $oldThumbnail)) {
          unlink($uploadDirectory . $oldThumbnail);
        }
      } else {
        $error_msg = "Failed to upload new thumbnail.";
        $uploadError = true;
      }
    } else {
      $error_msg = "Invalid thumbnail file type. Only JPG, JPEG, PNG, and GIF are allowed.";
      $uploadError = true;
    }
  }

  if (!$uploadError) {
    $updated_on = date('Y-m-d H:i:s');

    $stmt = $conn->prepare("UPDATE post SET title = ?, thumbnail = ?, product = ?, details = ?, tag = ?, added_on = ? WHERE id = ?");

    $stmt->bind_param("ssssssi", $title, $thumbnailPath, $product, $details, $tags, $updated_on, $postId);

    if ($stmt->execute()) {
      echo "<script>alert('Blog successfully updated.'); window.location.assign('blog')</script>";
    } else {
      echo "<script>alert('Something went wrong! Please try again.')</script>";
    }

    $stmt->close();
  } else {
    echo "<script>alert('$error_msg')</script>";
  }
}

?>

<style>
  /* this is for tag */
  .tag {
    display: inline-block;
    background-color: #3498db;
    color: white;
    padding: 8px 10px;
    margin: 5px;
    border-radius: 3px;
    position: relative;
  }

  .tag .remove-tag {
    margin-left: 8px;
    cursor: pointer;
    color: white;
    background: orangered;
    padding: 0 3px;
    border-radius: 50%;
  }
</style>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <h1 class="card-title ml10">Update Blog</h1>
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">

            <form class="forms-sample" enctype="multipart/form-data" method="post">

              <input type="hidden" name="post_id" value="<?php echo $id ?>">

              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title'] ?>" required placeholder="Title">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="file" class="form-control" name="thumbnail" id="thumbnail" placeholder="Thumbnail">

                    <input type="hidden" name="old_thumbnail" value="<?php echo $row['thumbnail'] ?>">
                    <br>
                    <img src="storage/blog/<?php echo $row['thumbnail'] ?>" style="height: 100px;width: 100px; object-fit: contain">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="product">Product</label>
                    <select class="form-control" name="product" id="product" required>
                      <option value="">Select Product</option>
                      <option value="AMP" <?php if ($row['product'] == "AMP") echo "selected";
                                          "" ?>>AMP</option>
                      <option value="IDP" <?php if ($row['product'] == "IDP") echo "selected";
                                          "" ?>>IDP</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="details">Blog</label>

                    <textarea required id="div_editor1" name="details" rows="4"><?php echo $row['details'] ?></textarea>

                  </div>
                </div>

                <?php
                  $rawTags = $row['tag'];
                  if (!empty($rawTags) && $rawTags !== '[]') {
                    $cleanedTags = preg_replace('/[\[\]]/', '', $rawTags);
                    $tags = array_map('trim', explode(',', $cleanedTags));

                    $tags = array_map(function ($tag) {
                      return trim($tag, '"');
                    }, $tags);
                  } else {
                    $tags = [];
                  }
                ?>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" class="form-control" id="tag-input" placeholder="Enter a tag">

                    <div id="tag-container">
                      <?php if (!empty($tags)): ?>
                        <?php foreach ($tags as $index => $tag): ?>
                          <span class="tag">
                            <?= $tag ?>
                            <span class="remove-tag" data-index="<?= $index; ?>">×</span>
                          </span>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </div>

                    <input type="hidden" name="tags" id="tags" />
                  </div>
                </div>

              </div>


              <button type="submit" name="blog_submit" class="btn btn-primary mr-2">Submit</button>
            </form>

          </div>
        </div>
      </div>

    </div>

  </div>
</div>


<script>
  //Rich Text Editor
  var editor1 = new RichTextEditor("#div_editor1");
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // for tag
    const tagInput = document.getElementById('tag-input');
    const tagContainer = document.getElementById('tag-container');
    const hiddenInput = document.getElementById('tags');
    let tagsArray = [];

    // Initialize tags from existing content in the tag-container
    const existingTags = Array.from(tagContainer.getElementsByClassName('tag'))
      .map(tagElement => tagElement.childNodes[0].textContent.trim());
    tagsArray = existingTags;

    // Function to render tags
    function renderTags() {
      tagContainer.innerHTML = ''; // Clear the container first
      tagsArray.forEach(function(tag, index) {
        const tagElement = document.createElement('span');
        tagElement.className = 'tag';
        tagElement.innerHTML = `${tag} <span class="remove-tag" data-index="${index}">&times;</span>`;
        tagContainer.appendChild(tagElement);
      });
      hiddenInput.value = JSON.stringify(tagsArray);
    }

    renderTags(); // Render initial tags

    // Add tag when Space key is pressed
    tagInput.addEventListener('keyup', function(e) {
      if (e.key === ' ' && tagInput.value.trim() !== '') {
        tagsArray.push(tagInput.value.trim());
        tagInput.value = ''; // Clear the input field
        renderTags(); // Re-render the tags
      }
    });

    // Remove tags on click
    tagContainer.addEventListener('click', function(e) {
      if (e.target.classList.contains('remove-tag')) {
        const index = parseInt(e.target.getAttribute('data-index'), 10);
        if (!isNaN(index)) {
          tagsArray.splice(index, 1);
          renderTags(); // Re-render tags after removal
        }
      }
    });
  });
</script>

<?php
require "footer.php";
?>