<?php
/*Include the PHP file that contains the repeated code
in every page*/
    include('main.php'); 
	  //Call the functions to display the header and the navagation bar
    getHead("Cart");
    getNavBar("Cart");
?>

<body>
  <!-- add bootstrap js functions -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- container for all the products inside the cart -->
        <div class="container-lg pt-5">
          <div class="row">
            <div class="col-lg">
              <h2>Shopping Basket</h2>
            </div>
          </div>  
              <div class="card mb-4">
                <div class="card-body p-4">
                  <div class="row p-4">
                    <!-- columns for the product details -->
                    <div class="col-lg-3 d-flex justify-content-start">
                        <p class="lead fw-normal mb-0"><b>Product</b></p>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center">
                        <p class="lead fw-normal mb-0"><b>Name</b></p>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center">
                        <p class="lead fw-normal mb-0"><b>Quantity</b></p>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center">
                        <p class="lead fw-normal mb-0"><b>Price</b></p>
                    </div>
                  </div>
                  <!-- rows with each product image and details -->
                  <div class="row p-4">
                    <div class="col-lg-3 d-flex justify-content-start">
                        <img class="img-fluid img-thumbnail w-50" src="Images/Women items/Item6.png" alt="product image">
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center">
                        <p class="lead fw-normal mb-0">Collage Bomber Jacket</p>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center">
                        <p class="lead fw-normal mb-0">1</p>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center">
                        <p class="lead fw-normal mb-0">£89.99</p>
                    </div>
                  </div>
                  <div class="row p-4">
                    <div class="col-lg-3 d-flex justify-content-start">
                        <img class="img-fluid img-thumbnail w-50" src="Images/Accesories/Item1.png" alt="product image">
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center">
                        <p class="lead fw-normal mb-0">Maserati Potenza Watch</p>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center">
                        <p class="lead fw-normal mb-0">1</p>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center">
                        <p class="lead fw-normal mb-0">£199.99</p>
                    </div>
                  </div>
                </div>
            </div>
            <!-- small box to show the total price of all products inside the cart -->
              <div class="card">
               <p class="lead my-4 me-4 d-flex justify-content-end">
                  Total: <b>£289.98</b>
               </p>
              </div>
        </div>
        <!-- container for check out form -->
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="card"> 
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="card-body p-md-5 mx-md-4">
                        <!-- top image and welcome message for check out form -->
                        <div class="text-center">
                          <img class="login-image" src="Images/Image10.png" style="width: 185px;" alt="logo">
                          <h2 class="pb-5">Ready to check out?</h2>
                        </div>
                        <form>
                          <p>Please enter your details:</p>
                          <div class="form-outline mb-4">
                            <!-- input boxes for user details -->
                            <input type="text" class="form-control" placeholder="Enter full name" />
                            <label>Full Name</label>
                          </div>
                          <div class="form-outline mb-4">
                            <input type="number" class="form-control" placeholder="Enter phone number" />
                            <label>Phone number</label>
                          </div>
                          <div class="form-outline mb-4">
                            <input type="text" class="form-control" placeholder="Enter address" />
                            <label>Address</label>
                          </div>
                          <div class="form-outline mb-4">
                            <input type="email" class="form-control" placeholder="Enter email address" />
                            <label>Email address</label>
                          </div>
                          <!-- button to submit order -->
                          <div class="text-center pt-1 mb-2">
                            <button class="btn btn-primary mb-6 btn-lg" type="button">Check Out</button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-lg-6 d-flex">
                      <img src="Images/Image9.png" alt="log in image">
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