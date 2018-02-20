<?php
    session_start();
    //intialize variables
    $name = "";
    $tel = "";
    $email = "";
    $topic = "";
    $description = "";
    $id = 0;

    //connect database
    $db = mysqli_connect('localhost', 'root', '', 'codeigniter');
    // mysql_query("SET NAMES utf8");

    //if press ok button is clicked
    if (isset($_POST['save']))
    {
      $name = $_POST['name'];
      $tel = $_POST['tel'];
      $email = $_POST['email'];
      $topic = $_POST['topic'];
      $description = $_POST['description'];


      $query = "INSERT INTO contact (name, tel, email, topic, description) VALUES ('$name', '$tel', '$email', '$topic', '$description')";
      mysqli_query($db, $query);
      $_SESSION['msg'] = "สำเร็จ";
      header('location: index.php'); //redirect to index page after inserting
}



    $results = mysqli_query($db, "SELECT * FROM contact");
?>
