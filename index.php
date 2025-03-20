<?php 
session_start();
// Rest of your PHP code
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ULISO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div class="header-item">
                <i class="fas fa-envelope"></i>
                <span>upendolifesolutions@gmail.com</span>
            </div>
            <div class="header-item">
                <i class="fas fa-phone"></i>
                <span>+254 733 956 098</span>
            </div>
        </div>
    </header>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo-container">
                <img src="images/ULISO_LOGO.png" alt="Logo" class="logo">
                <h3 class="logo-text">
                    <span class="upendo">Upendo</span>
                    <span class="life-solutions">Life Solutions</span>
                </h3>
            </div>
            <ul class="nav-menu">
    <li class="nav-item">
        <a href="index.php" <?php echo (basename($_SERVER['PHP_SELF'])) == 'index.php' ? 'class="active"' : ''; ?>>Home</a>
    </li>
    <li class="nav-item dropdown">
        <a href="#" class="dropdown-toggle <?php echo (basename($_SERVER['PHP_SELF'])) == 'mental-health.php' || basename($_SERVER['PHP_SELF']) == 'mother-child-health.php' ? 'active' : ''; ?>">
            Our Programmes <i class="fas fa-chevron-down"></i>
        </a>
        <div class="dropdown-content">
            <a href="mother-child-health.php" <?php echo (basename($_SERVER['PHP_SELF'])) == 'mother-child-health.php' ? 'class="active"' : ''; ?>>Mother and Child Health</a>
            <a href="mental-health.php" <?php echo (basename($_SERVER['PHP_SELF'])) == 'mental-health.php' ? 'class="active"' : ''; ?>>Mental Health</a>
        </div>
    </li>
    <li class="nav-item">
        <a href="partner.php" <?php echo (basename($_SERVER['PHP_SELF'])) == 'partner.php' ? 'class="active"' : ''; ?>>Partner With Us</a>
    </li>
    <li class="nav-item">
        <a href="#">Media</a>
    </li>
    <li class="nav-item">
        <a href="#">Contact</a>
    </li>
</ul>
            <div class="menu-toggle">
                <i class="fas fa-bars" id="menu-open"></i>
                <i class="fas fa-times" id="menu-close" style="display: none;"></i>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/img4.jpg" alt="Helping Hands">
                    <div class="carousel-caption">
                        <h1>Together We Can Make a Difference</h1>
                        <p>Join us in our mission to provide hope and support to those in need. Your contribution can change lives.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/img3.jpg" alt="Community Support">
                    <div class="carousel-caption">
                        <h1>Building a Better Future</h1>
                        <p>We are committed to creating sustainable solutions for communities in need. Partner with us today</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" onclick="prevSlide()">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="carousel-control-next" onclick="nextSlide()">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </section>

    <!-- Know More Section -->
    <section class="know-more" onclick="scrollToAbout()">
        <div class="know-more-content">
            <p class="animated-text">Know More <span class="arrow">➔</span></p>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-us" id="about-us">
        <div class="about-container">
            <div class="about-text">
                <h2>About Us</h2>
                <p>
                    Upendo Life Solutions is a not-for-profit organization registered in 2013 by the Non-Governmental Organization Co-ordination Board in Kenya (now called Public Benefits Organizations Regulatory Authority - PBORA). 
                    We are mandated to operate in 10 Kenyan counties of Homa Bay, Migori, Kisii, Siaya, Kisumu, Nyamira, Busia, Kiambu, Mombasa, and Nairobi. Our head offices are in Homa-Bay County.
                </p>
            </div>
            <div class="about-image">
                <img src="images/img4.jpg" alt="About Us Image">
            </div>
        </div>
    </section>

    <!-- Two-Column Section -->
    <section class="two-column-section">
        <div class="container">
            <div class="box">
                <h2>Our Dream</h2>
                <p>ULISO foresees a prosperous society with an improved quality of life in Kenya.</p>
            </div>
            <div class="box">
                <h2>Our Definition of Quality Life</h2>
                <p>‘A perfect African family is described by its health’. Similarly, ‘it takes a whole village to raise a child’. These African proverbs teach us the importance of defining the source of happiness – the wellness of the mother, child, and mental stability of a family unit.</p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul class="footer-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="mother-child-health.php">Mother and Child Program</a></li>
    <li><a href="mental-health.php">Mental Health Program</a></li>
    <li><a href="partner.php">Partner With Us</a></li>
    <li><a href="#">Media</a></li>
    <li><a href="#">Contact</a></li>
</ul>
            </div>
            <div class="footer-column">
                <h3>Contact Info</h3>
                <ul class="footer-contact">
                    <li><i class="fas fa-map-marker-alt"></i> HomaBay County, Kenya</li>
                    <li><i class="fas fa-envelope"></i> P.O. Box 612-40300, HomaBay, Kenya</li>
                    <li><i class="fas fa-envelope"></i> upendolifesolutions@gmail.com</li>
                    <li><i class="fas fa-phone"></i> +254 733 956 098</li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Follow Us</h3>
                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/upendolifesolutionsuliso" aria-label="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Upendo Life Solutions. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scroll-to-Top Button -->
    <button id="scroll-to-top" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="script.js"></script>
</body>
</html>