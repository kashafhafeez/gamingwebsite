<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Header</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Kavoon&family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
  
  <style>
    body {
      margin: 0;
      font-family: "Roboto Condensed", sans-serif;
    }
    .navbar {
      background: linear-gradient(135deg, #220e34, #42136f);
    }
    .navbar .nav-link {
      font-weight: 600;
      color: #fff !important;
      transition: 0.3s ease;
    }
    .navbar .nav-link:hover {
      color: #dfa4fa !important;
    }
    .navbar-brand img {
      max-height: 60px;
    }
    .icons a {
      margin-left: 15px;
      font-size: 1.2rem;
      transition: 0.3s;
    }
    .icons a:hover {
      color: #dfa4fa !important;
    }
  </style>
</head>
<body>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark px-3 sticky-top">
  <div class="container-fluid">

    <!-- Logo -->
    <a class="navbar-brand" href="../HOME_PAGE/HOME.php">
      <img src="../HOME_PAGE/home-imges/logo-removebg-preview.png" alt="Logo">
    </a>

    <!-- Toggler (hamburger) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Items -->
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
        <li class="nav-item"><a class="nav-link" href="../HOME_PAGE/HOME.php">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="../game/AboutUs.php">ABOUT US</a></li>
        <li class="nav-item"><a class="nav-link" href="../services/services.php">SERVICES</a></li>
        <li class="nav-item"><a class="nav-link" href="../gamespage/game.php">GAMES</a></li>
        <li class="nav-item"><a class="nav-link" href="../blogpage/blog.php">BLOGS</a></li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">EXPLORE MORE</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../shop_project/index.php">Shop Now</a></li>
            <li><a class="dropdown-item" href="../FAQpge/FAQ.php">FAQ</a></li>
            <li><a class="dropdown-item" href="../contact/CONTACT_US.php">Contact</a></li>
          </ul>
        </li>
      </ul>

      <!-- Right-side Icons -->
      <div class="d-flex justify-content-center justify-content-lg-end mt-3 mt-lg-0 icons">
        <a href="../loginssspage/login.php" class="nav-link text-white"><i class="fa-regular fa-user"></i></a>
        <a href="../shop_project/cart.php" class="nav-link text-white"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
    </div>
  </div>
</nav>
<!-- Navbar End -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
