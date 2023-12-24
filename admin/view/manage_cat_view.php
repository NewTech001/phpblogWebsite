<?php
$cats = $obj->display_category();

if(isset($_GET['status'])){
    if($_GET['status'] == 'delete'){
        $Delid = $_GET['id'];
       $result = $obj->delete_category($Delid);
    }
}

?>

<h2>Manage Category</h2>
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
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Category name</td>
            <td>Category description</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php while($data = mysqli_fetch_assoc($cats)){?>
    <tr>
        <td><?php echo $data['cat_id'] ?></td>
        <td><?php echo $data['cat_name'] ?></td>
        <td><?php echo $data['cat_desc'] ?></td>
        <td>
            <a class="btn btn-primary" href="edit_cat.php?status=edit&&id=<?php echo $data['cat_id'] ?>">Edit</a>
            <a class="btn btn-danger" href="?status=delete&&id=<?php echo $data['cat_id'] ?>">Delete</a>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>