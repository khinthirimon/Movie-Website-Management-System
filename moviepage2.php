<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>movie collections</title>

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
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
       <a href="openaccount.php"> <button class="btn btn-primary">အကောင့်ဖွင့်ရန်</button></a>      </div>

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

          <li>
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

<section class="upcoming" >
  <div class="container">
    <div class="flex-wrapper">
      <div class="title-wrapper">
        <p class="section-subtitle">movies</p>

        <h2 class="h2 section-title">ရုပ်ရှင်များ</h2>
      </div>

      
    </div>
    <ul class="movies-list ">

<?php
  $db= mysqli_connect("localhost","root","","movie");
$sql="SELECT * FROM image ";
$result=mysqli_query($db,$sql);
while($row = mysqli_fetch_array($result)){
    $title=$row['title'];
    $image=$row['image'];
    $genre=$row['genre'];
    $date=$row['date'];
    $text=$row['text'];
    $rating=$row['rating'];
    $id=$row['id'];
    $youtube=$row['youtube'];
    $download =$row ['download'];

?>


      <li>
        <div class="movie-card">
          <a href="detail.php?id=<?=$id?>">
            <figure class="card-banner">
              <img
                src="images/<?php
                echo $image; ?>"
                alt="The Traitors  Season 1 series poster"
              />
            </figure>
          </a>

          <div class="title-wrapper">
            <a href="./movie-details.html">
              <h3 class="card-title"><?php
              echo $title;?></h3>
            </a>

            <time datetime="2022"><?php
              echo $date;?></time>
          </div>

          <div class="card-meta">
            <div class="badge badge-outline">HD</div>

                <div class="rating">
              <ion-icon name="star"></ion-icon>

              <data><?php
              echo $rating;?></data>
            </div>
          </div>
        </div>
      </li>
      

      <?php
}
      
      ?>
    </ul>


    
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

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
  - ionicon link
-->
  <script
    type="module"
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
  ></script>
  <script
    nomodule
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
  ></script>
</body>
</html>
