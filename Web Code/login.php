<?php
/*Include the PHP file that contains the repeated code
in every page*/
    include('main.php'); 
	  //Call the functions to display the header and the navagation bar
    getHead("Log In");
    getNavBar("Log In");
?>

<body>
  <!-- add bootstrap js functions -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- container for the website log in form and image -->
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="card"> 
              <div class="row">
                <!-- column for log in form -->
                <div class="col-lg-6">
                  <div class="card-body">
                    <!-- top part of log in form containing log in image and welcome message -->
                    <div class="text-center">
                      <img class="login-image" src="Images/Image5.png" style="width: 185px;" alt="logo">
                      <h2 class="pb-5">Welcome back to Dokan</h2>
                    </div>
                    <form>
                      <p>Please enter your details:</p>
                      <div class="form-outline mb-4">
                        <!-- input boxes for user details -->
                        <input type="text" class="form-control" placeholder="Enter username" />
                        <label>Username</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="password" class="form-control" placeholder="Enter password" />
                        <label>Password</label>
                      </div>
                      <div class="text-center pt-1 mb-5">
                        <!-- button to submit log in form -->
                        <button class="btn btn-primary mb-6 btn-lg" type="button">Log In</button>
                      </div>
    
                      <div class="d-flex justify-content-center pb-4">
                        <p class="mt-2 mx-3">Don't have an account yet?</p>
                        <!-- link to registration page -->
                        <a href="register.php"><button type="button" class="btn btn-outline-dark">Create account</button></a>
                      </div>
    
                    </form>
    
                  </div>
                </div>
                <div class="col-lg-6 d-flex">
                  <img src="Images/Image6.png" alt="log in image">
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