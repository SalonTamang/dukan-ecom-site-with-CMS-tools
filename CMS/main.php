<?php
//Ouputs the head, logo, name of the page and the opening body tag
function getHead($title){
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="cms.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <header>
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">';
}
/* Ouputs the navagation bar and applies the class "running"
to the page which is equal to $pageName*/
function getNavBar($pageName){
    echo '<nav class="nav-bar">';
    echo '<ul>';

    $linkNames = array("Log In", "View products", "Customer Orders");
    $linkAddresses = array("login.php", "view_products.php", "customer_orders.php");
    
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