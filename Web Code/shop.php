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
              <li><a class="running" href="shop.php">All products</a></li>
              <li><a href="men.php">Men</a></li>
              <li><a href="women.php">Women</a></li>
              <li><a href="accesories.php">Accesories</a></li>
            </ul>
          </nav>
        </div>
    </div>
    <!-- box for all the website products -->
    <div class="container-lg pt-5">
        <div class="row">
          <!-- column containing product image and its price -->
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
            <!-- the following columns contains all the products with its price -->
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
                        <img class="card-img-top" src="Images/Women items/Item1.png" alt="Card image" style="width:100%">
                      </div>
                        <div class="card-body">
                          <h4 class="card-title">M&S Winter Coat</h4>
                          <p class="card-text"><b>Price</b>: £69.99</p>
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
                    <img class="card-img-top" src="Images/Accesories/Item1.png" alt="Card image" style="width:100%">
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Maserati Potenza Watch</h4>
                      <p class="card-text"><b>Price</b>: £199.99</p>
                      <button class="add-cart">Add to cart</button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="shop-item">
                    <div class="card">
                      <div class="item-image">
                        <img class="card-img-top" src="Images/Women items/Item2.png" alt="Card image" style="width:100%">
                      </div>
                        <div class="card-body">
                          <h4 class="card-title">Dot Collared Shirt</h4>
                          <p class="card-text"><b>Price</b>: £36.99</p>
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
        </div>
    </div>
    <div class="container-lg pt-5">
      <div class="row">
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
          <div class="col-lg-4">
              <div class="shop-item">
                  <div class="card">
                    <div class="item-image">
                      <img class="card-img-top" src="Images/Women items/Item3.png" alt="Card image" style="width:100%">
                    </div>
                      <div class="card-body">
                        <h4 class="card-title">Blue Cotton Dress</h4>
                        <p class="card-text"><b>Price</b>: £79.99</p>
                        <button class="add-cart">Add to cart</button>
                      </div>
                  </div>
                  </div>
          </div>
          <div class="col-lg-4">
              <div class="shop-item">
                  <div class="card">
                    <div class="item-image">
                      <img class="card-img-top" src="Images/Women items/Item4.png" alt="Card image" style="width:100%">
                    </div>
                      <div class="card-body">
                        <h4 class="card-title">V-neck Floral Blouse</h4>
                        <p class="card-text"><b>Price</b>: £56.99</p>
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
                    <img class="card-img-top" src="Images/Women items/Item5.png" alt="Card image" style="width:100%">
                  </div>
                    <div class="card-body">
                      <h4 class="card-title">Long Black Blazer</h4>
                      <p class="card-text"><b>Price</b>: £115.99</p>
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
  </div>
</div>
<div class="container-lg pt-5">
  <div class="row">
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
      <div class="col-lg-4">
          <div class="shop-item">
              <div class="card">
                <div class="item-image">
                  <img class="card-img-top" src="Images/Women items/Item6.png" alt="Card image" style="width:100%">
                </div>
                  <div class="card-body">
                    <h4 class="card-title">Collage Bomber Jacket</h4>
                    <p class="card-text"><b>Price</b>: £89.99</p>
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