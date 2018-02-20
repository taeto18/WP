<?php include('server.php');
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
    $description = $record['description'];
    $id = $record['id'];

  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">My Portfolio</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">ประวัติส่วนตัว</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">เกี่ยวกับฉัน</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">ผลงานของฉัน</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">ติดต่อเรา</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Welcome to my Portfolio</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">ยินดีต้อนรับเข้าสู่โลกของฉัน !!!! </p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Let't Go.</a>
          </div>
        </div>
      </div>
    </header>

    <div class="row no-gutters popup-gallery">
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/21.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/21.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/27.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/27.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/23.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/23.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/24.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/24.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/25.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/25.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/26.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/26.jpg" alt="">
        </a>
      </div>
    </div>
    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">| ประวัติส่วนตัว |</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">ชื่อ: ทยากร ศุภรานนท์  ชื่อเล่น: ปลาทู
            วันเดือนปีเกิด: วันอังคารที่ 6 พฤษภาคม พ.ศ. 2540 ราศี: เมษ อายุ: 20 ปี  เพศ: ชาย น้ำหนัก: 62 กก. ส่วนสูง 168 ซม.
           ศาสนา: พุทธ เชื้อชาติ: ไทย สัญชาติ: ไทย สถานะ: โสด ที่อยู่ตามสำเนาทะเบียนบ้าน: บ้านเลขที่ 91/1 ม.9 ถ.ปากคลอง ต.บ่อน้ำร้อน อ.กันตัง จ.ตรัง 92110
         มีพี่น้องทั้งหมด 3 คน เป็นคนสุดท้อง   </p>
         <div class="p">
           อยู่ตามสำเนาทะเบียนบ้าน: บ้านเลขที่ 91/1 ม.9 ถ.ปากคลอง ต.บ่อน้ำร้อน อ.กันตัง จ.ตรัง 92110
         </div>
          <div class="p">
            ประวัติการศึกษา: กำลังศึกษาอยู่ ชั้นปีที่ 3 มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี คณะวิทยาศาสตร์และเทคโนโลยี สาขาเทคโนโลยีสารสนเทศ
          </div>
          <div class="p">
           จบชั้นมัธยมต้นและมัธยมปลายจาก: โรงเรียนจุ๋งฮัวโซะเซียว
          </div>
          <div class="p">
           จบชั้นประถมและอนุบาลจาก: โรงเรียนอนุบาลกันตังศึกษา
          </div>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="https://drive.google.com/open?id=1QiUATp-BOK6UlzBP_6TGWQC6ri7s9iMb">Download Resume</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">เกี่ยวกับฉัน</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Lifestyle</h3>
              <p class="text-muted mb-0">ชอบการท่องเที่ยว การเดินทาง การถ่ายรูปและแฟชั่น</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">งานอดิเรกและกิจกรรมยามว่าง</h3>
              <p class="text-muted mb-0">วาดรูป, ดูหนัง ฟังเพลงได้ทุกแนว (สากล จีน ญี่ปุ่น *เกาหลี)</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">

            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">บุคคลที่ฉันชื่นชอบและสนใจ</h3>
              <p class="text-muted mb-0"> BIGBANG (YG STAN), The Chainsmoker</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">อุปนิสัยและคติประจำใจ</h3>
              <p class="text-muted mb-0"> เป็นคนเข้ากับคนอื่นได้ง่าย ถ้าสนิทจะพูดมาก โกรธยากหายช้า, ไปให้สุด...แล้วหยุดที่คำว่า"พอ"</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/11.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/11.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Drawing
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/12.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/12.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Web Design
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/13.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/13.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    NPTU Robot Camp in Taiwan
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <table>
    <thead>
      <tr>
        <th>ชื่อผลงาน</th>
        <th>รายละเอียด</th>
        <th colspan="2">เครื่องมือ</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row =  mysqli_fetch_array($results)) { ?>
        <tr>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['description'];?></td>
          <td>
              <a class="edit_btn" href="index.php?edit=<?php echo $row['id']; ?>">แก้ไข</a>
          </td>
          <td>
              <a class="del_btn" href="server.php?del=<?php echo $row['id']; ?>">ลบ</a>
          </td>
        </tr>
     <?php  } ?>

      </tbody>
  </table>

  <form method="post" action="server.php">

    <div class="input-group">

    </div>
    <div class="input-group">
            <label>ชื่อผลงาน</label>
            <input type="name" name="name" value="<?php echo $name; ?>">
    </div>
    <div class="input-group">
            <label>รายละเอียด</label>
            <input type="text" name="description" value="<?php echo $description; ?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="input-group">
      <?php if ($edit_state == false): ?>
        <button type="submit" name="save" class="btn">บันทึก</button>
      <?php else: ?>
        <button type="submit" name="update" class="btn">บันทึก</button>
      <?php endif ?>
    </div>
  </form>
      </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">ดูผลงานฉบับเต็มได้ที่นี่ !</h2>
        <a class="btn btn-light btn-xl sr-button" href="https://drive.google.com/open?id=1ZilLMgTSVzbrv5IQqtoVbwGZTQ3ZEW5j">Click Here !!</a>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">ติดต่อเรา</h2>
            <hr class="my-4">
            <p class="mb-5">ฟูลเฮาส์ คลองหก ห้อง 501 เลขที่ 29/184-187 ตำบลคลองหก อำเภอคลองหลวง จังหวัดปทุมธานี 12120</p>
            <hr class="my-4">
            <p class="mb-5"> 29/184-187, Full House, Room 501, Klonghok, Klongluang,Pathumthani 12120</p>
            <hr class="my-4">
            <p class="mb-5"> ID LINE: taeto18 </p>
            <hr class="my-4">
                    <p class="mb-5"> Instagram: taetosol </p>
            <hr class="my-4">
                    <p class="mb-5"> Twitter: @kornnonts</p>
            <hr class="my-4">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>088-443-9330</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>

              <a href="https://web.facebook.com/totae.yang">https://web.facebook.com/totae.yang</a>

          </div>
        </div>
      </div>
    <form method="post" action="serverform.php" class="form-horizontal">
            <h2> กรอกข้อมูลเพื่อติดต่อกลับ </h2>
            <p><span class="error">* กรุณากรอกข้อมูลทุกช่อง.</span></p>

            <div class="form-group">
            <label class="control-label col-sm-2">ชื่อผู้ติดต่อ</label>
            <input class="form-control" type="name" name="name" value="<?php echo isset($name) ? $name:''; ?>" required>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-4">เบอร์โทรศัพท์</label>
            <input class="form-control" type="text" name="tel" value="<?php echo isset($tel) ? $tel: ''; ?>" required>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-4">อีเมล</label>
            <input class="form-control"type="text" name="email" value="<?php echo isset($email) ? $email: ''; ?>" >
            </div>

            <div class="form-group">
            <label class="control-label col-sm-4">เรื่องที่จะติดต่อ</label>
            <input class="form-control" type="text" name="topic" value="<?php echo isset($topic) ? $topic: ''; ?>" required>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-4">รายละเอียด</label>
            <input class="form-control" style="height: 150px;" type="text" name="description" value="<?php echo isset($description) ? $description: ''; ?>">
            </div>

            <button type="submit" name="save" class="btn">บันทึก</button>

    </form>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">ดูรายชื่อผู้ติดต่อทั้งหมดได้ที่นี่ !</h2>
        <a class="btn btn-light btn-xl sr-button" href="allname.php">Click Here !!</a>
      </div>
    </section>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
  </body>

</html>
