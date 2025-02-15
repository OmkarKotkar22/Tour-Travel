<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="book.css">

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
<body>
    <header class="header-section">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-5 pt-3 logo wow animate__animated animate__fadeInUp">
                    <a href="index.php"><h1 class="pl-5">Travel.</h1></a>
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
<div class="container-fluid">
    <div class="row" >
        <div class="col-12 p-0 wow animate__animated animate__fadeInUp">
            <div class="heading" style ="background:url('images/about-section-image.jpg'); background-repeat: no-repeat; background-size: cover; height: 300px; width: 100%;">
                <h1 class="d-flex justify-content-center text-white wow animate__animated animate__fadeInUp" style="padding-top:150px;">Book Now</h1>
            </div>
        </div>
    </div>
</div>
<section class="booking mt-5">
    <h1 class="heading-title pt-5 d-flex justify-content-center text-white  wow animate__animated animate__fadeInUp">Book Your Trip</h1>
    <form action="book_form.php" method="post" class="book-form d-flex justify-content-center m-5">  
        <div class="container">  
            <div class="row">
                <div class="inputBox col-lg-12 col-xl-6 mt-5 flex">
                    <label for="name" class="text-white wow animate__animated animate__fadeInUp">Name:</label><br>
                    <input type="text" placeholder="Enter your Name" name="sname"  class="bg-light wow animate__animated animate__fadeInUp" required/>
                </div>
                <div class="inputBox col-lg-12 col-xl-6 mt-5 flex">    
                    <label class="text-white wow animate__animated animate__fadeInUp">Email:</label><br>
                    <input type="email" placeholder="enter your email" name="semail" class="bg-light wow animate__animated animate__fadeInUp" required >
                </div>   
                <div class="inputBox col-lg-12 col-xl-6 mt-5 flex">
                    <label class="text-white wow animate__animated animate__fadeInUp">Phone:</label><br>
                    <input type="number" placeholder="enter your number" name="smobile" class="bg-light wow animate__animated animate__fadeInUp" required >
                </div>
                <div class="inputBox col-lg-12 col-xl-6 mt-5 flex">    
                    <label class="text-white wow animate__animated animate__fadeInUp">Address:</label><br>
                    <input type="text" placeholder="enter your address" name="saddress" class="bg-light wow animate__animated animate__fadeInUp" >
                </div>   
                <div class="inputBox col-lg-12 col-xl-6 mt-5 flex">
                    <label class="text-white wow animate__animated animate__fadeInUp">Where to:</label><br>
                    <input type="text" placeholder="place you want to visit" name="slocation" class="bg-light wow animate__animated animate__fadeInUp" > 
                </div>
                <div class="inputBox col-lg-12 col-xl-6 mt-5 flex">    
                    <label class="text-white wow animate__animated animate__fadeInUp">How many:</label><br>
                    <input type="number" placeholder="number of guests" name="sguests" class="bg-light wow animate__animated animate__fadeInUp" > 
                </div>
                <div class="inputBox col-lg-12 col-xl-6 mt-5 flex">    
                    <label class="text-white wow animate__animated animate__fadeInUp">Arrivals:</label><br>
                    <input type="date" name="sarrivals" class="bg-light wow animate__animated animate__fadeInUp" >
                </div>
                <div class="inputBox col-lg-12 col-xl-6 mt-5 flex"  >    
                    <label class="text-white wow animate__animated animate__fadeInUp">Leaving:</label><br>
                    <input type="date" name="sleaving" class="bg-light wow animate__animated animate__fadeInUp" >
                </div>
                <div class="inputBox col-lg-12 col-xl-6 mt-5 flex">
                    <label class="text-white wow animate__animated animate__fadeInUp">Payment:</label><br>
                    <input type="number" placeholder="enter the Payment" name="spayment" class="bg-light wow animate__animated animate__fadeInUp" required >
                </div>
                    <div class="inputBox col-lg-12 col-xl-6 mt-5" >
                        <label class="text-white wow animate__animated animate__fadeInUp">Travel through:</label><br>
                        <select name="sthrough" id="" class="bg-light wow animate__animated animate__fadeInUp">
                        <option value="BUS">bus</option>
                        <option value="TRAIN">train</option>
                        <option value="CAR">car</option>
                        <option value="BIKE">bike</option>
                        <option value="PLANE">plane</option>
                        </select>
                    </div>
                </div>
            <button  class =" btn mb-4 mt-5 pl-5 pr-5 wow animate__animated animate__fadeInUp" style="margin-left:40%;" >Submit</button>
            </div>
        </div>    
    </form>
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
                    <span class="d-block"><a href="" style="color: black;"><i class="fa-solid fa-globe mr-3"></i>Ahilyanagar, India- 414001</a></span>
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

























<!-- swippwr js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>





