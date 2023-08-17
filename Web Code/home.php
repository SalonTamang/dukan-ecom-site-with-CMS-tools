<?php
/*Include the PHP file that contains the repeated code
in every page*/
    include('main.php'); 
	  //Call the functions to display the header and the navagation bar
    getHead("Home");
    getNavBar("Home");
?>

<body>
  <!-- add bootstrap js functions -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div class="container-lg pt-5">
      <div class="row">
        <div class="col-lg-4">
          <p class="text1">Start making your perfect new style</p>
          <!-- button with link to the shop page -->
          <a href="shop.html"><button class="shop-button">Shop Now</button></a>
        </div>
           <!-- column for the main image of the website -->
        <div class="col-lg-8">
          <img class="main-image" src="Images/Image1.jpg" alt="main image">
        </div>       
      </div>
    </div>
    <div class="container-lg pt-5">
      <div class="row">
        <div class="col-lg-4">
          <p class="text2">Men</p>
          <img class="sec-image" src="Images/Image2.jpg" alt="man image">
        </div>
        <div class="col-lg-4">
          <p class="text2">Women</p>
          <img class="sec-image" src="Images/Image3.png" alt="man image">
        </div>
        <div class="col-lg-4">
          <p class="text2">Accesories</p>
          <img class="sec-image" src="Images/Image4.png" alt="man image">
        </div>
      </div>
    </div>
    <hr>
</body>

<?php
//Call the function to display the footer
    getFooter();