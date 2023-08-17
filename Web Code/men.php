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
              <li><a href="shop.php">All products</a></li>
              <li><a class="running" href="men.php">Men</a></li>
              <li><a href="women.php">Women</a></li>
              <li><a href="accesories.php">Accesories</a></li>
            </ul>
          </nav>
        </div>
    </div>
    <!-- container for all men products -->
    <div class="container-lg pt-5">
        <div class="row">
          <!-- columns with prduct image and price -->
            <div class="col-lg-4">
                <div class="shop-item">
                <div class="card">
                    <div class="item-image">
                    <img class="card-img-top" src="Images/Men items/Item1.png" alt="Card image" style="width:100%">
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Nike Hybrid Jacket</h4>
                      <p class="card-text"><b>Price</b>: £59.99</p>
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
                        <img class="card-img-top" src="Images/Men items/Item2.png" alt="Card image" style="width:100%">
                      </div>
                        <div class="card-body">
                          <h4 class="card-title">Levi's Original T-Shirt</h4>
                          <p class="card-text"><b>Price</b>: £45.99</p>
                          <button class="add-cart">Add to cart</button>
                        </div>
                    </div>
                    </div>
            </div>
            <div class="col-lg-4">
                <div class="shop-item">
                <div class="card">
                    <div class="item-image">
                    <img class="card-img-top" src="Images/Men items/Item3.png" alt="Card image" style="width:100%">
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Casual Floral Shirt</h4>
                      <p class="card-text"><b>Price</b>: £95.99</p>
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
                    <img class="card-img-top" src="Images/Men items/Item5.png" alt="Card image" style="width:100%">
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Casual Black T-shirt</h4>
                      <p class="card-text"><b>Price</b>: £39.99</p>
                      <button class="add-cart">Add to cart</button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="shop-item">
                    <div class="card">
                      <div class="item-image">
                        <img class="card-img-top" src="Images/Men items/Item4.png" alt="Card image" style="width:100%">
                      </div>
                        <div class="card-body">
                          <h4 class="card-title">Spring Plaid Shirt</h4>
                          <p class="card-text"><b>Price</b>: £74.99</p>
                          <button class="add-cart">Add to cart</button>
                        </div>
                    </div>
                    </div>
            </div>
            <div class="col-lg-4">
                <div class="shop-item">
                    <div class="card">
                      <div class="item-image">
                        <img class="card-img-top" src="Images/Men items/Item6.png" alt="Card image" style="width:100%">
                      </div>
                        <div class="card-body">
                          <h4 class="card-title">Winter Wool Blazer</h4>
                          <p class="card-text"><b>Price</b>: £110.99</p>
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