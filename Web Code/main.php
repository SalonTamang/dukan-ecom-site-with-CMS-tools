<?php
//Ouputs the head, logo, name of the page and the opening body tag
function getHead($title){
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> ' . $title . ' </title>
         <!-- add bootstrap style functions -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="main.css">
    </head>';
    echo '<header>
    <!-- box containing the website name and navagation bar -->
    <div class="container-lg pt-5">
          <div class="row">
            <!-- column for web name -->
            <div class="col-lg-4">
              <h1 class="web-name">Dokan</h1>
            </div>
            <!-- column for nav bar -->
            <div class="col-lg-8">';
}
/* Ouputs the navagation bar and applies the class "running"
to the page which is equal to $pageName*/
function getNavBar($pageName){
    echo '<nav class="nav-bar">';
    echo '<ul>';

    $linkNames = array("Home", "Shop", "Log In", "Register", "Cart", "Account");
    $linkAddresses = array("home.php", "shop.php", "login.php", "register.php", "cart.php","account.php");
    
    for($x = 0; $x < count($linkNames); $x++){
        echo '<li>';
        echo '<a ';
        if($linkNames[$x] == $pageName){
            echo 'class="running" ';
        }
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a>';
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
    echo '</div>
    </div>
    </div>
    </header>';
}
/*Outputs the footer of the page, the closing body tag and 
the closing html tag*/
function getFooter(){
    echo '<footer>
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-6">
          <p class="text3">About us</p>
          <p>
            Dokan was brought into the world through a progression of spring-up stores in 2014. We needed to offer 
            enhanced shopping background and inventive motivation and associate with those with a similar vision. 
            Today our objective continues as before.
            In 2015, we opened the ways to our leader store in Chicago, US. In this space, we work crosswise over various mediums,
            from fashion and photography to accommodation. There’s nothing we won’t do. Joint efforts are constantly invited and sustained.
          </p>
        </div>
        <!-- column with contact details of the company -->
        <div class="col-lg-3">
          <p class="text3">Contact us</p>
          <p>
            <b>Address: </b> 20, Royal Street<br> N10 8PX
            <br><b>Email: </b> dkan@diller.co.uk
            <br><b>Phone number: </b> 07509672994
          </p>
        </div>
        <!-- list of links to the company social networks -->
        <div class="col-lg-3">
          <p class="text3">Follow us</p>
          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-black">Facebook</a>
            </li>
            <li>
              <a href="#!" class="text-black">Instagram</a>
            </li>
            <li>
              <a href="#!" class="text-black">Twitter</a>
            </li>
            <li>
              <a href="#!" class="text-black">Linkedin</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  </html>';
}