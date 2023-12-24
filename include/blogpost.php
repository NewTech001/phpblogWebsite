      
      <?php
      $post = $obj->display_post_public();
      
      ?>
      
      <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <?php while($data = mysqli_fetch_assoc($post)){ ?>
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                    <img src="upload/<?php echo $data['post_img']; ?>" alt="postImage">
                    </div>
                    <div class="down-content">
                      <span><?php echo $data['cat_name']; ?></span>
                      <a href="single_post.php?view=post_view&&view_id=<?php echo $data['post_id']; ?>"><h4><?php echo $data['post_title']; ?></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?php echo $data['post_author']; ?></a></li>
                        <li><a href="#"><?php echo $data['post_date']; ?></a></li>
                        <li><a href="#"><?php echo $data['post_cmt_count']; ?> comments</a></li>
                      </ul>
                      <p><?php echo $data['post_summery']; ?>.</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                            <?php echo $data['post_tag']; ?>
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
                <?php } ?>
              </div>
            </div>
          </div>