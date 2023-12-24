<?php
$posts = $obj->display_post();

if(isset($_GET['status'])){
    if($_GET['status'] == 'delete'){
        $Delid = $_GET['deleteId'];
       $result = $obj->delete_post($Delid);
    }
}

?>

<?php

                if(isset($result)){
                    ?>

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?=$result?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <?php
                }

                ?>

<h2>Manage Post</h2>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Author</th>
                <th>Date</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_assoc($posts)){ ?>
            <tr>
                <td><?php echo $data['post_id']; ?></td>
                <td><?php echo $data['post_title']; ?></td>
                <td><?php echo $data['post_content']; ?></td>
                <td><img height="100px" src="../upload/<?php echo $data['post_img']; ?>" alt="image">
                <a href="edit_img.php?status=edit&&editId=<?php echo $data['post_id']; ?>">Change</a>
            </td>
                <td><?php echo $data['post_author']; ?></td>
                <td><?php echo $data['post_date']; ?></td>
                <td><?php echo $data['cat_name']; ?></td>
                <td><?php if ($data['post_status']==1) {
                   echo 'Published';
                }else{
                    echo 'Pending';
                } ?></td>
                <td>
                    <a class="btn btn-primary mb-3" href="edit_post.php?status=edit&&editId=<?php echo $data['post_id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="?status=delete&&deleteId=<?php echo $data['post_id']; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>