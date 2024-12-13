<?php
  require "top.php";

  //delete post
  if(isset($_GET['id']) && $_GET['id'] != "")
  {
    $id = $_GET['id'];
    
    $del_sql = "DELETE FROM `post` WHERE `id` = '$id'";
    $del_res = mysqli_query($conn, $del_sql);
    if(mysqli_affected_rows($conn) > 0)
    {
      echo "<script>alert('Blog deleted successfully'); window.location.assign('blog');</script>";
    }
    else 
    {
      echo "<script>alert('Blog deleted failed'); window.location.assign('blog');</script>";
    }
  }
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Blog Table</h4>

        <a href="add_blog" class="btn btn-primary mb-4"><i class="mdi mdi-plus"></i> Add Blog</a>

        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>SL</th>
                      <th>Title</th>
                      <th>Thumbnail</th>
                      <th>Post Date</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>

                <?php 
                //get post
                $sql = "SELECT * FROM `post` ORDER BY `id` DESC";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0)
                {
                  $sl = 1;
                  while($row = mysqli_fetch_assoc($result))
                  {
                    ?>
                    <tr>
                      <td><?php echo $sl ?></td>
                      <td><?php echo $row['title'] ?></td>
                      <td>
                        <img src="storage/blog/<?php echo $row['thumbnail'] ?>" alt="">
                      </td>
                      <td><?php echo date('d-M-Y H:i:s', strtotime($row['added_on'])) ?></td>
                      <td>
                        <div class="d-flex align-items-center" style="gap: 10px;">
                          <a href="update_blog?id=<?php echo $row['id'] ?>" class="btn btn-primary py-2">Update</a>
                          <a href="?id=<?php echo $row['id'] ?>" class="btn btn-danger py-2">Delete</a>
                        </div>
                      </td>
                    </tr>
                    <?php
                    $sl++;
                  }
                }
                ?>
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
require "footer.php";
?>