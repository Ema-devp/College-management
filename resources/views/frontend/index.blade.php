<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>College Website</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Iconify -->
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

      <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>

<!-- =======================
Navbar
======================== -->

<header>

    <nav class="navbar">

        <div class="container">

            <!-- Logo -->

            <a href="#" class="logo">
                <img src="./assets/images/logo.png" alt="Logo">
            </a>

            <!-- Desktop Menu -->

            <ul class="nav-links">

                <li><a href="#">Home</a></li>

                <li><a href="#">Pages</a></li>

                <li><a href="#">Academics</a></li>

                <li><a href="#">Admissions</a></li>

                <li><a href="#">Courses</a></li>

                <li><a href="#">University Life</a></li>

                <li><a href="#">Contact</a></li>

            </ul>

            <!-- Right Side -->

            <div class="nav-right">

                <a href="#" class="contact-btn">
                    Contact Us
                </a>

                <button class="search-btn">

                    <iconify-icon
                        icon="material-symbols:search-rounded">
                    </iconify-icon>

                </button>

                <!-- Mobile Menu -->

                <button id="menuBtn" class="menu-btn">

                    <iconify-icon
                        icon="material-symbols:menu-rounded">
                    </iconify-icon>

                </button>

            </div>

        </div>

    </nav>

</header>

<!-- =======================
Sidebar Overlay
======================== -->

<div class="overlay"></div>

<!-- =======================
Sidebar
======================== -->

<aside class="sidebar">

    <div class="sidebar-header">

        <img src="images/logo.png" alt="Logo">

        <button id="closeBtn">

            <iconify-icon
                icon="material-symbols:close-rounded">
            </iconify-icon>

        </button>

    </div>

    <ul class="sidebar-menu">

        <li><a href="#">Home</a></li>

        <li><a href="#">Pages</a></li>

        <li><a href="#">Academics</a></li>

        <li><a href="#">Admissions</a></li>

        <li><a href="#">Courses</a></li>

        <li><a href="#">University Life</a></li>

        <li><a href="#">Contact</a></li>

    </ul>

    <div class="sidebar-bottom">

        <div class="contact-item">

            <iconify-icon icon="mdi:email-outline"></iconify-icon>

            <span>college@gmail.com</span>

        </div>

        <div class="contact-item">

            <iconify-icon icon="mdi:phone"></iconify-icon>

            <span>+8801712345678</span>

        </div>

        <div class="social-icons">

            <a href="#">
                <iconify-icon icon="ri:facebook-fill"></iconify-icon>
            </a>

            <a href="#">
                <iconify-icon icon="ri:linkedin-fill"></iconify-icon>
            </a>

            <a href="#">
                <iconify-icon icon="ri:instagram-line"></iconify-icon>
            </a>

            <a href="#">
                <iconify-icon icon="ri:twitter-x-line"></iconify-icon>
            </a>

        </div>

    </div>

</aside>

<!-- =======================
Hero Section
======================== -->
<!-- =======================
Hero Section
======================== -->

<section class="hero">

    <div class="hero-overlay"></div>

    <div class="container">

        <div class="hero-content">

            <h5>The Best University Of The State</h5>

            <h1>
                Transformative
                <br>
                Education
            </h1>

            <p>
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration
                in some form by injected humour or randomised words.
            </p>

            <div class="hero-buttons">

                <a href="#" class="btn-primary">
                    Apply to USD
                </a>

                <a href="#" class="btn-secondary">
                    Chat With Us
                </a>

            </div>

        </div>

    </div>

</section>











<!-- ==========================================
About University Section
========================================== -->

<section class="about-university">

    <div class="container">

        <div class="section-title">

            <h2>About Our University</h2>

            <p>
                Only when different values, experiences and perspectives
                are met with free and open discourse can education be
                truly transformative.
            </p>

        </div>

        <!-- Swiper -->

        <div class="swiper aboutSwiper">

            <div class="swiper-wrapper">

                <!-- Slide 1 -->

                <div class="swiper-slide">

                    <div class="about-wrapper">

                        <div class="about-image">

                            <img src="./assets/images/s2.jpg" alt="University">

                        </div>

                        <div class="about-card">

                            <span>Campus Information</span>

                            <h3>
                                Where Knowledge
                                Meets Innovation
                            </h3>

                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Nulla, cupiditate.
                                Quisquam consequatur atque molestias
                                exercitationem.
                            </p>

                            <a href="#" class="tour-btn">
                                Schedule A Tour
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Slide 2 -->

                <div class="swiper-slide">

                    <div class="about-wrapper">

                        <div class="about-image">

                            <img src="./assets/images/s3.jpg" alt="University">

                        </div>

                        <div class="about-card">

                            <span>Student Life</span>

                            <h3>
                                Learn With
                                Passion
                            </h3>

                            <p>
                                Discover exciting opportunities,
                                student clubs, research programs,
                                and innovative learning spaces.
                            </p>

                            <a href="#" class="tour-btn">
                                Explore Campus
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Slide 3 -->

                <div class="swiper-slide">

                    <div class="about-wrapper">

                        <div class="about-image">

                            <img src="./assets/images/s4.jpg" alt="University">

                        </div>

                        <div class="about-card">

                            <span>Research</span>

                            <h3>
                                Innovation Starts
                                Here
                            </h3>

                            <p>
                                We encourage students to solve
                                real-world problems through
                                innovation and research.
                            </p>

                            <a href="#" class="tour-btn">
                                Read More
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Slide 4 -->

                <div class="swiper-slide">

                    <div class="about-wrapper">

                        <div class="about-image">

                            <img src="./assets/images/s5.jpg" alt="University">

                        </div>

                        <div class="about-card">

                            <span>Admissions</span>

                            <h3>
                                Join Our
                                Community
                            </h3>

                            <p>
                                Apply today and become part of
                                one of the country's leading
                                universities.
                            </p>

                            <a href="#" class="tour-btn">
                                Apply Now
                            </a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Navigation -->

            <div class="about-navigation">

                <div class="swiper-button-prev about-prev"></div>

                <div class="swiper-pagination about-pagination"></div>

                <div class="swiper-button-next about-next"></div>

            </div>

        </div>

    </div>

</section>






<!-- ==========================================
Features Section
========================================== -->

<section class="features">

    <div class="container">

        <div class="features-wrapper">

            <!-- Left Side -->

            <div class="features-content">

                <span class="section-subtitle">
                    OUR BEST FEATURES
                </span>

                <h2>
                    Our students create a
                    vibrant and inclusive
                    community
                </h2>

                <!-- Feature Item -->

                <div class="feature-item">

                    <div class="feature-icon">

                        <iconify-icon
                            icon="solar:book-bold">
                        </iconify-icon>

                    </div>

                    <div class="feature-text">

                        <h4>Education Services</h4>

                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                            Sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                        </p>

                    </div>

                </div>

                <!-- Feature Item -->

                <div class="feature-item">

                    <div class="feature-icon">

                        <iconify-icon
                            icon="solar:diploma-bold">
                        </iconify-icon>

                    </div>

                    <div class="feature-text">

                        <h4>Efficient & Flexible</h4>

                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                            Sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                        </p>

                    </div>

                </div>

                <a href="#" class="feature-btn">
                    More on Admission
                </a>

            </div>

            <!-- Right Side -->

            <div class="features-gallery">

                <!-- Card 1 -->

                <div class="feature-card large">

                    <div class="card-image">

                        <img src="./assets/images/f2.jpg" alt="">

                    </div>

                    <span class="card-number">01</span>

                    <div class="card-content">

                        <h3>
                            International Hubs
                        </h3>

                        <a href="#">
                            Learn More

                            <iconify-icon
                                icon="ph:arrow-right-bold">
                            </iconify-icon>

                        </a>

                    </div>

                </div>

                <!-- Right Column -->

                <div class="gallery-right">

                    <!-- Card 2 -->

                    <div class="feature-card">

                        <div class="card-image">

                            <img src="./assets/images/f3.jpg" alt="">

                        </div>

                        <span class="card-number">
                            02
                        </span>

                        <div class="card-content">

                            <h3>
                                Bachelor's & Master's
                            </h3>

                            <a href="#">

                                Learn More

                                <iconify-icon
                                    icon="ph:arrow-right-bold">
                                </iconify-icon>

                            </a>

                        </div>

                    </div>

                    <!-- Card 3 -->

                    <div class="feature-card">

                        <div class="card-image">

                            <img src="./assets/images/f4.jpg" alt="">

                        </div>

                        <span class="card-number">
                            03
                        </span>

                        <div class="card-content">

                            <h3>
                                Student Activities
                            </h3>

                            <a href="#">

                                Learn More

                                <iconify-icon
                                    icon="ph:arrow-right-bold">
                                </iconify-icon>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>









<!-- ==========================================
Campus News Section
========================================== -->

<section class="campus-news">

    <div class="container">

        <!-- Section Heading -->

        <div class="section-heading">

            <span>CAMPUS NEWS</span>

            <h2>
                Stories About People, Research,
                <br>
                and Innovation Across The
                <br>
                Farm
            </h2>

        </div>

        <div class="news-wrapper">

            <!-- Left Column -->

            <div class="news-left">

                <!-- News Item -->

                <article class="news-horizontal">

                    <div class="news-image">

                        <img src="./assets/images/chess.jfif" alt="">

                    </div>

                    <div class="news-content">

                        <div class="news-category">

                            <iconify-icon icon="solar:book-bold"></iconify-icon>

                            <span>Science and Technology</span>

                        </div>

                        <h3>
                            Robot Provides Personalized
                            Room Cleanup
                        </h3>

                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                            Sed do eiusmod tempor incididunt.
                        </p>

                        <a href="#">
                            Continue Reading...

                            <iconify-icon
                            icon="ph:arrow-right-bold">
                            </iconify-icon>

                        </a>

                    </div>

                </article>

                <!-- News Item -->

                <article class="news-horizontal">

                    <div class="news-image">

                        <img src="./assets/images/building.jfif" alt="">

                    </div>

                    <div class="news-content">

                        <div class="news-category">

                            <iconify-icon icon="solar:book-bold"></iconify-icon>

                            <span>Law and Policy</span>

                        </div>

                        <h3>

                            Learning Network
                            Webinars for
                            Music Teachers

                        </h3>

                        <p>

                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                            Sed do eiusmod tempor incididunt.

                        </p>

                        <a href="#">

                            Continue Reading...

                            <iconify-icon
                            icon="ph:arrow-right-bold">
                            </iconify-icon>

                        </a>

                    </div>

                </article>

            </div>

            <!-- Right Column -->

            <div class="news-right">

                <!-- Big Card -->

                <article class="news-card">

                    <div class="card-image">

                        <img src="./assets/images/robot.jfif" alt="">

                    </div>

                    <div class="card-content">

                        <h3>

                            Gender inequality
                            in higher education
                            persists

                        </h3>

                        <p>

                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.

                        </p>

                        <a href="#">

                            Continue Reading...

                        </a>

                    </div>

                </article>

                <!-- Small Cards -->

                <div class="small-news">

                    <article class="small-card">

                        <img src="./assets/images/gra.jfif" alt="">

                        <div>

                            <span>Medicine</span>

                            <h4>

                                Empowering Health,
                                One Patient at a Time.

                            </h4>

                        </div>

                    </article>

                    <article class="small-card">

                        <img src="./assets/images/gra 2.jfif" alt="">

                        <div>

                            <span>Student Life</span>

                            <h4>

                                Every Student,
                                Every Dream,
                                Every Success.

                            </h4>

                        </div>

                    </article>

                </div>

            </div>

        </div>

        <!-- Bottom Link -->

        <div class="news-footer">

            <a href="#">

                Where Dreams Take Flight.

                <strong>More Campus News</strong>

                <iconify-icon
                icon="ph:arrow-right-bold">
                </iconify-icon>

            </a>

        </div>

    </div>

</section>





<!--=========================================
Course Search Section
==========================================-->

<section class="course-search-section">

    <div class="container">

        <div class="course-search-wrapper">

            <!-- Left Side Image -->

            <div class="course-image">

                <img src="./assets/images/book 2.jpg" alt="Course Search">

            </div>

            <!-- Middle Form -->

            <div class="course-search">

                <h2>Search For Courses</h2>

                <form action="#">

                    <!-- Keyword -->

                    <div class="form-group">
                        <input type="text" placeholder="Keywords">
                    </div>

                    <!-- Course ID -->

                    <div class="form-group">
                        <input type="text" placeholder="Course ID">
                    </div>

                    <!-- Department -->

                    <div class="form-group">

                        <select>

                            <option selected disabled>Department</option>
                            <option>Computer Science</option>
                            <option>Software Engineering</option>
                            <option>Business Administration</option>
                            <option>Civil Engineering</option>

                        </select>

                    </div>

                    <!-- Campus -->

                    <div class="form-group">

                        <select>

                            <option selected disabled>Campus</option>
                            <option>Main Campus</option>
                            <option>North Campus</option>
                            <option>South Campus</option>

                        </select>

                    </div>

                    <!-- Level -->

                    <div class="form-group">

                        <select>

                            <option selected disabled>Level</option>
                            <option>Diploma</option>
                            <option>Undergraduate</option>
                            <option>Postgraduate</option>

                        </select>

                    </div>

                    <!-- Instructor -->

                    <div class="form-group">

                        <select>

                            <option selected disabled>Instructor</option>
                            <option>John Michael</option>
                            <option>Emma Watson</option>
                            <option>David Wilson</option>

                        </select>

                    </div>

                    <!-- Semester -->

                    <div class="form-group">

                        <select>

                            <option selected disabled>Semester</option>
                            <option>Spring</option>
                            <option>Summer</option>
                            <option>Fall</option>

                        </select>

                    </div>

                    <!-- Credit -->

                    <div class="form-group">

                        <select>

                            <option selected disabled>Credit</option>
                            <option>1 Credit</option>
                            <option>2 Credits</option>
                            <option>3 Credits</option>
                            <option>4 Credits</option>

                        </select>

                    </div>

                    <button type="submit" class="search-btn">
                        Search Courses
                    </button>

                </form>

            </div>

            <!-- Right Side Content -->

            <div class="course-info">

                <span>CAMPUS NEWS</span>

                <h2>
                    Start Your Career &
                    Pursue Your Passion
                </h2>

                <p>
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when
                    looking at its layout.
                </p>

                <!-- You can add the checklist, CTA banner,
                founder info, and experience section here -->

            </div>

        </div>

    </div>

</section>






<!--=========================================
Sports & Athletics Section
==========================================-->

<section class="sports">

    <div class="container">

        <!-- Section Heading -->

        <div class="sports-heading">

            <span>SPORTS AND ATHLETICS</span>

            <h2>
                Beyond the Bleachers: Diverse
                <br>
                Sports & Activities
            </h2>

        </div>

        <!-- Sports Cards -->

        <div class="sports-wrapper">

            <!-- Card 1 -->

            <div class="sports-card">

                <div class="sports-image">

                    <img src="./assets/images/football boys.jpg" alt="Sports">

                </div>

                <div class="sports-content">

                    <h3>Home of Champions</h3>

                    <p>
                        There are many variations of passages of
                        Lorem Ipsum available but the majority
                        have suffered alteration in some form.
                    </p>

                    <a href="#">

                        National Championships

                        <iconify-icon
                        icon="ph:arrow-right-bold">
                        </iconify-icon>

                    </a>

                </div>

            </div>

            <!-- Card 2 -->

            <div class="sports-card">

                <div class="sports-image">

                    <img src="./assets/images/swim boy.jpg" alt="Sports">

                </div>

                <div class="sports-content">

                    <h3>Olympic Excellence</h3>

                    <p>
                        There are many variations of passages of
                        Lorem Ipsum available but the majority
                        have suffered alteration in some form.
                    </p>

                    <a href="#">

                        Medals

                        <iconify-icon
                        icon="ph:arrow-right-bold">
                        </iconify-icon>

                    </a>

                </div>

            </div>

            <!-- Card 3 -->

            <div class="sports-card">

                <div class="sports-image">

                    <img src="./assets/images/marathon.jpg" alt="Sports">

                </div>

                <div class="sports-content">

                    <h3>Multidimensional Impact</h3>

                    <p>
                        There are many variations of passages of
                        Lorem Ipsum available but the majority
                        have suffered alteration in some form.
                    </p>

                    <a href="#">

                        Athlete Stories

                        <iconify-icon
                        icon="ph:arrow-right-bold">
                        </iconify-icon>

                    </a>

                </div>

            </div>

        </div>

        <!-- Bottom Link -->

        <div class="sports-footer">

            <a href="#">

                Inspiring Minds, Shaping Futures.

                <strong>More About Athletics</strong>

                <iconify-icon
                icon="ph:arrow-right-bold">
                </iconify-icon>

            </a>

        </div>

    </div>

</section>






<!--=========================================
Recent News Section
==========================================-->

<section class="recent-news">

    <div class="container">

        <!-- Heading -->

        <div class="recent-heading">

            <span>NEWS AND EVENTS</span>

            <h2>
                Recent Important Stories
                <br>
                Updated
            </h2>

        </div>

        <div class="recent-wrapper">

            <!-- Left Side -->

            <div class="recent-left">

                <!-- Featured News -->

                <article class="featured-news">

                    <div class="featured-image">

                        <img src="./assets/images/three  boys.jpg" alt="">

                    </div>

                    <div class="featured-content">

                        <span class="badge">
                            Featured News
                        </span>

                        <h3>
                            Celebrating Hispanic Heritage
                            Month: Sioma Waisburd
                        </h3>

                        <small>October 06, 2025</small>

                        <p>

                            There are many variations of
                            passages of Lorem Ipsum available,
                            but the majority have suffered
                            alteration in some form.

                        </p>

                        <a href="#">

                            Read More

                            <iconify-icon
                            icon="ph:arrow-right-bold">
                            </iconify-icon>

                        </a>

                    </div>

                </article>

                <!-- Recent News List -->

                <div class="news-list">

                    <!-- News -->

                    <article class="news-item">

                        <img src="./assets/images/gra 3.jpg" alt="">

                        <div>

                            <span class="news-tag">
                                News
                            </span>

                            <h4>

                                Navigating Academia:
                                Tips and Stories
                                from Canyon University

                            </h4>

                            <small>
                                October 06, 2025
                            </small>

                            <p>

                                There are many variations
                                of passages available.

                            </p>

                        </div>

                    </article>

                    <!-- News -->

                    <article class="news-item">

                        <img src="./assets/images/menscollege.jpg" alt="">

                        <div>

                            <span class="news-tag">
                                News
                            </span>

                            <h4>

                                Beyond Graduation:
                                Canyon University's
                                Blog for Alumni

                            </h4>

                            <small>
                                October 09, 2025
                            </small>

                            <p>

                                There are many variations
                                of passages available.

                            </p>

                        </div>

                    </article>

                </div>

            </div>

            <!-- Right Side -->

            <aside class="events">

                <h3>Upcoming Events</h3>

                <!-- Event -->

                <div class="event-card">

                    <div class="date">

                        <span>Oct</span>

                        <h4>07</h4>

                    </div>

                    <div class="event-content">

                        <h5>

                            Fintech &
                            Key Investment
                            Conference

                        </h5>

                        <p>

                            Canyon Grand Hall

                        </p>

                    </div>

                </div>

                <!-- Event -->

                <div class="event-card">

                    <div class="date">

                        <span>Oct</span>

                        <h4>09</h4>

                    </div>

                    <div class="event-content">

                        <h5>

                            How to Organize
                            Your Studies

                        </h5>

                        <p>

                            Canyon Grand Hall

                        </p>

                    </div>

                </div>

                <!-- Event -->

                <div class="event-card">

                    <div class="date">

                        <span>Oct</span>

                        <h4>19</h4>

                    </div>

                    <div class="event-content">

                        <h5>

                            Planning And
                            Facilitating
                            Effective Meetings

                        </h5>

                        <p>

                            Canyon Grand Hall

                        </p>

                    </div>

                </div>

            </aside>

        </div>

    </div>

</section>






<!--=========================================
Footer Section
==========================================-->

<footer class="footer">

    <div class="container">

        <div class="footer-wrapper">

            <!--=================================
            About
            =================================-->

            <div class="footer-column">

                <a href="#" class="footer-logo">

                    <img src="./assets/images/logo.png" alt="Logo">

                </a>

                <p>
                    Our university is committed to academic excellence,
                    innovation, research, and preparing students for
                    successful careers through quality education and
                    a vibrant campus experience.
                </p>

                <div class="footer-social">

                    <a href="#">
                        <iconify-icon icon="ri:facebook-fill"></iconify-icon>
                    </a>

                    <a href="#">
                        <iconify-icon icon="ri:instagram-line"></iconify-icon>
                    </a>

                    <a href="#">
                        <iconify-icon icon="ri:linkedin-fill"></iconify-icon>
                    </a>

                    <a href="#">
                        <iconify-icon icon="ri:youtube-fill"></iconify-icon>
                    </a>

                    <a href="#">
                        <iconify-icon icon="ri:twitter-x-fill"></iconify-icon>
                    </a>

                </div>

            </div>

            <!--=================================
            Quick Links
            =================================-->

            <div class="footer-column">

                <h3>Quick Links</h3>

                <ul>

                    <li><a href="#">Home</a></li>

                    <li><a href="#">About Us</a></li>

                    <li><a href="#">Admissions</a></li>

                    <li><a href="#">Courses</a></li>

                    <li><a href="#">Campus Life</a></li>

                    <li><a href="#">Contact</a></li>

                </ul>

            </div>

            <!--=================================
            Academics
            =================================-->

            <div class="footer-column">

                <h3>Academics</h3>

                <ul>

                    <li><a href="#">Undergraduate</a></li>

                    <li><a href="#">Postgraduate</a></li>

                    <li><a href="#">Research</a></li>

                    <li><a href="#">Online Learning</a></li>

                    <li><a href="#">Library</a></li>

                    <li><a href="#">Departments</a></li>

                </ul>

            </div>

            <!--=================================
            Contact
            =================================-->

            <div class="footer-column">

                <h3>Contact Info</h3>

                <ul class="contact-list">

                    <li>

                        <iconify-icon icon="mdi:map-marker-outline"></iconify-icon>

                        123 University Road,
                        New York, USA

                    </li>

                    <li>

                        <iconify-icon icon="mdi:phone-outline"></iconify-icon>

                        +1 (555) 123-4567

                    </li>

                    <li>

                        <iconify-icon icon="mdi:email-outline"></iconify-icon>

                        info@university.edu

                    </li>

                    <li>

                        <iconify-icon icon="mdi:clock-outline"></iconify-icon>

                        Mon - Fri : 9:00 AM - 5:00 PM

                    </li>

                </ul>

            </div>

            <!--=================================
            Newsletter
            =================================-->

            <div class="footer-column newsletter">

                <h3>Newsletter</h3>

                <p>

                    Subscribe to receive university news,
                    events and admission updates.

                </p>

                <form action="#">

                    <input
                    type="email"
                    placeholder="Your Email Address">

                    <button type="submit">

                        Subscribe

                    </button>

                </form>

            </div>

        </div>

        <!--=================================
        Bottom Footer
        =================================-->

        <div class="footer-bottom">

            <p>

                © 2026 Canyon University.
                All Rights Reserved.

            </p>

            <div class="footer-bottom-links">

                <a href="#">Privacy Policy</a>

                <a href="#">Terms & Conditions</a>

                <a href="#">Sitemap</a>

            </div>

        </div>

    </div>

</footer>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>