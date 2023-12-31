<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width= device-width,initial-scale=1.0">
  <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

  <?php $sdt = $_GET['user']; ?>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
      <a class="navbar-brand text-warning" href="#">GYM Workout</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-warning active-main" href="home.php?user=<?php echo $sdt ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="goiTap.php?user=<?php echo $sdt ?>">Gói tập</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="phanHoi.php?user=<?php echo $sdt ?>">Phản hồi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="thongTinCaNhan/viewThongTin.php?user=<?php echo $sdt ?>">Thông tin cá nhân</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning logout-btn" onclick="return confirm('Bạn có muốn đăng xuất không?')" href="../../html/dangNhap.html">Đăng xuất</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="body-home">
    <div class="topic">
      “Strength does not come <br> from physical capacity. <br> It comes from an indomitable will.”
    </div>
    <div class="person">
      -Lionel Messi
    </div>
  </div>
  <div class="brands">
    <div class="brands-grid">
      <div class="icon1"></div>
      <div class="icon2"></div>
      <div class="icon3"></div>
      <div class="icon4"></div>
      <div class="icon5"></div>
      <div class="icon6"></div>
    </div>
  </div>

  <div class="home-about">
    <div class="about-grid">
      <div class="item1">
        <div class="img-about">
          <div class="img-text-about">
            GYM WORKOUT
          </div>
        </div>
      </div>
      <div class="item2">
        <div class="topic1">
          Welcome to
        </div>
        <div class="topic2">
          GYM WORKOUT
        </div>
        <div class="few-text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde eius laudantium pariatur corrupti delectus. Omnis animi praesentium eius deserunt totam voluptate vel sapiente a ratione magnam voluptas at, veritatis hic.
          Incidunt delectus laudantium, cum officia nam commodi magnam distinctio eaque consequatur nesciunt obcaecati labore, atque recusandae quisquam tempore eligendi unde, voluptates dicta. Consectetur cum, labore possimus quod iste suscipit provident.
          Est velit assumenda et. Voluptas maxime velit quidem, id asperiores, doloremque ratione incidunt et officiis quis commodi repellat maiores ab dignissimos possimus deleniti. Dolor itaque in quasi hic enim cupiditate.
          Enim, amet. Distinctio officiis est nam ipsam et voluptate molestias natus sint, alias repudiandae, hic iste esse repellendus amet accusamus. Reiciendis corrupti quisquam hic earum asperiores, deserunt alias pariatur unde!
          Sint inventore alias asperiores velit quidem commodi? Omnis quo nihil debitis. Sapiente molestiae nostrum dolore illo, alias suscipit omnis distinctio doloremque in at consectetur veniam aliquid ab nobis assumenda sunt.
        </div>

        <a href="#"><button class="more-about-btn">Read More</button></a>

      </div>
    </div>
  </div>

  <div class="team-members">
    <div class="title">
      Out Team
    </div>
    <div class="body">
      <div class="team-grid">
        <div class="item1">
          <img src="images/person1.jfif" alt="person1" class="team-member-profile">
          <div class="team-name">
            John Wick
          </div>
          <div class="team-post">
            gym trainer
          </div>
          <div class="member-infor">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae labore iusto cum, tempora itaque officia enim at ipsa inventore deleniti voluptates, id voluptatem nihil autem dolores aut ipsam cumque doloribus!
            Ducimus provident at nesciunt, corporis repellat tenetur quibusdam minima deleniti laborum consectetur voluptatibus sapiente quas repudiandae id quod quasi obcaecati debitis officiis veniam libero facilis vitae! Neque repudiandae minus dolorum?
          </div>
        </div>
        <div class="item2">
          <img src="images/person2.jfif" alt="person1" class="team-member-profile">
          <div class="team-name">
            Emma
          </div>
          <div class="team-post">
            gym trainer
          </div>
          <div class="member-infor">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae labore iusto cum, tempora itaque officia enim at ipsa inventore deleniti voluptates, id voluptatem nihil autem dolores aut ipsam cumque doloribus!
            Ducimus provident at nesciunt, corporis repellat tenetur quibusdam minima deleniti laborum consectetur voluptatibus sapiente quas repudiandae id quod quasi obcaecati debitis officiis veniam libero facilis vitae! Neque repudiandae minus dolorum?
          </div>
        </div>
        <div class="item3">
          <img src="images/person3.jfif" alt="person1" class="team-member-profile">
          <div class="team-name">
            James
          </div>
          <div class="team-post">
            gym trainer
          </div>
          <div class="member-infor">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae labore iusto cum, tempora itaque officia enim at ipsa inventore deleniti voluptates, id voluptatem nihil autem dolores aut ipsam cumque doloribus!
            Ducimus provident at nesciunt, corporis repellat tenetur quibusdam minima deleniti laborum consectetur voluptatibus sapiente quas repudiandae id quod quasi obcaecati debitis officiis veniam libero facilis vitae! Neque repudiandae minus dolorum?
          </div>
        </div>
        <div class="item4">
          <img src="images/person4.jfif" alt="person1" class="team-member-profile">
          <div class="team-name">
            William
          </div>
          <div class="team-post">
            gym trainer
          </div>
          <div class="member-infor">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae labore iusto cum, tempora itaque officia enim at ipsa inventore deleniti voluptates, id voluptatem nihil autem dolores aut ipsam cumque doloribus!
            Ducimus provident at nesciunt, corporis repellat tenetur quibusdam minima deleniti laborum consectetur voluptatibus sapiente quas repudiandae id quod quasi obcaecati debitis officiis veniam libero facilis vitae! Neque repudiandae minus dolorum?
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="brands">
    <div class="brands-grid">
      <div class="icon1"></div>
      <div class="icon2"></div>
      <div class="icon3"></div>
      <div class="icon4"></div>
      <div class="icon5"></div>
      <div class="icon6"></div>
    </div>
  </div>

  <?php
  include("../../layouts/footer_home.php");
  ?>

</body>
<script src="../../js/script.js"></script>

</html>