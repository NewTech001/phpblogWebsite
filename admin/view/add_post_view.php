
<?php
$result = $obj->display_category();

if (isset($_POST['add_post'])) {
    $msg = $obj->add_post($_POST);
}


?>

<h2>Add Post</h2>
<?php

                if(isset($msg)){
                    ?>

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?=$msg?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <?php
                }

                ?>
<form action="" method="POST" enctype = "multipart/form-data">
    <div class="form-group">
        <label class="small mb-1" for="">Post title</label>
        <input required name="post_title" class="form-control py-4" id="" type="text"
            placeholder="Enter post title" />
    </div>
    <div class="form-group">
        <label class="small mb-1" for="">Post content</label>
        <textarea name="post_content" id="" cols="30" rows="10" required class="form-control py-4" id="" type="text"
            placeholder="Enter post description"></textarea>
    </div>
    <div class="form-group">
        <label class="small mb-1" for="">Upload thumbnail</label><br>
        <input required name="post_img" class="py-4" id="" type="file"
            placeholder="Enter category name" />
    </div>
    <div class="form-group">
        <label class="small mb-1" for="">Select category</label>
        <select name="post_cat" class="form-control" id="">
            <?php while($data = mysqli_fetch_assoc($result)){  ?>
            <option value="<?php echo $data['cat_id']; ?>"><?php echo $data['cat_name']; ?></option>

            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label class="small mb-1" for="">Post summary</label>
        <input required name="post_summery" class="form-control py-4" id="" type="text"
            placeholder="Enter Post summary" />
    </div>
    <div class="form-group">
        <label class="small mb-1" for="">Post tags</label>
        <input required name="post_tag" class="form-control py-4" id="" type="text"
            placeholder="Enter post tags" />
    </div>
    <div class="form-group">
        <label class="small mb-1" for="">Post status</label>
       <select class="form-control" name="post_status" id="">
        <option value="1">Published</option>
        <option value="0">Pending</option>
       </select>
    </div>
    
    <input name="add_post" type="submit" value="Add post" class="btn btn-block btn-primary"/>
</form>