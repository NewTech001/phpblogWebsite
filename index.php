<?php

include_once "admin/class/functions.php";
$obj = new adminBlog();
$getCat = $obj->display_category();


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
        <?php
        include_once "include/blogpost.php";
        ?>
           <?php
                include_once "include/sidebar.php";
            ?>
        </div>
      </div>
    </section>

    
    <?php
     include_once "include/footer.php";
    ?>