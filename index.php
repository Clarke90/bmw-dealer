<?php ob_start();
// auth check 
$page_title = 'COMP1006 Dealership Portal';
require('header.php');
?>

<header>
    <div class="row">
            <img class="header_img" src="assets/img/munich.jpg" width="100%" height="560px"> 
     <div id="header-calltoaction">   
         <h1>Luxury Reinvented<span>...</span></h1>
         <h2>Experience the Executive Lounge</h2>
         <button type="button" class="btn btn-flat">Request a Test Drive</button>
         <button type="button" class="btn btn-flat">View Offer</button>
      </div> 
    </div>
</header>

<div class="container">
    <aside id="first"class="text-center">
        <div class="box">
            <h4>All Models</h4>
        </div>
        <div class="box">
            <h4>BMW 2 Series</h4>
        </div>
        <div class="box">
            <h4>BMW 3 Series</h4>
        </div>
    <div class="box">
            <h4>BMW 4 Series</h4>
        </div>
    <div class="box">
            <h4>BMW 5 Series</h4>
        </div>
        <div class="box">
            <h4>BMW 6 Series</h4>
        </div>
    </aside>
    <aside class="text-center">
        <div class="box">
            <h4>BMW 7 Series</h4>
        </div>
        <div class="box">
            <h4>BMW X</h4>
        </div>
        <div class="box">
            <h4>BMW Z4</h4>
        </div>
    <div class="box">
            <h4>BMW M</h4>
        </div>
    <div class="box">
            <h4>BMW i</h4>
        </div>
        <div class="box">
            <h4>Brochures</h4>
        </div>
    </aside>

<aside class="text-center">
     <div class="feature"><img class="header_img" src="assets/img/bmw-front.jpg" width="100%" height="400px">
     <h1>Special Offers.</h1>
     <p>Discover exceptionial offers on our exciting range of BMW's.</p>
     <i class="fa fa-arrow-right"></i><a href="#">View Offers</a>
     </div>
     <div class="feature"><img class="header_img" src="assets/img/suv.jpg" width="100%" height="400px">
     <h1>Pre Owned Search.</h1>
     <p>Ultamate safety, Performance and Value</p>
      <i class="fa fa-arrow-right"></i><a href="#">Search Now</a>
     </div>
</aside>

<aside class="text-center">
     <div class="special-feature"><img class="header_img" src="assets/img/testdrive.jpg" width="100%" height="200px">
         <h1>Test Drive.</h1>
         <p>Take one of our BMW's for a test drive today.</p><br>
          <i class="fa fa-arrow-right"></i><a href="#">Learn More</a>
     </div>
     <div class="special-feature"><img class="header_img" src="assets/img/smlblack.jpg" width="100%" height="200px">
        <h1>BMW Shop.</h1>
         <p>We invite you to discover the new BMW Lifestyle Shop with its fascinating selection.</p>
          <i class="fa fa-arrow-right"></i><a href="#">Discover</a>
     </div>
     <div class="special-feature"><img class="header_img" src="assets/img/mybmw.jpg" width="100%" height="200px">
        <h1>My BMW.</h1>
         <p>Register new and discover why all roads lead to My BMW.</p><br>
          <i class="fa fa-arrow-right"></i><a href="#">Log in / Register Now</a>
     </div>
     <div class="special-feature"><img class="header_img" src="assets/img/build.jpg" width="100%" height="200px">
        <h1>Build & Price</h1>
         <p>The BMW of your dreams.</p><br><br>
          <i class="fa fa-arrow-right"></i><a href="#">Continue</a>
     </div>
</aside>

<aside id="special">
    <h1>SPECIAL OFFERS</h1>
    <img class="header_img" src="assets/img/suv.jpg" width="48%" height="300px">
    
    <div id="special-text">
         <h1>Discover current Special Offers on the 2016 <br> BMW 320i xDrive Sedan.</h1>
         <button type="button" class="btn btn-primary">Request a Test Drive</button>
         <button type="button" class="btn btn-primary">View Offer</button>
    </div>
</aside>
</div>
<?php require_once('footer.php'); ?>

