
<?php
include("class/functions.php");
$obj = new adminBlog();
session_start();
$id = $_SESSION['id'];
if($id==null){
    header("location:index.php");
}

if (isset($_GET['adminlogout'])){
    if ($_GET['adminlogout']=='logout'){
        $obj->admin_logout();
    }
}

?>

<?php include_once('includes/head.php'); ?>
    <body class="sb-nav-fixed">
    <?php include_once('includes/topNav.php'); ?>
        <div id="layoutSidenav">
        <?php include_once('includes/sideNav.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                  <div class="container-fluid">
                   <?php
                   
                   if(isset($view)){
                    if($view == 'dashboard'){
                        include('view/dash_view.php');
                    }
                    elseif($view == 'add_cat'){
                        include('view/add_cat_view.php');
                    }
                    elseif($view == 'manage_cat'){
                        include('view/manage_cat_view.php');
                    }
                    elseif($view == 'add_post'){
                        include('view/add_post_view.php');
                    }
                    elseif($view == 'manage_post'){
                        include('view/manage_post_view.php');
                    }
                    elseif($view == 'edit_cat'){
                        include('view/edit_cat_view.php');
                    }
                    elseif($view == 'edit_img'){
                        include('view/edit_img_view.php');
                    }
                    elseif($view == 'edit_post'){
                        include('view/edit_post_view.php');
                    }
                   }
                   
                   ?>
                  </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                <?php include_once('includes/footer.php'); ?>
                </footer>
            </div>
        </div>
        <?php include_once('includes/script.php');    ?>
    </body>
</html>
