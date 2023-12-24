<?php

Class adminBlog{

private $conn;

public function __construct(){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "blogproject";

        // Create connection
        $this->conn = mysqli_connect($servername, $username, $password, $dbName);

        // Check connection
        if (!$this->conn) {
          die("Connection failed:");
        }
}

public function admin_login($data){
        $admin_email = $data['email'];
        $admin_pass = md5($data['password']);

        $sel = "SELECT * FROM admin_info WHERE admin_email='$admin_email' && admin_password='$admin_pass'";

        $query = mysqli_query($this->conn,$sel);
        if($query){
          header('location:dashboard.php');
          $admin_data = mysqli_fetch_assoc($query);
          session_start();
          $_SESSION['id'] = $admin_data['id'];
          $_SESSION['email'] = $admin_data['admin_email'];
        }

}

public function admin_logout(){
  unset($_SESSION['id']);
  unset($_SESSION['email']);
  header("location:index.php");
}


public function add_category($data){
  $catName = $data['cat_name'];
  $catDesc = $data['cat_desc'];

  $query = "INSERT INTO `category`(`cat_name`,`cat_desc`,`add_date`)VALUES('$catName', '$catDesc',CURRENT_DATE())";

  if(mysqli_query($this->conn,$query)){
    return 'Category added successfully!';
  }else{
    return 'Not added!';
  }
}


public function display_category(){
  $query = "SELECT * FROM `category`";
  if(mysqli_query($this->conn,$query)){
    $category = mysqli_query($this->conn,$query);
    return $category;
  }
}
public function delete_category($id){
  $query = "DELETE FROM category WHERE cat_id = $id";
  if(mysqli_query($this->conn,$query)){
    return 'Category successfully deleted!';
  }
}

public function update_category($data){
  $cat_name = $data['cat_name'];
  $cat_desc = $data['cat_desc'];
  $cat_id = $data['cat_id'];

  $query = "UPDATE `category` SET `cat_name`='$cat_name',`cat_desc`='$cat_desc' WHERE `cat_id`=$cat_id";
  if(mysqli_query($this->conn,$query)){
    return 'Updated successfully';
  }
}

public function get_cat_info($id){
  $query = "SELECT * FROM `category` where `cat_id`=$id";
  if (mysqli_query($this->conn,$query)) {
    $cat = mysqli_query($this->conn,$query);
    $catdata = mysqli_fetch_assoc($cat);
    return $catdata;
  }
}

public function add_post($data){
    $post_title = $data['post_title'];
    $post_content = $data['post_content'];
    $post_img = $_FILES['post_img']['name'];
    $post_img_tmp = $_FILES['post_img']['tmp_name'];
    $post_cat = $data['post_cat'];
    $post_summery = $data['post_summery'];
    $post_tag = $data['post_tag'];
    $post_status = $data['post_status'];

    $query = "INSERT INTO `post`(`post_title`, `post_content`, `post_img`, `post_ctg`, `post_author`, `post_date`, `post_cmt_count`, `post_summery`, `post_tag`, `post_status`, `time`) VALUES ('$post_title','$post_content','$post_img',$post_cat,'Admin',now(),3,' $post_summery','$post_tag',$post_status,current_timestamp())";

    if (mysqli_query($this->conn,$query)){
      move_uploaded_file($post_img_tmp,'../upload/'.$post_img);
      return "Post added successfully!";
    }
}

public function display_post(){
  $query = "SELECT * FROM `post_with_ctg`";
  if (mysqli_query($this->conn,$query)) {
    $posts = mysqli_query($this->conn,$query);
    return $posts;
  }
}

public function display_post_public(){
  $query = "SELECT * FROM `post_with_ctg` where post_status=1";
  if (mysqli_query($this->conn,$query)) {
    $posts = mysqli_query($this->conn,$query);
    return $posts;
  }
}

public function updateImg($data){
    $imgId = $data['editImg'];
    $imgName = $_FILES['change_img']['name'];
    $tmpName = $_FILES['change_img']['tmp_name'];

    $query = "UPDATE `post` SET `post_img`='$imgName' WHERE post_id=$imgId";

    if (mysqli_query($this->conn,$query)) {
      move_uploaded_file($tmpName,'../upload/'.$imgName);
      return "Image updated successfully!";
    }
}

public function get_post_info($id){
  $query = "SELECT * FROM `post_with_ctg` WHERE post_id=$id";
  if (mysqli_query($this->conn,$query)) {
     $post = mysqli_query($this->conn,$query);
     $postResult = mysqli_fetch_assoc($post);
     return $postResult;
  }
}



public function update_post($data){
  $post_title = $data['post_title'];
  $post_content = $data['post_content'];
  $post_summery = $data['post_summery'];
  $post_status = $data['post_status'];
  $editId = $data['postId'];

  $query = "UPDATE `post` SET `post_title`='$post_title',`post_content`='$post_content',`post_summery`='$post_summery',`post_status`='$post_status' WHERE `post_id`=$editId";

  if(mysqli_query($this->conn,$query)){
    return 'Post updated successfully!';
  }
}


public function delete_post($id){
  $query = "DELETE FROM post WHERE post_id = $id";
  if(mysqli_query($this->conn,$query)){
    return 'Post deleted successfully!';
  }
}


}

?>