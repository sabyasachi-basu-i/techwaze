<?php
  require "top.php";
  //blog submission

  if (isset($_POST['blog_submit'])) {
    $title = $_POST['title'];
    $product = $_POST['product'];
    $details = $_POST['details'];
    $tags = $_POST['tags'];

    $uploadDirectory = "storage/blog/";


    $thumbnailPath = '';
    $postImagePath = '';
    $uploadError = false;
    $error_msg = '';
    
   
    // Upload Thumbnail
    if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['error'] == 0) {
        $randomName = mt_rand(100000, 999999);
        $thumbnailExt = pathinfo($_FILES['thumbnail']['name'], PATHINFO_EXTENSION); 
        $thumbnailPath = $randomName . "_thumbnail." . $thumbnailExt; 

        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array(strtolower($thumbnailExt), $allowedTypes)) {
            if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $uploadDirectory."".$thumbnailPath)) {
            } else {
                $error_msg = "Failed to upload thumbnail.";
                $uploadError = true;
            }
        } else {
            $error_msg = "Invalid thumbnail file type. Only JPG, JPEG, PNG, and GIF are allowed.";
            $uploadError = true;
        }
    } else {
        $error_msg = "Thumbnail upload error.";
        $uploadError = true;
    }

    if (!$uploadError) 
    {
        $added_on = date('Y-m-d H:i:s');

        $stmt = $conn->prepare("INSERT INTO post (title, thumbnail, product, details, tag, added_on) VALUES (?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("ssssss", $title, $thumbnailPath, $product, $details, $tags, $added_on);

        if ($conn->error) 
        {
          echo $conn->error;
        }
        
        if ($stmt->execute()) 
        {
          echo "<script>alert('Blog successfully added.'); window.location.assign('blog')</script>";
        } else {
          echo "<script>alert('Something went wrong! Please try again,')</script>";
        }

        $stmt->close();
    } else 
    {
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
      <h1 class="card-title ml10">Add Blog</h1>
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            
            <form class="forms-sample" enctype="multipart/form-data" method="post">
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required placeholder="Title">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="file" class="form-control" name="thumbnail" id="thumbnail" required  placeholder="Thumbnail">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="product">Product</label>
                    <select class="form-control" name="product" id="product" required>
                      <option value="">Select Product</option>
                      <option value="Insurance">Insurance</option>
                      <option value="CPG">CPG</option>
                      <option value="BFS">BFS</option>
                      <option value="Manufacturing">Manufacturing</option>
                      <option value="Healthcare">Healthcare</option>
                      <option value="Technology, Telecom & Media">Technology, Telecom & Media</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="details">Blog</label>
                    <textarea required id="div_editor1" name="details" rows="4"></textarea>
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" class="form-control" id="tag-input" placeholder="Enter a tag">
                    <div id="tag-container"></div>
                    <input type="hidden" name="tags" id="tags"/>
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
  document.addEventListener('DOMContentLoaded', function () 
  {
    //========= for tag ========
    const tagInput = document.getElementById('tag-input');
    const tagContainer = document.getElementById('tag-container');
    const hiddenInput = document.getElementById('tags');
    let tagsArray = [];

    // Function to render tags
    function renderTags() {
      tagContainer.innerHTML = ''; // Clear the container first
      tagsArray.forEach(function (tag, index) {
        const tagElement = document.createElement('span');
        tagElement.className = 'tag';
        // Create tag HTML with a remove button (&times; is the × symbol)
        tagElement.innerHTML = `${tag} <span class="remove-tag" data-index="${index}">&times;</span>`;
        tagContainer.appendChild(tagElement);
      });

      // Update hidden input with the array of tags in JSON format
      hiddenInput.value = JSON.stringify(tagsArray);
    }

    // Add tag when Space key is pressed
    tagInput.addEventListener('keyup', function (e) {
      if (e.key === ' ' && tagInput.value.trim() !== '') {
        tagsArray.push(tagInput.value.trim()); // Add the new tag to the array
        tagInput.value = ''; // Clear the input field
        renderTags(); // Re-render the tags
      }
    });

    // Event delegation to handle removing tags
    tagContainer.addEventListener('click', function (e) {
      if (e.target.classList.contains('remove-tag')) {
        const index = e.target.getAttribute('data-index'); // Get the index of the tag to remove
        tagsArray.splice(index, 1); // Remove the tag from the array
        renderTags(); // Re-render the tags after removal
      }
    });
  });

</script>

<?php
  require "footer.php";
?>

 