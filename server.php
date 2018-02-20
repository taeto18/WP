<?php
    session_start();
    //intialize variables
    $name = "";
    $description = "";
    $id = 0;
    $edit_state = false;

    //connect database
    $db = mysqli_connect('localhost', 'root', '', 'codeigniter');
    // mysql_query("SET NAMES utf8");

    //if save button is clicked
    if (isset($_POST['save'])) {
      $name = $_POST['name'];
      $description = $_POST['description'];

      $query = "INSERT INTO tbl_posts (name, description) VALUES ('$name', '$description')";
      mysqli_query($db, $query);
      $_SESSION['msg'] = "เพิ่มผลงานของคุณแล้ว";
      header('location: index.php'); //redirect to index page after inserting
}
// update records
    if (isset($_POST['update'])) {
      $name = mysqli_real_escape_string($db, $_POST['name']);
      $description = mysqli_real_escape_string($db, $_POST['description']);
      $id = mysqli_real_escape_string($db, $_POST['id']);
      mysqli_query($db, "UPDATE tbl_posts SET name='$name', description='$description' WHERE id=$id");
      $_SESSION['msg'] = "แก้ไขผลงานของคุณแล้ว";
      header('location: index.php');
    }
// delete records
    if (isset($_GET['del'])){
      $id = $_GET['del'];
      mysqli_query($db, "DELETE FROM tbl_posts WHERE id=$id");
      $_SESSION['msg'] = "ลบผลงานของคุณแล้ว";
      header('location: index.php');
    }
// retrieve records

    // contact us form


    $results = mysqli_query($db, "SELECT * FROM tbl_posts");
?>
