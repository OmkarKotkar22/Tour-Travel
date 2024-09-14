<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/927ba21532.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2-dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2-dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <!-- Online CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Javascript -->
    <script type="text/javascript" src="assets/bootstrap-4.6.2-dist/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2-dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
    <!-- Online JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <!-- wowjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <!-- animation -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
</head>
<body class="body">
    <main class="main">
        <header class="header-section">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-5 pt-3 logo wow animate__animated animate__fadeInUp">
                        <a href="index.php" ><h1 class="pl-5">Travel.</h1></a>
                    </div>
                    <div class="col-7 pt-2 d-flex justify-content-end wow animate__animated animate__fadeInUp">
                        <nav class="navbar navbar-expand-lg navbar-light ">
                            <button class="navbar-toggler border-0  pr-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                  <a class="nav-link" href="index.php"><span>Home</span></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="book.php"><span>Book</span></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="admin.php"><span>Admin</span></a>
                                </li>
                              </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <section class="slider-section wow animate__animated animate__fadeInUp" id="">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-12 p-0 slider">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/slider-img-1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slider-img-2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slider-img-3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                <div class="carousel-caption d-flex justify-content-start ">
                                    <h1 class="slider-heading">Explore,discover,<br>Travel</h1>
                                </div>
                            </div><br>
                            <div class="col-sm-12 col-md-10 col-lg-8 col-xl-7">
                                <div class="carousel-caption  d-flex justify-content-start">
                                    <p class="slider-paragraph">“Remember that happiness is a way of travel - not a destination, Jobs fill your pocket, but adventures fill your soul.”</p>
                                </div>
                            </div><br><br>
                            <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                <div class="carousel-caption d-flex justify-content-start">
                                    <button class="slider-button"><a href="#about">Read more</a></button>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </button>
                          </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="marquee-section mb-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow animate__animated animate__fadeInUp">
                        <marquee behavior="scroll" direction="right" scrollamount="25"><img src="images/plane.gif" alt=""></marquee>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-section mb-5 mt-5" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        <h2 class="wow animate__animated animate__fadeInUp">About Us</h2>
                        <div class="home-about mb-4"> 
                            <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6 image">
                                <img src="images/about-section-image.jpg" alt="" class="wow animate__animated animate__fadeInUp">   
                            </div>         
                             <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6 content wow animate__animated animate__fadeInUp">
                                <h3>About Travel</h3>
                                <p>Discover the world with us.
                                     We're avid explorers sharing the joy of travel. From hidden
                                     gems to iconic landmarks, let our expertise guide you on extraordinary journeys. “We live in a wonderful world that is full of beauty, charm and adventure. There is no end to the adventures we can have if only we seek them with our eyes open.”</p>         
                             </div>            
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="card wow animate__animated animate__fadeInUp">
                            <div class="card -body">
                                <i class="fa-solid fa-map d-flex justify-content-center pb-4 pt-3"></i>
                                <p class="d-flex justify-content-center">Top Destinations</p>
                            </div>
                        </div>
                    </div>           
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="card wow animate__animated animate__fadeInUp">
                            <div class="card -body">
                                <i class="fa-solid fa-hand-holding-dollar d-flex justify-content-center pb-4 pt-3"></i>
                                <p class="d-flex justify-content-center">Afforable Price</p>
                            </div>
                        </div>
                    </div>           
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="card wow animate__animated animate__fadeInUp">
                            <div class="card -body">
                                <i class="fa-solid fa-headphones-simple d-flex justify-content-center pb-4 pt-3"></i>
                                <p class="d-flex justify-content-center">24/7 guide Service</p>
                            </div>
                        </div>
                    </div>           
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="card wow animate__animated animate__fadeInUp">
                            <div class="card -body">
                                <i class="fa-solid fa-receipt d-flex justify-content-center pb-4 pt-3"></i>
                                <p class="d-flex justify-content-center">Offers</p>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </section>

        
        <section class="offer-section mb-5 mt-5 wow animate__animated animate__fadeInUp">
            <div class="container" style="background-color:#eee;">
            <h2 style="margin-top: 50px;">Destination offers</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="offerss">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><p class="col-8 enjoy">Enjoy Your vacations with Exclusive Deals!</p></td>
                                        <b class="col-2 slight">Offers</b>
                                    </tr>
                                </tbody>
                            </table>     
                        </div>
                    </div>
                </div>
              
                <div class="container py-5 destination">
                        <div class="row g-3">
                            <div class="col-lg-7 col-md-6">
                                <div class="row g-3">
                                    <div class="col-lg-12 col-md-12 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                                        <a class="position-relative d-block overflow-hidden" href="book.php">
                                            <img class="img-fluid" src="images/offer-img-1.jpeg" alt="">
                                            <div class="offer bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF</div>
                                            <div class="offers bg-white fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Thailand</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                                        <a class="position-relative d-block overflow-hidden" href="book.php">
                                            <img class="img-fluid" src="images/offer-img-2.jpeg" alt="" style="height: 440px; width:100%;">
                                            <div class="offer bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">25% OFF</div>
                                            <div class="offers bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Malaysia</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                                        <a class="position-relative d-block overflow-hidden" href="book.php">
                                            <img class="img-fluid" src="images/offer-img-3.jpeg" alt="" style="height: 440px; width:100%;">
                                            <div class="offer bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">35% OFF</div>
                                            <div class="offers bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Australia</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.7s" style="min-height: 350px;">
                                <a class="position-relative d-block h-100 overflow-hidden" href="book.php">
                                    <img class="img-fluid position-absolute w-100 h-100" src="images/offer-img-4.jpeg" alt="" style="object-fit: cover;">
                                    <div class="offer bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF</div>
                                    <div class="offers bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Indonesia</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="service-section mb-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        <h2>Our Services</h2>
                        <div class="home-service mb-4">        
                             <div class="col-12 content wow animate__animated animate__fadeInUp">
                                <h3>About Services</h3>
                                <p>Discover the world with us.
                                     We're avid explorers sharing the joy of travel. From hidden
                                     gems to iconic landmarks, let our expertise guide you on extraordinary journeys. “We live in a wonderful world that is full of beauty, charm and adventure. There is no end to the adventures we can have if only we seek them with our eyes open.”</p>         
                             </div>            
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="card wow animate__animated animate__fadeInUp">
                            <div class="card -body">
                                <i class="fa-solid fa-map d-flex justify-content-center pb-4 pt-3"></i>
                                <p class="d-flex justify-content-center">Top Destinations</p>
                            </div>
                        </div>
                    </div>           
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="card wow animate__animated animate__fadeInUp">
                            <div class="card -body">
                                <i class="fa-solid fa-hand-holding-dollar d-flex justify-content-center pb-4 pt-3"></i>
                                <p class="d-flex justify-content-center">Afforable Price</p>
                            </div>
                        </div>
                    </div>           
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="card wow animate__animated animate__fadeInUp">
                            <div class="card -body">
                                <i class="fa-solid fa-headphones-simple d-flex justify-content-center pb-4 pt-3"></i>
                                <p class="d-flex justify-content-center">24/7 guide Service</p>
                            </div>
                        </div>
                    </div>           
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="card wow animate__animated animate__fadeInUp">
                            <div class="card -body">
                                <i class="fa-solid fa-receipt d-flex justify-content-center pb-4 pt-3"></i>
                                <p class="d-flex justify-content-center">Offers</p>
                            </div>
                        </div>
                    </div>   
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="card wow animate__animated animate__fadeInUp">
                            <div class="card -body">
                                <i class="fa-solid fa-globe d-flex justify-content-center pb-4 pt-3"></i>
                                <p class="d-flex justify-content-center">WorldWide Tour</p>
                            </div>
                        </div>
                    </div>           
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="card wow animate__animated animate__fadeInUp">
                            <div class="card -body">
                                <i class="fa-solid fa-hotel d-flex justify-content-center pb-4 pt-3"></i>
                                <p class="d-flex justify-content-center">Hotel Reservation</p>
                            </div>
                        </div>
                    </div>           
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="card wow animate__animated animate__fadeInUp">
                            <div class="card -body">
                                <i class="fa-solid fa-user d-flex justify-content-center pb-4 pt-3"></i>
                                <p class="d-flex justify-content-center">Travel Guides</p>
                            </div>
                        </div>
                    </div>           
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="card wow animate__animated animate__fadeInUp">
                            <div class="card -body">
                                <i class="fa-solid fa-calendar-days d-flex justify-content-center pb-4 pt-3"></i>
                                <p class="d-flex justify-content-center">Management</p>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </section>

        <section class="contact-section mb-5 mt-5">
            <div class="container wow animate__animated animate__fadeInUp" style="background-color:#eee;">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact</h2>
                        <p>Feel free to contact us for any questions or inquiries. We will get back to you as soon as possible.about-section
                        <div class="col-md-6 col-lg-12">
                            <i class="fa fa-clock-o"></i>
                            <p>Opening Hours: Monday to Friday from 9am to  5pm, Saturday and Sunday closed.</p>
                        </div>
                    </div>
                </div>
                <div class="row contact-info">
                    <div class="col-md-6 col-lg-3">
                        <i class="fa fa-map-marker"></i>
                        <p>Address: 123 Street Name, City, State, Country<br/>Postal Code: 1234567890</p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <i class="fa fa-phone"></i>
                        <p>Phone: (123) 123-4567<br/>Fax: (123) 123-4568</p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <i class="fa fa-envelope"></i>
                        <p>Email: info@yourwebsite.com<br/>Website: www.yourwebsite.com</p>
                    </div>
                    <div class="col-md-6 col-lg-3 d-none d-md-block">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d781499.5074565723!2d77.4942429246916!3d20.30603733830045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcb05d46788921%3A0x6677e92c1a5181b6!2sAhmednagar%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1712505062776!5m2!1sen!2sin" width="250" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>   
                </div>
            </div>
        </section>

        <section class="review-section mb-5 mt-5">
            <div class="container wow animate__animated animate__fadeInUp">
                <div class="row">
                    <div class="col-12">
                        <h2>Clients Review</h2>
                    </div>
                    <div class="col-12">
                        <div class="card ">
                            <div class="card -body">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 100%;">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="images/review-slider-img1.jpg" class="d-block" alt="..." style="height: 100px; width: 20%; margin-left:40%;">
                                                <p style="color: black;" class="d-flex justify-content-center">Exceptional service and breathtaking views! Our stay was nothing short of magical.<br> The staff went above and beyond to make us feel at home. A must-visit destination!".</p>
                                                <h3 style="color: black;" class="d-flex justify-content-center">Yash Mane</h3>
                                                <span style="color: black;" class="d-flex justify-content-center">traveller</span>
                                           
                                        </div>
                                        
                                        <div class="carousel-item">
                                            <img src="https://png.pngitem.com/pimgs/s/404-4042710_circle-profile-picture-png-transparent-png.png" class="d-block" alt="..." style="height: 100px; width: 20%; margin-left:40%; border-radius:50%;">
                                                <p style="color: black;" class="d-flex justify-content-center">Exceptional service and breathtaking views! Our stay was nothing short of magical.<br> The staff went above and beyond to make us feel at home. A must-visit destination!".</p>
                                                <h3 style="color: black;" class="d-flex justify-content-center">Dipak Sharma</h3>
                                                <span style="color: black;" class="d-flex justify-content-center">traveller</span>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnmMplaULeMRcbFj5MeE0s71pjnkwaS1D9Lg&s" class="d-block" alt="..." style="height: 100px; width: 20%; margin-left:40%; border-radius:50%;">
                                                <p style="color: black;" class="d-flex justify-content-center">Exceptional service and breathtaking views! Our stay was nothing short of magical.<br> The staff went above and beyond to make us feel at home. A must-visit destination!".</p>
                                                <h3 style="color: black;" class="d-flex justify-content-center">Saloni Roy</h3>
                                                <span style="color: black;" class="d-flex justify-content-center">traveller</span>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-xl-3 mt-5 wow animate__animated animate__fadeInUp">
                        <a href="index.php"><h1>Travel.</h1></a>
                        <p>Discover the world with us.
                            We're avid explorers sharing the joy of travel. From hidden
                            gems to iconic landmarks, let our expertise guide you on extraordinary journeys.</p>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-xl-3 mt-5 wow animate__animated animate__fadeInUp">
                        <div class="quick-link">
                            <h3 class=" d-flex justify-content-start">Quick Link</h3>
                            <span class="d-block"><a href="" style="color: black;"><i class="fa-solid fa-arrow-right mr-3"></i>Home</a></span>
                            <span class="d-block"><a href="" style="color: black;"><i class="fa-solid fa-arrow-right mr-3"></i>About</a></span>
                            <span class="d-block"><a href="" style="color: black;"><i class="fa-solid fa-arrow-right mr-3"></i>Service</a></span>
                            <span class="d-block"><a href="" style="color: black;"><i class="fa-solid fa-arrow-right mr-3"></i>Contact</a></span>
                            <span class="d-block"><a href="" style="color: black;"><i class="fa-solid fa-arrow-right mr-3"></i>Book</a></span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-xl-3 mt-5 wow animate__animated animate__fadeInUp">
                        <div class="contact-us">
                            <h3 class=" d-flex justify-content-start">Contact Us</h3>
                            <span class="d-block"><a href="" style="color: black;"><i class="fa-solid fa-phone mr-3"></i>+91 1234567890</a></span>
                            <span class="d-block"><a href="" style="color: black;"><i class="fa-solid fa-phone mr-3"></i>+91 9876543210</a></span>
                            <span class="d-block"><a href="" style="color: black;"><i class="fa-solid fa-envelope mr-3"></i>contact@Gmail.Com</a></span>
                            <span class="d-block"><a href="https://maps.google.com/maps?ll=19.110322,74.742673&z=6&t=m&hl=en&gl=IN&mapclient=embed&q=Ahmednagar%20Maharashtra" style="color: black;"><i class="fa-solid fa-globe mr-3"></i>Ahilyanagar, India- 414001</a></span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-xl-3 mt-5 wow animate__animated animate__fadeInUp">
                        <div class="follow-us">
                            <h3 class=" d-flex justify-content-start">Follow Us</h3>
                            <span class="d-block"><a href="" style="color: black;"><i class="fa-brands fa-square-whatsapp mr-3"></i>WhatsApp</a></span>
                            <span class="d-block"><a href="" style="color: black;"><i class="fa-brands fa-square-instagram mr-3"></i>Instagram</a></span>
                            <span class="d-block"><a href="" style="color: black;"><i class="fa-brands fa-linkedin mr-3"></i>LinkedIn</a></span>
                            <span class="d-block"><a href="" style="color: black;"><i class="fa-brands fa-twitter mr-3"></i>Twitter</a></span>
                        </div>
                    </div>
                </div>
                                
                <hr style="color: black; width: 90%; margin-left:0%; border: 1px solid black;" class="wow animate__animated animate__fadeInUp">
                <div class="last-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h4 class=" d-flex justify-content-between wow animate__animated animate__fadeInUp">Designed and Developed by Omkar Kotkar & Bhakti Barshikar |All Rights Reserved!</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</footer>
    </main>
    <script>
        new WOW().init();
    </script>
</body>
</html>
    
