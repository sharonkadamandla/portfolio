<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sharon's Protfolio</title>

    <link rel = "stylesheet" href = "style.css">
    <link rel = "stylesheet" href = "mediaquery.css">

</head>
<body>
    
    <nav id="desktop-nav">
      <header class="sticky-header">
        <a href="index.php">
        <h1 class ="logo">Sharon Kadamandla</h1>
        </a>
        <ul class="nav-links">
                <li><a href="about.php">About</a></li>
                <li><a href="work.php">Work</a></li>
                <li><a href="index.php#contact">Contact</a></li>
            </ul>
      </header>
    </nav>

    <nav id="hamburger-nav">
        <div class="logo">Sharon Kadamandla</div>
        <div class="hamburger-menu">
          <div class="hamburger-icon" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="menu-links">
            <li><a href="about.php" onclick="toggleMenu()">About</a></li>
            <li><a href="work.php" onclick="toggleMenu()">Work</a></li>
            <li><a href="index.php#contact" onclick="toggleMenu()">Contact</a></li>
          </div>
        </div>
    </nav>