
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from vecurosoft.com/products/html/mixlax/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jun 2020 14:11:00 GMT -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Site Title -->
  <title>Feelings Beauty Care</title>


  <!-- Favicon -->

  
  <link rel="shortcut icon" href="assets/img/favicon1.png" type="image/png">

  <link rel="apple-touch-icon" href="assets/img/favicon1.png">

  <!-- All CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="assets/css/meanmenu.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:600|Work+Sans" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="rev-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="rev-slider/revolution/fonts/font-awesome/css/font-awesome.css">
  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/css.css">
  <style>
	#grad1 {
	  background-color: red; /* For browsers that do not support gradients */
	  background-image: linear-gradient(to right,  #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D, #F56040, #FFDC80); /* Standard syntax (must be last) */
	}
  </style>
  <style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 999; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<!-- Theme Responsive -->
<link rel="stylesheet" href="assets/css/responsive.css">
<script src="https://kit.fontawesome.com/2d80b9edc3.js" crossorigin="anonymous"></script>

<script src="https://www.w3schools.com/lib/w3.js"></script>
<script>
var myObject= {"customers":[
{"CustomerName" : "Alfreds Futterkiste","City" : "Berlin","Country" : "Germany"},
{"CustomerName" : "Berglunds snabbköp","City" : "Luleå","Country" : "Sweden"},
{"CustomerName" : "Centro comercial Moctezuma","City" : "México D.F.","Country" : "Mexico"},
{"CustomerName" : "Ernst Handel","City" : "Graz","Country" : "Austria"},
{"CustomerName" : "FISSA Fabrica Inter. Salchichas S.A.","City" : "Madrid","Country" : "Spain"},
{"CustomerName" : "Galería del gastrónomo","City" : "Barcelona","Country" : "Spain"},
{"CustomerName" : "Island Trading","City" : "Cowes","Country" : "UK"},
{"CustomerName" : "Königlich Essen","City" : "Brandenburg","Country" : "Germany"},
{"CustomerName" : "Laughing Bacchus Wine Cellars","City" : "Vancouver","Country" : "Canada"},
{"CustomerName" : "Magazzini Alimentari Riuniti","City" : "Bergamo","Country" : "Italy"},
{"CustomerName" : "North/South","City" : "London","Country" : "UK"},
{"CustomerName" : "Paris spécialités","City" : "Paris","Country" : "France"},
{"CustomerName" : "Rattlesnake Canyon Grocery","City" : "Albuquerque","Country" : "USA"},
{"CustomerName" : "Simons bistro","City" : "København","Country" : "Denmark"},
{"CustomerName" : "The Big Cheese","City" : "Portland","Country" : "USA"},
{"CustomerName" : "Vaffeljernet","City" : "Århus","Country" : "Denmark"},
{"CustomerName" : "Wolski Zajazd","City" : "Warszawa","Country" : "Poland"}
]};
var mygyoObject= {"feedback":[
{"date" : "14-4-2020","heading" : "Berlin","description" : "Germany"},
{"date" : "15-5-2020","heading" : "Luleå","description" : "Sweden"},
{"date" : "16-6-2020","heading" : "México D.F.","description" : "Mexico"},
{"date" : "14-4-2020","heading" : "Berlin","description" : "Germany"},
{"date" : "15-5-2020","heading" : "Luleå","description" : "Sweden"},
{"date" : "16-6-2020","heading" : "México D.F.","description" : "Mexico"},
{"date" : "14-4-2020","heading" : "Berlin","description" : "Germany"},
{"date" : "15-5-2020","heading" : "Luleå","description" : "Sweden"},
{"date" : "16-6-2020","heading" : "México D.F.","description" : "Mexico"}
]};
</script>
  

</head>
<body>

  <script type="text/javascript">
   function myFun(){
    var FirstName=document.getElementById('FirstName').value;
    var LastName=document.getElementById('LastName').value;
    var Email=document.getElementById('email').value;
    var MobileNo=document.getElementById('number').value;
      var pattern1="^[a-zA-Z]+$";
      var reg1= new RegExp(pattern1);
      var pattern2="^[a-zA-Z]+$";
      var reg2= new RegExp(pattern2);
      var pattern3="^[a-zA-Z@]"; 
      var reg3 = new RegExp(pattern3);
      var pattern4="^[0-9]{10}$"; 
			var reg4 = new RegExp(pattern4);

   if(reg1.test(FirstName))
      {
        document.getElementById('errFirstName').innerHTML="";
      }
    else
      {
        document.getElementById('errFirstName').innerHTML="Please Enter Valid Name.";
      }
      
   if(reg2.test(LastName))
      {
        document.getElementById('errLastName').innerHTML="";
      }
    else
      {
        document.getElementById('errLastName').innerHTML="Please Enter Valid LastName.";
      }

      if(reg3.test(Email))
			{
				document.getElementById('errEmail').innerHTML="";
			}
		else
			{
				document.getElementById('errEmail').innerHTML="Please Enter Valid Email.";
      }

      if(reg4.test(MobileNo))
			{
				document.getElementById('errMobile').innerHTML="";
			}
		else
			{
				document.getElementById('errMobile').innerHTML="Please Enter Valid Mobile No.";
			}
  }
  </script>


  <!-- Overly Sidebar -->
  <div class="overly-sidebar-wrapper d-none d-lg-block">
    <div class="overly-sidebar-content">
      <button id="sidebar-close" class="circle-btn primary-btn"><i class="flaticon-cancel"></i></button>
      <!-- Logo -->
      <div class="sidebar-about text-center">
        <a href="index.html"><img src="assets/img/logo-2.png" alt="Prolax" class="img-fluid"></a>
        <p class='text'>Our Mission is to Enhance your Natural Beauty because Makeup should never be used to hide yourself.She believes in Makeup magnifies the beauty that already exists.Bridal Makeup should bring out the brides best features & make them look the most beautiful version of themselves.</p>
      </div>
      <!-- Sidebar Contact Information -->
      <div class="side-menu-gallery">
        <!-- Single Feed -->
        <div class="gallery-item">
          <a href="portfolio.html"><img src="assets/img/instagram/insta-img-1.jpg" alt="Instagram Feeds"></a>
        </div>
        <!-- Single Feed -->
        <div class="gallery-item">
          <a href="portfolio.html"><img src="assets/img/instagram/insta-img-2.jpg" alt="Instagram Feeds"></a>
        </div>
        <!-- Single Feed -->
        <div class="gallery-item">
          <a href="portfolio.html"><img src="assets/img/instagram/insta-img-3.jpg" alt="Instagram Feeds"></a>
        </div>
        <!-- Single Feed -->
        <div class="gallery-item">
          <a href="portfolio.html"><img src="assets/img/instagram/insta-img-4.jpg" alt="Instagram Feeds"></a>
        </div>
        <!-- Single Feed -->
        <div class="gallery-item">
          <a href="portfolio.html"><img src="assets/img/instagram/insta-img-5.jpg" alt="Instagram Feeds"></a>
        </div>
        <!-- Single Feed -->
        <div class="gallery-item">
          <a href="portfolio.html"><img src="assets/img/instagram/insta-img-6.jpg" alt="Instagram Feeds"></a>
        </div>
        <!-- Single Feed -->
        <div class="gallery-item">
          <a href="portfolio.html"><img src="assets/img/instagram/insta-img-7.jpg" alt="Instagram Feeds"></a>
        </div>
        <!-- Single Feed -->
        <div class="gallery-item">
          <a href="portfolio.html"><img src="assets/img/instagram/insta-img-8.jpg" alt="Instagram Feeds"></a>
        </div>
      </div>
      <!-- Sidebar Subscribe Form -->
      <form action="#" class="sidebar-subscribe-form text-center">
        <label for="subscribeEmail">Get Subscribed!</label>
        <input type="text" name="subscribeEmail" id="subscribeEmail" placeholder="Enter your mail here">
        <button type="submit"><i class="flaticon-right-arrow"></i></button>
      </form>
      <!-- Sidebar Social Links -->
      <ul class="sidebar-social-links">
        <li><a href="https://www.facebook.com/feelingsbeautycare" target="_blanck" class="circle-btn"><i class="flaticon-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/mengarurmi/" target="_blanck" class="circle-btn"><i class="flaticon-instagram"></i></a></li>
        <li><a href="tel:8000661578" target="_blanck" class="circle-btn"><i class="flaticon-whatsapp"></i></a></li>
        <li><a href="mailto:Info.feelingsbeautycare@gmail.com" target="_blanck" class="circle-btn"><i class="flaticon-mail"></i></a></li>
      </ul>
      <!-- CTA Btn -->
      <div class="sidebar-cta-btn">
        <a href="contact.html" class="def-btn">Contact Us<span class="flaticon-right-arrow"></span></a>
      </div>
    </div>
  </div>
  <!-- Overly Sidebar End -->

  <!-- Popup Search Box -->
  <div class="popup-search-box d-none d-lg-block">
    <!-- Close Btn -->
    <button class="searchClose"><i class="flaticon-close"></i></button>
    <form action="#">
      <input type="text" placeholder="What are you looking for">
      <button type="submit"><i class="flaticon-search"></i></button>
    </form>
  </div>
  <!-- Popup Search Box end -->




  <!-- Header Area -->
  <!-- Header Area -->
  <header class="unvisible-default" style="background: black; z-index: 10;">
    <div class="container-fluid" >
      <div class="row align-items-center" >
        <div class="col-lg-2" >
          <!-- Header Logo -->
          <div class="header-logo">
            <a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
          </div>
        </div>
        <div class="col-lg-8">
          <!-- Main Menu Area -->
          <nav class="main-menu">
            <ul>
              <li>
                <a href="index.html"  class="margin" style="color: #F0E68C">Home</a>
              </li>
              <li><a href="about.html"  class="margin" style="color: #F0E68C">About us</a></li>
              <li><a href="courses.html"  class="margin" style="color: #F0E68C">Courses</a></li>
              <li>
                <a href="services.html" class="margin" style="color: #F0E68C">Services</a>
              </li>
              
              <li>
                <a href="portfolio.html" class="margin" style="color: #F0E68C">Portfolio</a>
              </li>
         <li><a href="contact.html"  class="margin" style="color: #F0E68C" >Contact us</a></li>
            </ul>
          </nav>
          <!-- Main Menu Area end -->
        </div>
     


        <div class="col-lg-2 text-right ">
          <!-- Header Button Area -->
          <div class="header-btn">
            <button class="search-btn circle-btn"><i class="flaticon-search"></i></button>
            <button class="sidebarBtn circle-btn"><i class="flaticon-menu"></i></button>
          </div>
          <!-- Header Button Area -->
        </div>  
      </div>
      <!-- Mobile Menu -->
      <div class="mobile-menu-container"></div>
    </div>
  </header>
  <!-- Header Area end -->



  <!-- header Two -->
  <span>
  <div class="header-tow-wrapper">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-xl-2 col-lg-3 wow fadeInLeft" data-wow-delay="0.3s">
          <!-- Header Two Logo -->
          <div class="header-two-logo">
            <a href="index.html"><img src="assets/img/logo.png" alt="MIxlax"></a>
          </div>
          <!-- Header Two Logo end -->
        </div>
        <div class="col-lg-8 wow zoomIn" data-wow-delay="0.3s">
          <ul>
            <li >
              <a href="index.html" class="margin" style="color: #F0E68C"  >Home</a>
           
            </li>
            <li><a href="about.html" style="color: #F0E68C  " class="margin">About us</a></li>
            <li><a href="courses.html" style="color: #F0E68C  " class="margin">Courses</a></li>
            <li>
              <a href="services.html" style="color: #F0E68C" class="margin">Services</a>
            </li>
            <li><a href="portfolio.html" style="color: #F0E68C" class="margin">Portfolio</a></li>
            <li><a href="contact.html" style="color: #F0E68C" class="margin">Contact us</a></li>
          </ul>
        </div>
       
        <div class="col-lg-2 wow fadeInRight" data-wow-delay="0.3s">
          <!-- header two Btn -->
          <div class="header-two-btn text-right fadeIn">
            <button class="search-btn circle-btn"><i class="flaticon-search"></i></button>
            <button class="sidebarBtn circle-btn"><i class="flaticon-menu"></i></button>
          </div>
          <!-- header two Btn end -->
        </div>
      </div>
    </div>
  </div>
</span>
  <!-- header Two end -->




  <!-- Hero Area -->
  <div class="hero-sec-wrapper hero-slider-active">
    <!-- Single Hero Slide -->
    <div class="single-hero-slide">
      <div class="container-fluid">
        <!-- Slider Big Image -->
        <div class="slider-big-img" >
          <img src="assets/img/hero/XCL19.webp" class="img-fluid" alt="Hero Image">
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-5 col-xl-3 offset-md-6  offset-lg-6 offset-xl-1">
            <!-- hero content -->
            <div class="hero-content">
              <span>Beauty Salon</span>
              <h1 class="hero-title">The Home Of Care</h1>
              <a href="contact.html" class="def-btn">Contact Us<span class="flaticon-right-arrow"></span></a>
            </div>
            <!-- hero content end -->
          </div>
        </div> 
        <!-- hero schedule box -->
        <div class="hero-schedule-box bg-primary">
          <div class="icon">
            <img src="assets/img/icons/flower-icon.png" alt="Flower">
          </div>
          <p class="sechedule-title">Opening Hours</p>
          <ul>
            <li>Mon-Sat: <a href="contact.html">10 AM – 1 PM | 4 PM - 8 PM</a></li>
            <!-- <li>Saturday: <a href="contact.html">9 AM – 4 PM</a></li> -->
            <li>Sunday: <a href="contact.html">10 AM - 1 PM</a></li>
          </ul>
        </div>
        <!-- hero schedule box End -->
      </div>
    </div>
    <!-- Single Hero Slide end -->
    <!-- Single Hero Slide -->
    <div class="single-hero-slide">
      <div class="container-fluid">
        <!-- Slider Big Image -->
        <div class="slider-big-img" >
          <span class="bg-shape"></span>
          <img src="assets/img/hero/XCL01.webp" class="img-fluid" alt="Hero Image">
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-5 col-xl-3 offset-md-6 offset-lg-6 offset-xl-1">
            <!-- hero content -->
            <div class="hero-content">
              <span>Beauty Salon</span>
              <h2 class="hero-title">The House Of Beauty</h2>
              <a href="contact.html" class="def-btn">Contact Us <span class="flaticon-right-arrow"></span></a>
            </div>
            <!-- hero content end -->
          </div>
        </div> 
        <!-- hero schedule box -->
        <div class="hero-schedule-box bg-primary">
          <div class="icon">
            <img src="assets/img/icons/flower-icon.png" alt="Flower">
          </div>
          <p class="sechedule-title">Opening Hours</p>
          <ul>
            <li>Mon-Sat: <a href="contact.html">10 AM – 1 PM | 4 PM - 8 PM</a></li>
            <!-- <li>Saturday: <a href="contact.html">9 AM – 4 PM</a></li> -->
            <li>Sunday: <a href="contact.html">10 AM - 1 PM</a></li>
          </ul>
        </div>
        <!-- hero schedule box End -->
      </div>
    </div>
    <!-- Single Hero Slide end -->
    <!-- Single Hero Slide -->
    <div class="single-hero-slide">
      <div class="container-fluid">
        <!-- Slider Big Image -->
        <div class="slider-big-img"  >
          <span class="bg-shape"></span>
          <img src="assets/img/hero/XCL027.webp" class="img-fluid" alt="Hero Image">
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-5 col-xl-3 offset-md-6 offset-xl-1">
            <!-- hero content -->
            <div class="hero-content">
              <span style="color: black">Beauty Salon</span>
              <h1 class="hero-title" style="color: black">The Essence of beauty</h1>
              <a href="contact.html" class="def-btn">Contact Us <span class="flaticon-right-arrow"></span></a>
            </div>
            <!-- hero content end -->
          </div>
        </div> 
        <!-- hero schedule box -->
        <div class="hero-schedule-box bg-primary">
          <div class="icon">
            <img src="assets/img/icons/flower-icon.png" alt="Flower">
          </div>
          <p class="sechedule-title">Opening Hours</p>
          <ul>
            <li>Mon-Sat: <a href="contact.html">10 AM – 1 PM | 4 PM - 8 PM</a></li>
            <!-- <li>Saturday: <a href="contact.html">9 AM – 4 PM</a></li> -->
            <li>Sunday: <a href="contact.html">10 AM - 1 PM</a></li>
          </ul>
        </div>
        <!-- hero schedule box End -->
      </div>
    </div>
    <!-- Single Hero Slide end -->
  </div>
  <!-- Hero Area end -->







  <!-- About Us Section -->
  <section class="about-us-wrapper">
    <!-- Leaf Shape -->
    <div class="leaf-shape">
      <img src="assets/img/icons/leaf-1.png" alt="Leaf Shape">
    </div>
    <div class="container">
      <div class="row">
        <!-- About us image -->

        <div class="col-lg-6 col-xl-5 wow fadeInUp" data-wow-delay="0.3s">
        <br>
          <div class="about-us-img">
            <!-- Big Image -->
            <div class="about-us-big-img">
              <img src="assets/img/service/9image.webp" alt="About Us Big Image" class="js-tilt">
            </div>
            <!-- About Us Small Image -->

            <!-- <div class="small-img-1">
              <img src="assets/img/service/62a4f421-9039-4df2-b76f-aac74febff79.jpg" alt="About US Small Image" class="js-tilt">
            </div> -->
            <!-- About Us Small Image -->
            <!-- <div class="small-img-2">
              <a href="about.html"><img src="assets/img/about-us/small-img-2.jpg" alt="About Us Small Image" class="js-tilt"></a>
            </div> -->
          </div>
        </div>
        <!-- About us image end -->
        <!-- About Us Content Area -->
        <div class="col-lg-6 offset-xl-1 wow fadeInUp" data-wow-delay="0.3s">
          <div class="about-us-content fadeInUp">
            <!-- Section Title -->
            <div class="section-title">
              <span>We Have <span>11 Years</span> Of Experience</span>
              <h2 class="title">About Us </h2>
              <h3 class="small-title">Feelings Beauty Care has a wide range of products and services to cater to the varied requirements of their customers.</h3>
            </div>
            <!-- About Us quote -->
            <div class="about-us-quote">
              <p>It is known to provide top service in the following categories: Beauty Parlours For Bridal, Beauty Parlours, Women Beauty Parlours, Beauty Parlours For Hair Straightening, Tattoo Parlours, Beauty Parlour Classes, Beauty Parlours At Home, Beauty Parlours For Hair Massage.</p>
            </div>
            <!-- <p>Our Siam Thai Spa centre is run independently by a leading Thai wellness company ensuring uncompromising quality.</p> -->
            <a href="services.html" class="def-btn btn-md">Our Services <span class="flaticon-right-arrow"></span></a>
            <a href="tel:800661578" class="def-btn btn-md outline"><i class="flaticon-phone"></i>Make a call </a>
          </div>
        </div>
        <!-- About Us Content Area end -->
      </div>
    </div>
  </section>
  <!-- About Us Section end -->





  <!-- Our Service Section -->
  <section class="our-service-wrapper bg-light section">
    <div class="container">
      <div class="row justify-content-center text-center">
        <!-- Section Title  -->
        <div class="col-md-10 col-lg-8 col-xl-6 wow jackInTheBox" data-wow-delay="0.3s">
          <div class="section-title2">
            <h2 class="title">Relax Zone <span>Our Services</span></h2>
            <p class="text">Feelings Beauty Care is wide range of services offers you the latest trends and techniques in creative styling, coloring, extensions, perming, straightening and rebounding.</p>
          </div>
        </div>
      </div>
      <div class="row service-slider-active wow fadeInUp" data-wow-delay="0.3s">
        <!-- Single Service -->
        <div class="col-xl-3 ">
          <div class="single-service">
            
            <div class="service-icon ">
              <span class="bg-icon flaticon-stones-2"></span>
              <span><i class="flaticon-spa"></i></span>
            </div>
            <div class="service-content">
              <h3 class="service-title"><a href="single-service.html">Beauty Academy</a></h3>
              
            </div>
          </div>
        </div>
        <!-- Single Service end -->
        <!-- Single Service -->
        <div class="col-xl-3">
          <div class="single-service">
             <!-- Icon -->
             <div class="service-icon ">
               <span class="bg-icon flaticon-essential"></span>
               <span><i class="flaticon-wax"></i></span>
             </div>
             <div class="service-content">
               <h3 class="service-title"><a href="single-service.html">Hair Style</a></h3>
               
             </div>
           </div>
        </div>
        <!-- Single Service end -->
        <!-- Single Service -->
        <div class="col-xl-3">
          <div class="single-service">
            <!-- Icon -->
            <div class="service-icon ">
              <span class="bg-icon flaticon-teapot"></span>
              <span><i class="flaticon-facial-treatment"></i></span>
            </div>
            <div class="service-content">
              <h3 class="service-title"><a href="single-service.html">Skin Care</a></h3>
              
            </div>
          </div>
        </div>
        <!-- Single Service end -->
        <!-- Single Service -->
        <div class="col-xl-3">
          <div class="single-service">
            <!-- Icon -->
            <div class="service-icon ">
              <span class="bg-icon flaticon-lotus-1"></span>
              <span><i class="flaticon-cosmetics"></i></span>
            </div>
            <div class="service-content">
              <h3 class="service-title"><a href="single-service.html">Makeup</a></h3>
              
            </div>
          </div>
        </div>
        <!-- Single Service end -->
        <!-- Single Service -->
        <div class="col-xl-3">
          <div class="single-service">
            <!-- Icon -->
            <div class="service-icon ">
              <span class="bg-icon flaticon-cosmetics-1"></span>
              <span><i class="flaticon-mascara"></i></span>
            </div>
            <div class="service-content">
              <h3 class="service-title"><a href="single-service.html">Hair Care</a></h3>
              
            </div>
          </div>
        </div>
        <!-- Single Service end -->
      </div>
    </div>
  </section>
  <!-- Our Service Section end -->



  <!-- CTA Area Wrapper -->
  <section class="cta-wrapper pt-120 pb-90">
    <div class="container">
      <div class="row">
        <!-- Appointment Form -->

        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
         
          <form action="#"  class="appointment-form bg-light">
            <!-- Form Title -->
            <div class="form-title d-flex">
              <div class="title-icon ">
                <span class="flaticon-calendar"></span>
              </div>
              <div class="content">
                <span>Get relax any day & any Time</span>
                <h2 class="title">Our Staff Will Contact You</h2>
              </div>
            </div>
            <div class="form-row">
              <!-- Single Input -->
              
              <div class="form-group col-md-6">
                <label class="sr-only" for="firstName">First Name</label>
             
                <input id="FirstName" value="" class="form-control" type="text" name="firstName" placeholder="First name">
                <h6  id="errFirstName"  style="color: red; padding-top: 10px;"></h6>
            
               
              </div>
              <!-- Single Input -->
              <div class="form-group col-md-6">
                <label class="sr-only" for="lastName">Last Name</label>
                <input id="LastName" class="form-control" type="text" name="LastName" placeholder="Last name">
                <h6  id="errLastName"  style="color: red; padding-top: 10px;"></h6>
              </div>
              <!-- Single Input -->
              <div class="form-group col-md-6">
                <label class="sr-only" for="email">Email Address</label>
                <input id="email" class="form-control" type="email" name="email" placeholder="Email address">
                <h6  id="errEmail"  style="color: red; padding-top: 10px;"></h6>
              </div>
              <!-- Single Input -->
              <div class="form-group col-md-6">
                <label class="sr-only" for="number">Phone Number</label>
                <input id="number" class="form-control" type="text" name="number" placeholder="Phone number">
                <h6  id="errMobile"  style="color: red; padding-top: 10px;"></h6>
              </div>             
              <!-- Single Input -->
              <div class="form-group col-12 select-box-wrap">
                <label class="sr-only" for="subject">Select Subject</label>
                <select id="subject" class="form-control" name="subject">
                  <option>Select Subject</option>
                  <option>Spa and Beauty</option>
                  <option>Skin Facial</option>
                  <option>Hair Cutting</option>
                  <option>Manicure & Pedicure</option>
                  <option>Facial & Therophy</option>
                  <option>Other</option>
                </select>
              </div>
              <!-- Single Input -->
              <div class="form-group col-12">
                <label class="sr-only" for="dateAndTime">Select Date & Time</label>
                <input id="dateAndTime" class="form-control" type="text" name="dateAndTime"
                  placeholder="Select Date & Time">
                <span class="flaticon-calendar"></span>
              </div>
              <!-- Single Input -->
              <div class="form-group col-12 mb-0 text-center">
                <button class="def-btn" type="reset" onclick =" myFun()">Get In Touch<span
                    class="flaticon-right-arrow"></span></button>
              </div>
            </div>
          </form>
        </div>
        <!-- Appointment Form end -->
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <!-- CTA box -->
          <div class="iframe-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Vg8p0wY6398" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div></br>
          <!-- <div class="cta-box box-1 js-tilt background-image " data-src="assets/img/bg-img/cta-bg-img-1.jpg">
            <div class="cta-content">
              <span>Foundation</span>
              <h3 class="title"><a href="contact.html">Natural Tone</a></h3>
              <a href="contact.html" class="def-btn btn-sm">Shop Now</a>
            </div>
          </div> -->
          <!-- CTA box end -->
          <!-- CTA box -->
          <div class="iframe-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/CTTTTN3DV-Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <!-- <div class="cta-box box-2 js-tilt background-image " data-src="assets/img/bg-img/cta-bg-img-2.jpg">
            <div class="cta-content">
              <span>Cosmetics</span>
              <h3 class="title"><a href="contact.html">Floral & Beauty Cream.</a></h3>
              <a href="contact.html" class="def-btn btn-sm btn-white">Shop Now</a>
            </div>
          </div> -->
          <!-- CTA box end -->
        </div>
      </div>
    </div>
    <!-- Flower shapes -->
    <!-- <div class="flower-shape shape-1">
      <img src="assets/img/icons/flowers-shape.png" alt="Flowers">
    </div> -->
    <!-- Flower shapes -->
    <div class="flower-shape shape-2">
      <img src="assets/img/icons/flowers-shape.png" alt="Flowers">
    </div>
  </section>
  <!-- CTA Area Wrapper end -->

  
  <!-- Section Separator -->
  <div class="container">
    <div class="sec-separator wow jackInTheBox" data-wow-delay="0.3s">
      <span class="flaticon-lotus-flower"></span>
    </div>
  </div>
  <!-- About Funfact -->
  <section class="about-funfact-wrapper section">
    <div class="container">
      <div class="row align-items-center flex-row-reverse">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <!-- Funfact Image -->
          <div class="funfact-img js-tilt">
            <img src="assets/img/bg-img/profile.jpg" alt="Fun Fact">
          </div>
          <!-- Funfact Image end -->
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <!-- Funfact content -->
          <div class="funfact-content">
            <!-- Section Title --> <!--"Love of beauty is taste. The creation of beauty is art."-->
            <div class="section-title"> 
              <span>The ‘Soul’ of <span>Feelings Beauty Care</span></span>
              <h2 class="title">Urmila Mengar</h2>
              <h3 class="small-title">She had already learnt Facial & Make-up at the age of 20. She is now 30 & she has achieved expertise in Hair Style, Saree-Style & Bridal Make-up.Love of beauty is taste. The creation of beauty is art. </h3>
            </div>
            <!-- Quote -->
            <div class="inner-quote d-md-flex align-items-center">
              <!-- Quote Image -->
              <div class="quote-img js-tilt">
                <img src="assets/img/team-member/team.jpg" alt="Fan Fact Thumb Image">
              </div>
              <div class="quote-content">
                <p>Feelings Beauty Care staff is a team of dedicated professionals & you will find all our stylists to be very professional, courteous and
                warmly smiling to serve and pamper you</p>
              </div>
            </div>
            <!-- Counter Box -->
            <div class="counter-box-wrapper d-md-flex">
              <!-- single counter box -->
              <div class="single-counter">
                <i class="flaticon-group"></i>
                <span class="counter">2000</span>
                <p>Bridal</p>
              </div>
              <!-- single counter box -->
              <div class="single-counter">
                <i class="flaticon-worldwide"></i>
                <span class="counter">6000</span>
                <p>Customers</p>
              </div>
            </div>
          </div>
          <!-- Funfact content end -->
        </div>
      </div>
    </div>
    <!-- Bg Shape -->
   <!--  <div class="leaf-shape">
      <img src="assets/img/icons/leaf-1.png" alt="Leaf">
    </div> -->

  </section>
  <!-- About Funfact end -->



<div class="container">
    <div class="sec-separator wow jackInTheBox" data-wow-delay="0.3s">
      <span class="flaticon-lotus-flower"></span>
    </div>
  </div>
</br>


 




  <!-- //Price Plans -->
  <section class="price-plans-wrapper pt-120 background-image"
    data-src="assets/img/bg-img/price-plans-bg.webp">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-7 offset-lg-5 offset-xl-6">
          <!-- Section Title -->
          <div class="section-title wow zoomIn" data-wow-delay="0.3s">
            <h3 style="color: #fff; font-family: Raleway,sans-serif;" >We offer high quality beauty courses focused on theory as well as practical learning.</h3>
            <h2 class="title" style="color: #fff; font-family: Raleway,sans-serif;" >Career Courses</h2>
          </div>
          <!-- Price Plans Content -->
          <div class="price-plans-content wow fadeInUp" data-wow-delay="0.4s">
            <!-- Single Price Plan -->
            <div class="single-price-plan d-sm-flex align-items-center">
              <div class="img js-tilt">
                <a href="#"><img src="assets/img/hero/poster6.jpg" alt="Price Plan"></a>
              </div>
              <div class="content" >
                <h4>Basic Beauty Care</h4>
                <p>Certified Course</p>
              </div>
            </div>
            <!-- Single Price Plan -->
            <div class="single-price-plan d-sm-flex align-items-center">
              <div class="img js-tilt">
                <a href="#"><img src="assets/img/hero/post1.jpg" alt="Price Plan"></a>
              </div>
              <div class="content">
                <h4>Makeup</h4>
                <p>Certified Course</p>
              </div>
            </div>
            <!-- Single Price Plan -->
            <div class="single-price-plan d-sm-flex align-items-center">
              <div class="img js-tilt">
                <a href="#"><img src="assets/img/hero/DSC_5638.JPG" alt="Price Plan"></a>
              </div>
              <div class="content">
                <h4>Beauty Care & Makeup</h4>
                <p>Diploma Course </p>
              </div>
            </div>
            <!-- Single Price Plan -->
            <div class="single-price-plan d-sm-flex align-items-center">
              <div class="img js-tilt">
                <a href="#"><img src="assets/img/hero/post2.jpg" alt="Price Plan"></a>
              </div>
              <div class="content">
                <h3 class="title">Makeup & Hair Style</h3>
                <p>Certified Course</p>
              </div>
            </div>
          </div>
          <!-- Price Plans Content end -->
        </div>
      </div>
    </div>
  </section>
  <!-- Price Plans end -->




  <!-- Testomonial Area -->
  <section class="testomonial-sec-wrapper">
    <!-- <div class="container"> -->
      <!-- Quote icon -->
      <!-- <div class="quote-shape text-center">
        <span class="flaticon-quote"></span>
      </div>    
      <div class="row text-center justify-content-center wow zoomIn" data-wow-delay="0.3s">
        <div class="col-xl-10"> -->
          <!-- Testomonial Slider -->
          <!-- <div class="testomonial-slider-wrapper testomonial-slider-active"> -->
            <!-- Single Testomonial -->
            <!-- <div class="single-testomonial">
              <h2 class="title">The evening has been fantastic great food & good entertainment nothing short.</h2>
              <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            </div> -->
            <!-- Single Testomonial end -->
            <!-- Single Testomonial -->
            <!-- <div class="single-testomonial">
              <h2 class="title">The night was so exicted with full of satisfication with a good service and food.</h2>
              <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            </div> -->
            <!-- Single Testomonial end -->
            <!-- Single Testomonial -->
            <!-- <div class="single-testomonial">
              <h2 class="title">Highly recommended to take there service. High quality service with a good care.</h2>
              <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            </div> -->
            <!-- Single Testomonial end -->
            <!-- Single Testomonial -->
            <!-- <div class="single-testomonial">
              <h2 class="title">A great start of the day with a Wonderful massage. Full day enjoyed a great freshness.</h2>
              <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            </div>
 -->            <!-- Single Testomonial end -->
          <!-- </div> -->
          <!-- Testomonial Slider end -->
          <!-- bottom Shape -->
          <!-- <div class="bottom-shape"></div>
        </div>      
        <div class="col-md-5 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s"> -->
          <!-- Testomonial Slider Nav -->
          <!-- <div class="testomonial-slider-nav  testomonial-slider-nav-active"> -->                 
            <!-- Single Testomonial Nav -->
            <!-- <div class="single-testomonial-nav">
              <div class="testomonial-author">
                <img src="assets/img/testomonial/testomonial-author-1.png" alt="Testomonial Author">
              </div>
              <div class="testomonial-author-name">
                <h3 class="name"><a href="single-team.html">Rosalina D. William</a></h3>
                <span>Founder</span>
              </div>
            </div> -->
            <!-- Single Testomonial Nav end -->
            <!-- Single Testomonial Nav -->
            <!-- <div class="single-testomonial-nav">
              <div class="testomonial-author">
                <img src="assets/img/testomonial/testomonial-author-2.png" alt="Testomonial Author">
              </div>
              <div class="testomonial-author-name">
                <h3 class="name"><a href="single-team.html">Jen L. Marto</a></h3>
                <span>advisor</span>
              </div>
            </div> -->
            <!-- Single Testomonial Nav end -->
            <!-- Single Testomonial Nav -->
            <!-- <div class="single-testomonial-nav">
              <div class="testomonial-author">
                <img src="assets/img/testomonial/testomonial-author-3.png" alt="Testomonial Author">
              </div>
              <div class="testomonial-author-name">
                <h3 class="name"><a href="single-team.html">Lomote F. Kerla</a></h3>
                <span>CO - Founder</span>
              </div>
            </div> -->
            <!-- Single Testomonial Nav end -->
            <!-- Single Testomonial Nav -->
            <!-- <div class="single-testomonial-nav">
              <div class="testomonial-author">
                <img src="assets/img/testomonial/testomonial-author-4.png" alt="Testomonial Author">
              </div>
              <div class="testomonial-author-name">
                <h3 class="name"><a href="single-team.html">Minas Morola D.</a></h3>
                <span>CEO</span>
              </div>
            </div> -->
            <!-- Single Testomonial Nav end -->          
          <!-- </div> -->
          <!-- Testomonial Slider Nav end -->
        <!-- </div>
      </div>   -->  
    <!-- </div> -->
  </section>
  <!-- Testomonial Area end -->

<!-- Customer Review PHP -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formtest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$id = 1;
$result = mysqli_query($conn, "SELECT * FROM `customer-feedback`");
if($result){
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
<!-- Customer Review PHP End-->

  <!-- Customer Review Section -->
  <section class="blog-wrapper bg-light pt-120 pb-90">
    <div class="container">
      <div class="row justify-content-center text-center ">
        <!-- Section Title  -->
        <div class="col-md-10 col-lg-8 col-xl-6 jackInTheBox wow" data-wow-delay="0.3s">
          <div class="section-title2">
            <h2 class="title">Customer <span>Review</span></h2>
            <p class="text">We are dedicated to consistently providing high customer satisfaction by rendering excellent service, quality products, and furnishing an enjoyable atmosphere at an acceptable price/value relationship.<br></p>
          </div>
        </div>
      </div>
      <div class="row latest-blog-slider wow fadeInUp" data-wow-delay="0.3s" id="id02">
        <!-- Single Blog -->
        <div class="col-xl-4" w3-repeat="feedback">
          <div class="single-latest-blog ">
            <!-- Blog Image -->
            <div class="img-box">
              <img src="assets/img/blog-img/blog-img-1.jpg" alt="Blog Image">
            </div>
            <!-- Blog Content -->
            <div class="latest-blog-content">
              <div class="blog-meta">
                <p>
                  <span><i class="flaticon-calendar"></i> {{ date }} </span>
                  <!-- <span><i class="flaticon-user"></i>By Admin</span> -->
                </p>
              </div>
              <h3 class="blog-title"> {{ heading }} </h3>
              <p>{{ description }}<br><br><br></p>
            </div>
          </div>
        </div>
        <!-- Single Blog end -->
      </div>
    </div>
  </section>
  <!-- Customer Review Section end -->
<!-- Customer Review PHP -->
<?php
   }
  }
  else {
    echo "0 results";
  }
}
else{
  echo "Result empty";
}
mysqli_close($conn);
?>
<!-- Customer Review PHP End-->

  <!-- CTA Area -->
  <!-- <section class="cta-wrapper  pt-100 pb-100 background-image" data-src="assets/img/bg-img/cta-bg-img.jpg">
    <div class="container">
      <div class="row text-center ">

        <div class="col-xl-4 jackInTheBox wow" data-wow-delay="0.3s">
          <div class="section-title3">
            <img id="myImg" src="assets/img/service/c.webp" alt="Snow">
            <div id="myModal" class="modal" style="z-index: 10000">
				<span class="close">&times;</span>
				<img class="modal-content" id="img01">
				<div id="caption"></div>
			</div>					
          </div>
          
        </div>

        <div class="col-xl-4 jackInTheBox wow" data-wow-delay="0.3s">
          <div class="section-title3">
            <img src="assets/img/logo-thumb.png">
          </div>
        </div>
        
         <div class="col-xl-4 jackInTheBox wow" data-wow-delay="0.3s">
          <div class="section-title3">
            <img id="myImg" src="assets/img/service/d.webp" alt="Snow">
            <div id="myModal" class="modal" style="z-index: 10000">
				<span class="close">&times;</span>
				<img class="modal-content" id="img01">
				<div id="caption"></div>
			</div>	
          </div>
        </div>
        
      </div>
    </div>
  </section>
</br> -->
  <!-- CTA Area end -->


  


 <!-- Footer -->
 <footer class="v2">
   <!-- Footer Wid Area -->
   <div class="footer-wid-area">
     <div class="container">
       <div class="row justify-content-between">
         <!-- Single Footer Wid -->
         <div class="col-md-6 col-lg-4 zoomIn wow" data-wow-delay="0.3s">
           <div class="widget footer-about">
             <div class="footer-logo">
               <a href="index.html"><img src="assets/img/logo-2.png" alt="Logo"></a>
             </div>
             <br><br>
             <p>The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base.</p>
             
           </div>
         </div>
         <!-- Single Footer Wid end -->
         <!-- Single Footer Wid -->
         <div class="col-md-6 col-lg-4 zoomIn wow" data-wow-delay="0.4s">
           <!-- Single Footer Wid -->
           <div class="widget footer-post-wrap">
             <h3>News Feeds</h3>
             <!-- Single Footer Post -->
             <div class="single-footer-post d-flex">
               <div class="img-box js-tilt">
                 <a href="news-details.html"><img src="assets/img/thumb-img/footer-post-1.jpg" alt="Footer Image"></a>
               </div>
               <div class="post-content">
                 <span><i class="flaticon-calendar"></i> 12th June 2020</span>
                 <h4 class="title">Managing Partner along with Senior Counsels.</h4>
               </div>
             </div>
             <!-- Single Footer Post -->
             <div class="single-footer-post d-flex">
               <div class="img-box js-tilt">
                 <a href="news-details.html"><img src="assets/img/thumb-img/footer-post-2.jpg" alt="Footer Image"></a>
               </div>
               <div class="post-content">
                 <span><i class="flaticon-calendar"></i> 12th June 2020</span>
                 <h4 class="title">We giving special service for vip members.</h4>
               </div>
             </div>
             <!-- Single Footer Post -->
             <div class="single-footer-post d-flex">
               <div class="img-box js-tilt">
                 <img src="assets/img/thumb-img/footer-post-3.jpg" alt="Snow">
               </div>
               <div class="post-content">
                 <span><i class="flaticon-calendar"></i> 12th June 2020</span>
                 <h4 class="title">We are managing wedding special programme.</h4>
               </div>
             </div>
           </div>
           <!-- Single Footer Wid end -->
         </div>
         <!-- Single Footer Wid end -->
         <!-- single Widget -->
         <div class="col-lg-3 zoomIn wow" data-wow-delay="0.5s">
           <div class="widget">
             <h3>Reach US</h3>
             <!-- footer Links -->
             <div class="footer-links-area d-flex footer-widget-tweet">
               <!-- Single Links -->
               <ul class="footer-links w-50">
                 <!-- <li><a href="services.html">Services</a></li>
                 <li><a href="about.html">About Us</a></li>
                 <li><a href="portfolio.html">Portfolio</a></li>
                 <li><a href="home.html">Home</a></li> -->
                 <!-- <li><a href="tel:+91 8000661578"><span class="flaticon-phone">&nbsp;&nbsp;+91&nbsp;8000&nbsp;661&nbsp;578</a></span></li> -->
                 <!-- <li><a href="mailto:Info.feelingsbeautycare@gmail.com"><span class="flaticon-mail">&nbsp;&nbsp;Info.feelingsbeautycare@gmail.com</a></span></li> -->
                 <div><a href="mailto:Info.feelingsbeautycare@gmail.com" class="btn-theme icon-left bg-danger icon-left"><i class="flaticon-mail" style="color: #fff"></i>&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
                 <div><a href="https://www.facebook.com/feelingsbeautycare" class="btn-theme icon-left"><i class="flaticon-facebook"></i>Facebook</a></div>
                 <div><a href="tel:8000661578" class="btn-theme icon-left bg-success"><i class="flaticon-whatsapp"></i>Whatsapp</a> </div>
                 <div ><a href="https://www.instagram.com/mengarurmi/" id="grad1" class="btn-theme icon-left bg-alert" style="background-color: #E1306C"><i class="flaticon-instagram"></i>Instagram</a></div>    
               </ul>
             </div>
           </div>
         </div>
         <!-- single Widget end -->
       </div>
     </div>
   </div>
   <!-- Footer Wid Area end -->



   <!-- Footer Copyright -->
   <div class="footer-copyright">
     <div class="container">
       <div class="row align-items-center">
         <div class="col-md-5">
            <p>Copyright By@ Feelings Beauty Care - 2020</p>
          </div>
          <div class="col-md-7 text-right">
            <ul class="footer-social-menu">
              <li><a href="https://www.facebook.com/feelingsbeautycare" target="_blanck" class="circle-btn1">
                <i class="flaticon-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/mengarurmi/" target="_blanck" class="circle-btn1"><i class="flaticon-instagram"></i></a></li>
              <li><a href="tel:+91 8000661578" class="circle-btn1"><i class="flaticon-phone"></i></a></li>
              <!-- <li><a href="behance.html" class="circle-btn"><span class="flaticon-behance"></span></a></li>
              <li><a href="dribble.html" class="circle-btn"><span class="flaticon-dribble"></span></a></li>
              <li><a href="linkedin.html" class="circle-btn"><span class="flaticon-linkedin"></span></a></li> -->
            </ul>
          </div>
       </div>
     </div>
   </div>
   <!-- Footer Copyright end -->


   <!-- BG Shape -->
   <div class="bg-shape">
     <img src="assets/img/icons/flowers-shape.png" alt="Flowers">
   </div>



 </footer>
 <!-- Footer end -->



  <!-- Scroll To Top -->
  <button class="scrollToTop circle-btn primary-btn "><i class="flaticon-up-arrow-1"></i></button>


  


  <table id="id01">
  <tr>
    <th>Customer</th>
    <th>City</th>
    <th>Country</th>
  </tr>
  <tr w3-repeat="customers">
    <td>{{CustomerName}}</td>
    <td>{{City}}</td>
    <td>{{Country}}</td>
  </tr>
</table>

<script>
w3.displayObject("id01", myObject);
w3.displayObject("id02", mygyoObject);
</script>
  


  <!-- Code end -->

  <!-- All Js Files -->
  <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/tilt.jquery.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/jquery.fancybox.min.js"></script>
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <script src="assets/js/parallax.min.js"></script>
  <script src="assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/jquery.datetimepicker.min.js"></script>
  <script src="my.js" ></script>
  <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
  <!-- Google Map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
  <!-- Main Js File -->
  <script src="assets/js/main.js"></script>
  


  
</body>

<!-- Mirrored from vecurosoft.com/products/html/mixlax/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jun 2020 14:15:07 GMT -->
</html>