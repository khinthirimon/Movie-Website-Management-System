<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Free Guy 2021</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="#top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

       <img src="./assets/images/logo.svg" > <h3 style="color: #fff;">MovyCell</h3>

      <div class="header-actions">

      <button class="search-btn">
         <a href="searchtmdb.html" style="color: white;"> <ion-icon name="search-outline"></ion-icon></a>
        </button>

        <div class="lang-wrapper">
          <label for="language">
            <ion-icon name="globe-outline"></ion-icon>
          </label>

          <select name="language" id="language">
            <option value="myanmar">မြန်မာ</option>
            <option value="english">English</option>

          </select>
        </div>
        <a href="userlogin.php"> <button class="btn btn-primary">အကောင့်ဝင်ရန်</button></a>
       <a href="openaccount.php"> <button class="btn btn-primary">အကောင့်ဖွင့်ရန်</button></a>
      </div>

      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="./index.html" class="logo">
            <img src="./assets/images/logo.svg" alt="HK & YA">
          </a>

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

        <a href="home.html" class="navbar-link">ပင်မစာမျက်နှာ</a>
          </li>
          
          <li>
            <a href="moviepage2.php" class="navbar-link">ရုပ်ရှင်များ</a>
          </li>

          

          
          </ul>

        <ul class="navbar-social-list">

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #MOVIE DETAIL
      -->
      <?php
  $db= mysqli_connect("localhost","root","","movie");
  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
$sql="SELECT * FROM image Where id='$id'";
$result=mysqli_query($db,$sql);
while($row = mysqli_fetch_array($result)){
    $title=$row['title'];
    $image=$row['image'];
    $genre=$row['genre'];
    $date=$row['date'];
    $text=$row['text'];
    $rating=$row['rating'];
    $youtube=$row['youtube'];
    $download =$row ['download'];

?>

      <section class="movie-detail">
        <div class="container">

          <figure class="movie-detail-banner">

          <img
                src="images/<?php
                echo $image; ?>"
                alt="Free guy movie poster" >
    

          </figure>

          <div class="movie-detail-content">

            <p class="detail-subtitle">Movie</p>

            <h1 class="h1 detail-title">
            <?php
                echo $title; ?> <strong></strong>
            </h1>

            <div class="meta-wrapper">

              <div class="badge-wrapper">
                  <div class="badge badge-outline">HD</div>
              </div>

              <div class="ganre-wrapper" style="color: white;">
              <?php
                echo $genre; ?>
              </div>

              <div class="date-time">

                <div>
                  <ion-icon name="calendar-outline"></ion-icon>

                  <time datetime="2021"><?php
                echo $date; ?></time>
                </div>

                  </div>

            </div>

            <p class="storyline">
            <?php
                echo $text; ?>
            </p>

           
            <div class="details-actions">

              <button class="share">
                <ion-icon name="share-social"></ion-icon>

                <span>Share</span>
              </button>

              <div class="title-wrapper">
                <p class="title">Prime Video</p>

                <p class="text">Streaming Channels</p>
              </div>

              <button class="btn btn-primary">
                <ion-icon name="play"></ion-icon>
                <a href=" <?php
                echo $youtube;?>" style="text-decoration: none; color: black;">
               
                 <span> Watch Trailer</span> 
                 </a>
              </button>
             
            </div>
            <div class="movie-detail-content" style="margin-top: 30px;">
              <p class="detail-subtitle" style="color: #CE1212;">Download ပြုလုပ်ရန်</p>

              <h3 style ="color: hsl(0, 0%, 74%)"> 1. YoteShin Drive Application ကိုအရင် Download လုပ်ပါ။</h3 style ="color: ">

              <h3 style ="color: hsl(0, 0%, 74%)">2. YoteShin Drive Account ဖွင့်ပါ။</h3>

              <h3 style ="color: hsl(0, 0%, 74%)"> ‌3. အောက်ပါ လင့်မှတစ်ဆင့်Download ပြုလုပ်နိုင်ပါပြီ။</h3>
              <div>
                
              <a href="<?php
                echo $download;?>" >
              
                <span style="background-color: beige; border-radius: 10%;width: 60px; height: 30px; text-align: center;padding: 2px 0px;
                margin-top: 20px; font-weight: bold;">1080p</span></a>
              </div>



            </div>

            

          </div>

        </div>
      </section>
      <!-- 
    - #FOOTER
  -->

  <footer class="footer">

<div class="footer-top">
  <div class="container">

    <div class="footer-brand-wrapper">

      <img src="./assets/images/logo.svg" > <h3 style="color: #fff;">MovyCell</h3>


      <ul class="footer-list">

      <li>
            <a href="home.html" class="navbar-link">ပင်မစာမျက်နှာ</a>
          </li>
          
          <li>
            <a href="moviepage2.php" class="navbar-link">ရုပ်ရှင်များ</a>
          </li>

       

          
       </ul>

    </div>

    <div class="divider"></div>

    <div class="quicklink-wrapper">

      <ul class="quicklink-list">

          <li>
          <a href="#" class="quicklink-link">Help center</a>
        </li>

        <li>
          <a href="#" class="quicklink-link">Terms of use</a>
        </li>

        <li>
          <a href="#" class="quicklink-link">Privacy</a>
        </li>

      </ul>

      <ul class="social-list">

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-pinterest"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
        </li>

      </ul>

    </div>

  </div>
</div>

<div class="footer-bottom">
  <div class="container">

    <p class="copyright">
      &copy; 2024 <a href="#">codewithus</a>.  All Rights Reserved
    </p>

    <img src="./assets/images/footer-bottom-img.png" alt="Online banking companies logo" class="footer-bottom-img">

  </div>
</div>

</footer>

      <?php }}
      ?>








  



  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>