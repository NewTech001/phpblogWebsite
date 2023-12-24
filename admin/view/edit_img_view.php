
<?php
if(isset($_GET['status'])) {
   if ($_GET['status']=='edit') {
        $id = $_GET['editId'];
   }
}

if (isset($_POST['img_btn'])) {
    $result = $obj->updateImg($_POST);
}

?>

<div class="div shadow m-5 p-5">
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
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="editImg" value=<?php echo $id;  ?>>
    <div class="form-group">
        <label class="small mb-1" for="">Upload thumbnail</label><br>
        <input required name="change_img" class="py-4" id="change_img" type="file"/>
    </div>
    <input type="submit" value="Change image" class="btn btn-primary" name="img_btn">
    </form>
</div>