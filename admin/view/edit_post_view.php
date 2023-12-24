

<?php

if (isset($_GET['status'])) {
    if ($_GET['status']=='edit') {
        $id = $_GET['editId'];

        $postData = $obj->get_post_info($id);
    }
}
if (isset($_POST['update_post'])) {
    $msg = $obj->update_post($_POST);
}

?>

<h1>Update Post</h1>

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
<form action="" method="POST">
    <input type="hidden" name="postId" value="<?php echo $id; ?>" >
    <div class="form-group">
        <label class="small mb-1" for="">Post title</label>
        <input required name="post_title" class="form-control py-4" id="" type="text"
            value="<?php echo $postData['post_title'] ?>" />
    </div>
    <div class="form-group">
        <label class="small mb-1" for="">Post content</label>
        <textarea name="post_content" id="" cols="30" rows="10" required class="form-control py-4" id="" type="text"
        ><?php echo $postData['post_content'] ?></textarea>
    </div>
    
    <div class="form-group">
        <label class="small mb-1" for="">Post summary</label>
        <input required name="post_summery" class="form-control py-4" id="" type="text"
        value="<?php echo $postData['post_summery'] ?>"/>
    </div>
    <div class="form-group">
        <label class="small mb-1" for="">Post status</label>
       <select class="form-control" name="post_status" id="">
        <option value="1">Published</option>
        <option value="0">Pending</option>
       </select>
    </div>
    
    <input name="update_post" type="submit" value="Update post" class="btn btn-block btn-primary"/>
</form>