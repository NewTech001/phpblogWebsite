
                <?php
                
                include_once '../admin/class/functions.php';

                $obj = new adminBlog();
                $category = $obj->display_category(); // for category
                $categoryTotal = mysqli_num_rows($category);

                $post = $obj->display_post();
                $postTotal = mysqli_num_rows($post);
                
                ?>


                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Category</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link text-decoration-none" href=""><?php echo $categoryTotal;  ?></a>
                                        <div class="small text-white"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Post</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link text-decoration-none" href=""><?php echo $postTotal;  ?></a>
                                        <div class="small text-white"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     