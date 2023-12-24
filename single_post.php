<?php

include_once "admin/class/functions.php";
$obj = new adminBlog();
$getCat = $obj->display_category();


if (isset($_GET['view'])) {
   if ($_GET['view'] == 'post_view') {
    $viewId = $_GET['view_id'];

    $single = $obj->get_post_info($viewId);
   }
}


?>
<?php
include_once "include/head.php";
?>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->

    <?php
        include_once "include/header.php";
    ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php
    include_once "include/slider.php";
    ?>
    <!-- Banner Ends Here -->


    <?php
    include_once "include/cta.php";
    ?>

    <section class="blog-posts">
      <div class="container">
        <div class="row">
         <div class="col-lg-8">
         <div class="blog-post">
                    <div class="blog-thumb">
                    <img src="upload/<?php echo $single['post_img']; ?>" alt="postImage">
                    </div>
                    <div class="down-content">
                      <span><?php echo $single['cat_name']; ?></span>
                      <h4><?php echo $single['post_title']; ?></h4>
                      <ul class="post-info">
                        <li><a href="#"><?php echo $single['post_author']; ?></a></li>
                        <li><a href="#"><?php echo $single['post_date']; ?></a></li>
                        <li><a href="#"><?php echo $single['post_cmt_count']; ?> comments</a></li>
                      </ul>
                      <p><?php echo $single['post_content']; ?>.</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                            <?php echo $single['post_tag']; ?>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
           <?php
                include_once "include/sidebar.php";
            ?>
        </div>
      </div>
    </section>

    
    <?php
     include_once "include/footer.php";
    ?>