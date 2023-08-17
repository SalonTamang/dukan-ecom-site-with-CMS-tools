<?php
/*Include the PHP file that contains the repeated code
in every page*/
    include('main.php'); 
	  //Call the functions to display the header and the navagation bar
    getHead("Shop");
    getNavBar("Shop");
?>

<body>
  <!-- add bootstrap js functions -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- container for a small nav bar for all the clothes categories -->
    <div class="container-lg pt-5">
        <div class="mini-nav">
        <nav class="nav-bar">
            <ul>
              <!-- running class add background color to the page on the nav bar
              which is currently running -->
              <li><a href="shop.html">All products</a></li>
              <li><a href="men.html">Men</a></li>
              <li><a href="women.html">Women</a></li>
              <li><a class="running" href="accesories.html">Accesories</a></li>
            </ul>
          </nav>
        </div>
    </div>
    <!-- container for all women products -->
    <div class="container-lg pt-5">
        <div class="row">
          <!-- columns with prduct image and price -->
            <div class="col-lg-4">
                <div class="shop-item">
                <div class="card">
                    <div class="item-image">
                    <img class="card-img-top" src="Images/Accesories/Item1.png" alt="Card image" style="width:100%">
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Maserati Potenza Watch</h4>
                      <p class="card-text"><b>Price</b>: £199.99</p>
                      <!-- button to add the item to the cart -->
                      <button class="add-cart">Add to cart</button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="shop-item">
                    <div class="card">
                      <div class="item-image">
                        <img class="card-img-top" src="Images/Accesories/Item2.png" alt="Card image" style="width:100%">
                      </div>
                        <div class="card-body">
                          <h4 class="card-title">Heart pedant necklace</h4>
                          <p class="card-text"><b>Price</b>: £236.99</p>
                          <button class="add-cart">Add to cart</button>
                        </div>
                    </div>
                    </div>
            </div>
            <div class="col-lg-4">
                <div class="shop-item">
                <div class="card">
                    <div class="item-image">
                    <img class="card-img-top" src="Images/Accesories/Item3.png" alt="Card image" style="width:100%">
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Classic Purple Sglasses</h4>
                      <p class="card-text"><b>Price</b>: £47.99</p>
                      <button class="add-cart">Add to cart</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-lg pt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="shop-item">
                    <div class="card">
                      <div class="item-image">
                        <img class="card-img-top" src="Images/Accesories/Item4.png" alt="Card image" style="width:100%">
                      </div>
                        <div class="card-body">
                          <h4 class="card-title">Infinity Leather Bracelet</h4>
                          <p class="card-text"><b>Price</b>: £52.99</p>
                          <button class="add-cart">Add to cart</button>
                        </div>
                    </div>
                    </div>
            </div>
            <div class="col-lg-4">
                <div class="shop-item">
                    <div class="card">
                      <div class="item-image">
                        <img class="card-img-top" src="Images/Accesories/Item5.png" alt="Card image" style="width:100%">
                      </div>
                        <div class="card-body">
                          <h4 class="card-title">Silver Band Ring</h4>
                          <p class="card-text"><b>Price</b>: £89.99</p>
                          <button class="add-cart">Add to cart</button>
                        </div>
                    </div>
                    </div>
            </div>
            <div class="col-lg-4">
                <div class="shop-item">
                <div class="card">
                    <div class="item-image">
                    <img class="card-img-top" src="Images/Accesories/Item6.png" alt="Card image" style="width:100%">
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Infinity Silver Bracelet</h4>
                      <p class="card-text"><b>Price</b>: £85.99</p>
                      <button class="add-cart">Add to cart</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</body>

<?php
//Call the function to display the footer
    getFooter();