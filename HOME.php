<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

 

  <!-- bootstrap link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
  <!-- font-awesome link -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barrio&family=Edu+NSW+ACT+Cursive:wght@400..700&family=Kavoon&family=Metal+Mania&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
 <!-- secondfont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barrio&family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Edu+NSW+ACT+Cursive:wght@400..700&family=Kavoon&family=Metal+Mania&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Titan+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="home.css">
<link rel="icon" href="home-imges/icon.png">
</head>
<body>
 
 <?php include("header.php");
 ?>

 
<!-- header -->

   <!-- sec2 -->
  <section class="container-fluid sec2">
    <div class="row">
      <div class="col-12 col-lg-4">
        <div class="box1">
          <img src="home-imges/img3.png" width="250px">
          <b><p>Playverse is a team of creative and passionate professionals from around the world who share the vision of building unique and engaging gaming experiences..</p></b>
          <p>The platform brings together experts...</p>
        <a href="">  <button>MORE ABOUT US</button></a>
          <img src="../HOME_PAGE/home-imges/img16.jpeg" style="margin-top: 50px; border-radius: 30px;width: 80%;height: 180px;margin-top: 40px;" class="kon">
        </div>
      </div>

      <!-- Right side -->
      <div class="col-12 col-lg-6 d-flex flex-column container-fluid box2" style="position: relative;">
        <h2><span class="Explore">Explore </span><span class="studio"> Studio </span></h2>
        <img src="../HOME_PAGE/home-imges/im1.jpg" class="img1" style="border-radius: 30px; width:100%;">
        <!-- char2 -->
        <img src="../HOME_PAGE/home-imges/img2.png"
             class="scroll-character"
             id="char2"
             alt="character 2"
             style="position:absolute; bottom:0; left:40%; transform:translateX(-50%); width:70%; z-index:5;">
      </div>
    </div>
  </section>
<!-- sec3 -->
  <section class="container sec3 d-flex">
    <div class="col-12 col-lg-6 box3">
      <img src="home-imges/img5.png" width="400px" alt="character2" class="scroll-character" id="char5">
    </div>
    <div class="col-12 col-lg-6 box4">
      <h3>GAME DEVELOPMENT</h3>
      <p>Our talented team combines creativity and technology to craft immersive gaming experiences, bringing ideas to life on every platform from mobile to desktop.</p>
      <button>learn more <i class="fa-solid fa-arrow-right-long"></i></button>
    </div>
  </section>

  <!-- sec4 -->
  <section class="container sec4 d-flex">
    <div class="col-12 col-lg-6 box5">
      <h3>GAME <br> DESIGN</h3>
      <p>"No matter how thrilling an idea is, it becomes stale if the challenges stay the same. Smart level design keeps players hooked by introducing new twists and obstacles that evolve with their journey."</p>
      <button>learn more <i class="fa-solid fa-arrow-right-long"></i></button>
    </div>
    <div class="col-12 col-lg-6 box6">
      <img src="home-imges/img6.png" width="400px" alt="character3" class="scroll-character" id="char6">
    </div>
  </section>

  <!-- sec5 -->
  <section class="container sec5 d-flex">
    <div class="col-12 col-lg-6 box7">
      <img src="home-imges/img7.png" width="400px" height="500px" alt="character4" class="scroll-character" id="char7">
    </div>
    <div class="col-12 col-lg-5 box8">
      <h3>Visual Art & Design</h3>
      <p>"From immersive environments to characters, creatures, and objects, our talented artists bring ideas to life-whether you need playful stylization or hyper-realistic detail, we’ve got you covered."</p>
      <button>learn more <i class="fa-solid fa-arrow-right-long"></i></button>
    </div>
  </section>

  <!-- sec3 -->


  <section >

  <div class="container gameboxes">
    <p>Game Series</p>

    <div class="games-row">
      <!-- Left big -->
      <div class="big-box">
        <a href="homegames.php?game=burnout" >
          <img src="../gamespage/gamesimages/gameimg1.png" alt="Game 1">
        </a>
      </div>

      <!-- Middle 4 small -->
      <div class="small-col">
        <div class="small-box">
          <a href="homegames.php?game=frenzy-demine"><img src="../gamespage/gamesimages/gameimg2.jpg" alt="Game 2"></a>
        </div>
        <div class="small-box">
          <a href="homegames.php?game=Unicorn Coloring Challenge"><img src="../gamespage/gamesimages/gameimg3.jpg" alt="Game 3"></a>
        </div>
        <div class="small-box">
          <a href="homegames.php?game=Slider-Puzzel"><img src="../gamespage/gamesimages/gameimg4.jpg" alt="Game 4"></a>
        </div>
        <div class="small-box">
          <a href="homegames.php?game=play5"><img src="../gamespage/gamesimages/gameimg5.png" alt="Game 5"></a>
        </div>
      </div>

      <!-- Right big -->
      <div class="big-box">
        <a href="homegames.php?game=play6"><img src="../gamespage/gamesimages/gameimg6.png" alt="Game 6"></a>
      </div>
    </div>
  </div>
</section>


<!-- game2 -->
 <div class="container">
    <!-- Heading -->
    <h3 class=" editor">Editor's Picks</h3>

    <!-- Games Grid -->
    <div class="row g-4">
      <div class="col-6 col-md-3">
        <div class="game-card">
       <a href="homegames.php?game=play7">   <img src="../gamespage/gamesimages/game22.jpg" alt="Game 1"></a>
          <div class="game-title">Super Traffic Racer</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="game-card">
      <a href="homegames.php?game=play8">    <img src="../gamespage/gamesimages/game23.jpg" alt="Game 2"></a>
          <div class="game-title">Jingle Jetpack</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="game-card">
       <a href="homegames.php?game=play9">  <img src="../gamespage/gamesimages/game24.jpg" alt="Game 3"></a>
          <div class="game-title">

Fun Golf</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="game-card">
     <a href="homegames.php?game=play10">    <img src="../gamespage/gamesimages/game25.jpg" alt="Game 3"></a>
          <div class="game-title">Sift Renegade Brawl</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="game-card">
       <a href="homegames.php?game=play11">  <img src="../gamespage/gamesimages/game26.jpg" alt="Game 3"></a>
          <div class="game-title">

Scary Rainbow</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="game-card">
       <a href="homegames.php?game=play12">   <img src="../gamespage/gamesimages/game27.jpg" alt="Game 4"></a>
          <div class="game-title">Princess Color Number</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="game-card">
       <a href="homegames.php?game=play13">  <img src="../gamespage/gamesimages/game28.jpg" alt="Game 3"></a>
          <div class="game-title">Heart Box - physics </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="game-card">
    <a href="homegames.php?game=play14"> <img src="../gamespage/gamesimages/game30.jpg" alt="Game 3"></a>
          <div class="game-title">

Tom & Jerry Run</div>
        </div>
      </div>
      
    </div>
  </div>






<section class="container sec8">
  <div class="row" id="box14">
<h3>OUR BLOGS</h3>
    <!-- Card 1 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card bg">
        <img src="home-imges/img13.jpg" >
        <div class="card-body">
          <h6 class="">Announcements · December 16, 2023</h6>
          <a href="blog1.html" class="text-decoration-none">
            <h4 class="card-title">The Future of Gaming Technology: Innovations  Will Redefine How We Play</h4>
          </a>
          <p class="card-text">
            Gaming is no longer just a source of entertainment—it has become a powerful industry shaping culture…
          </p>   <button><a href="blog1.html">Read more</a></button> 
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card bg">
        <img src="home-imges/img14.jpg" class="card-img-top" alt="Game Design">
        <div class="card-body">
          <h6 class="">Announcements · August, 2023</h6>
          <a href="blog2.html" >
            <h4 class="card-title">Why Good Game Design Matters: Creating Experience Players Hooked</h4>
          </a>
          <p class="card-text">
            When most people think of video games, the first things that come to mind are flashy graphics, powerful .…
          </p>   <button><a href="blog2.html">Read more</a></button> 
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card bg">
        <img src="home-imges/img15.jpg"  alt="Visual Art in Games">
        <div class="card-body bg">
          <h6 class="">Announcements · October 18, 2024</h6>
          <a href="blog3.html" >
            <h4 class="card-title">How Visual Art Brings Games to Life: The Power of Creativity in Gaming Worlds</h4>
          </a>
          <p class="card-text">
            When players step into a game for the first time, what immediately captures their attention? It’s not...
     </p>    <button><a href="blog3.html">Read more</a></button> 
        </div>
      </div>
    </div>

  </div>
</section>
  <section id="tranding">
      <div class="container">
       
        <h3 class="text-center section-heading">Featured Gaming Products</h3>
      </div>
      <div class="container ">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="../shop_project/shopimages/shop10.jpg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">Rs:17,000</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                   Assassin’s Creed Rogue
                  </h2>
               <a href="../shop_project/index.php">   <button class="mt-3">SHOP NOW</button></a>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="../shop_project/shopimages/shop13.webp" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">Rs:16,800</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                     DualShock 4 Wireless Red Controller
                  </h2>
                 
               <a href="../shop_project/index.php">   <button class="mt-1">SHOP NOW</button></a>
               
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="../shop_project/shopimages/shop17.jpg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">Rs:6,500</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                   WWE 2K25 Playstation 4
                  </h2>
                  <a href="../shop_project/index.php">      <button class="mt-3">SHOP NOW</button></a>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="../shop_project/shopimages/shop5.webp" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">Rs 4,700</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
               Samsung SSD 990 PRO 2TB
                  </h2>
                  <a href="../shop_project/index.php">      <button class="mt-3">SHOP NOW</button></a>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="../shop_project/shopimages/shop6.jpg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">Rs:500</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                  War Ragnarok T-Shirt
                  </h2>
                  <a href="../shop_project/index.php">    <button class="mt-3">SHOP NOW</button></a>
                </div>
              </div>
            </div>
                     <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="../shop_project/shopimages/shop18.webp" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">Rs:12,500</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
              WWE 2K25 Playstation 4
                  </h2>
               <a href="../shop_project/index.php">       <button class="mt-3">SHOP NOW</button></a>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="../shop_project/shopimages/shop7.jpg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">Rs:17,000</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                  Call of Duty Collectors Edition
                  </h2>
                  <a href="../shop_project/index.php">      <button class="mt-3">SHOP NOW</button></a>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="../shop_project/shopimages/shop8.jpg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">Rs 6,000</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                 Valentine Game Cool T-Shirt
                  </h2>
    <a href="../shop_project/index.php">  <button class="mt-3">SHOP NOW</button></a>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
          </div>

          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>


  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  
 
  
  <script>

    $(document).ready(function () {
      $(".slider-img").on("click", function () {
        $(".slider-img").removeClass("active");
        $(this).addClass("active");
      });
    });
  </script>
  <!-- JS -->
  <script>
    function animateOnScroll() {
      // mobile/tablet par scroll effect hata do
      if (window.innerWidth <= 991) {
        document.querySelectorAll(".scroll-character").forEach(el => {
          el.style.transform = "none";
        });
        return;
      }

      const windowH = window.innerHeight;

      function moveChar(id, direction, strength=120) {
        const el = document.getElementById(id);
        if (!el) return;
        const rect = el.getBoundingClientRect();
        const prog = 1 - (rect.top / windowH);
        if (direction === "left") {
          el.style.transform = `translateX(${-strength * prog}px)`;
        } else {
          el.style.transform = `translateX(${strength * prog}px)`;
        }
      }

      // right→left
      moveChar("char2", "left", 10);
      moveChar("char6", "left", 50);

      // left→right
      moveChar("char5", "right", 70);
      moveChar("char7", "right", 40);
    }

    window.addEventListener("scroll", animateOnScroll);
    window.addEventListener("resize", animateOnScroll);


    </script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?php include("../HOME_PAGE/footer.php")?>
</body>
</html>
