<?php include('serverform.php');

  // fetch the record to update
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit_state = true;
    $rec = mysqli_query($db, "SELECT * FROM tbl_posts WHERE id =$id");
    // $name = $_POST['name'];
    // $description = $_POST['description'];
    // $rec = mysqli_query($db, "UPDATE tbl_posts SET name=$name, description=$description WHERE id=$id");
    $record = mysqli_fetch_array($rec);
    $name = $record['name'];
    $tel = $record['tel'];
    $email = $record['email'];
    $topic = $record['topic'];
    $description = $record['description'];
  }
?>



<!DOCTYPE html>
<html>
<head>
  <title> How to create, update, delete database record: PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>ชื่อผู้ติดต่อ</th>
        <th>เบอร์โทรศัพท์</th>
        <th>อีเมล์</th>
        <th>เรื่องที่จะติดต่อ</th>
        <th>รายละเอียด</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row =  mysqli_fetch_array($results)) { ?>
        <tr>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['tel'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['topic'];?></td>
          <td><?php echo $row['description'];?></td>

        </tr>
     <?php  } ?>

      </tbody>
  </table>

</body>
</html>
