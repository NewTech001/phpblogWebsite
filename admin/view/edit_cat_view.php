<h2>Update Category</h2>


<?php

if (isset($_GET['status'])) {
    if ($_GET['status']=='edit') {
        $id = $_GET['id'];

        $catData = $obj->get_cat_info($id);
    }
}
if (isset($_POST['edit_cat'])) {
    $msg = $obj->update_category($_POST);
}

?>
<?php

if(isset($msg)){
    ?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?=$msg ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php
}

?>
<form action="" method="POST">
<input type="hidden" name="cat_id" value="<?php echo $id; ?>" >
    <div class="form-group">
        <label class="small mb-1" for="">Category Name</label>
        
        <input required name="cat_name" class="form-control py-4" id="" type="text"
            placeholder="Enter category name" value = "<?php echo $catData['cat_name']; ?>" >
    </div>
    <div class="form-group">
        <label class="small mb-1" for="">Category Description</label>
        <textarea name="cat_desc" id="" cols="30" rows="10" required class="form-control py-4" id="" type="text"
            placeholder="Enter category description"><?php echo $catData['cat_desc']; ?></textarea>
    </div>
    <input name="edit_cat" type="submit" value="Update category" class="btn btn-block btn-primary"/>
</form>