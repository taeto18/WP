<?php

  include('serverform.php');

  $nameErr ="";
  $name ="";

  if ([""] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "กรุณากรอกชื่อ";
    } else {
      $name = isset($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[ก-ฮ]+$/",$name)) {
        $nameErr = "กรุณากรอกชื่อภาษาไทยเท่านั้น";
      }
    }
  }
  ?>


<!DOCTYPE html>
<html>
<head>
  <title> Form </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="home.php">My Portfolio</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">หน้าแรก</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="profile.php">ประวัติส่วนตัว <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="download.php">ดาวน์โหลด</a></li>
          </ul>
        </li>
        <li><a href="index.php">ผลงาน</a></li>
        <li><a href="contact.php">ติดต่อเรา</a></li>
      </ul>
    </div>
  </nav>
  <form method="post" action="serverform.php">
    <h2> กรอกข้อมูลเพื่อติดต่อกลับ </h2>
    <p><span class="error">* กรุณากรอกข้อมูลทุกช่อง.</span></p>
    <div class="input-group">

            <label>ชื่อผู้ติดต่อ</label>
            <input type="name" name="name" value="<?php echo $name; ?>">
            <span class="error">* <?php echo $nameErr;?></span>
    </div>

    <div class="input-group">
            <label>เบอร์โทรศัพท์</label>
            <input type="text" name="tel" value="<?php echo $tel; ?>">
            <span class="error">* <?php echo $nameErr;?></span>
    </div>

    <div class="input-group">
            <label>อีเมล</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error">* <?php echo $nameErr;?></span>
    </div>
    <div class="input-group">
            <label>เรื่องที่จะติดต่อ</label>
            <input type="text" name="topic" value="<?php echo $topic; ?>">
            <span class="error">* <?php echo $nameErr;?></span>
    </div>
    <div class="input-group">
            <label>รายละเอียด</label>
            <input type="text" name="description" value="<?php echo $description; ?>">
            <span class="error">* <?php echo $nameErr;?></span>
    </div>


    <div class="input-group">
        <button type="submit" name="save" class="btn">บันทึก</button>

    </div>
  </form>

</body>
</html>
