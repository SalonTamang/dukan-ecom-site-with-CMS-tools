<?php
/*Include the PHP file that contains the repeated code
in every page*/
    include('main.php'); 
	  //Call the functions to display the header and the navagation bar
    getHead("Account");
    getNavBar("Account");
?>

<body>
  <!-- add bootstrap js functions -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div class="container-lg pt-5">
        <div class="row">
          <!-- cntainer for account default image and account holder name -->
            <div class="col-lg-4">
                <div class="card">
                <img class="card-img-top rounded-circle" src="Images/Image11.png" alt="profile image">
                <div class="card-body d-flex justify-content-center pt-4">
                    <h3>Account holder name</h3>
                </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body pt-5">
                        <div class="row mb-5 pt-4">
                          <!-- colums for acount holder details -->
                            <div class="col-lg-4">
                                <h5>Full Name</h5>
                            </div>
                            <div class="col-lg-4">
                                <p>Account holder name</p>
                            </div>
                        </div>
                        <div class="row mb-5 pt-4">
                            <div class="col-lg-4">
                                <h5>Gender</h5>
                            </div>
                            <div class="col-lg-4">
                                <p>Account holder gender</p>
                            </div>
                        </div>
                        <div class="row mb-5 pt-4">
                            <div class="col-lg-4">
                                <h5>Phone Number</h5>
                            </div>
                            <div class="col-lg-4">
                                <p>Account holder phone number</p>
                            </div>
                        </div>
                        <div class="row mb-5 pt-4">
                            <div class="col-lg-4">
                                <h5>Username</h5>
                            </div>
                            <div class="col-lg-4">
                                <p>Account holder username</p>
                            </div>
                        </div>
                        <div class="row mb-3 pt-4">
                            <div class="col-lg-4">
                                <h5>Password</h5>
                            </div>
                            <div class="col-lg-4">
                                <p>Account holder password</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- table to show account holder past orders -->
    <div class="container-lg pt-5">
        <div class="row">
            <div class="col-lg">
              <h2>Past Orders</h2>
            </div>
          </div>
            <!-- columns for past order details -->
          <div class="row p-4">
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
    </div>
    <hr>
</body>

<?php
//Call the function to display the footer
    getFooter();