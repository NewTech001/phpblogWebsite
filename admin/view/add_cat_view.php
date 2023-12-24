
<?php

 if(isset($_POST['add_cat'])){
    $return_msg = $obj->add_category($_POST);
 }

?>

<?php

                if(isset($return_msg)){
                    ?>

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?=$return_msg?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <?php
                }

                ?>

<h2>Add Category</h2>
<form action="" method="POST">
    <div class="form-group">
        <label class="small mb-1" for="">Category Name</label>
        <input required name="cat_name" class="form-control py-4" id="" type="text"
            placeholder="Enter category name" />
    </div>
    <div class="form-group">
        <label class="small mb-1" for="">Category Description</label>
        <textarea name="cat_desc" id="" cols="30" rows="10" required class="form-control py-4" id="" type="text"
            placeholder="Enter category description"></textarea>
    </div>
    <input name="add_cat" type="submit" value="Add category" class="btn btn-block btn-primary"/>
</form>