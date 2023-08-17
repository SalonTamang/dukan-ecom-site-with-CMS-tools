<?php
/*Include the PHP file that contains the repeated code
in every page*/
    include('main.php'); 
	  //Call the functions to display the header and the navagation bar
    getHead("Register");
    getNavBar("Register");
?>

<body>
  <!-- add bootstrap js functions -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- container for the website registration form and image -->
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="card"> 
              <div class="row">
                <!-- column for registration form -->
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">
                    <!-- top part of log in form containing registration image and welcome message -->
                    <div class="text-center">
                      <img class="login-image" src="Images/Image8.png" style="width: 185px;" alt="logo">
                      <h2 class="pb-5">Create your free account</h2>
                    </div>
                    <form>
                      <p>Please enter your details:</p>
                      <div class="form-outline mb-4">
                        <input type="text" class="form-control" placeholder="Enter full name" />
                        <label>Full Name</label>
                      </div>
                      <div class="form-outline mb-4">
                        <!-- input boxes for user details -->
                        <input type="number" class="form-control" placeholder="Enter phone number" />
                        <label>Phone number</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="text" class="form-control" placeholder="Enter username" />
                        <label>Username</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="password" class="form-control" placeholder="Enter password" />
                        <label>Password</label>
                      </div>
                      <!-- select input type to choose gender -->
                      <select class="form-select">
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                      </select>
                      <label>Gender</label>
                      <div class="text-center pt-1 mb-2">
                        <!-- button to submit registration form -->
                        <button class="btn btn-primary mb-6 btn-lg" type="button">Register</button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 d-flex">
                  <img src="Images/Image7.png" alt="log in image">
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
?>