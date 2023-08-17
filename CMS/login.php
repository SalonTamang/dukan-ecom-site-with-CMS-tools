<?php
/*Include the PHP file that contains the repeated code
in every page*/
    include('main.php'); 
	  //Call the functions to display the header and the navagation bar
    getHead("Log In");
    getNavBar("Log In");
?>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div class="container py-3">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-6">
        <div class="card bg-grey">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2>Login</h2>
              <br>

              <style>
                
              </style>

              <!-- display server message  -->
              <div class="alert alert-success d-none" role="alert">
                A simple success alert—check it out!
              </div>


              <form >
                      <p>Please enter your details:</p>
                      <div class="form-outline mb-4">
                        <input type="text" id="usrname" class="form-control" placeholder="Enter username" />
                        <label>Username</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="password" id="pwd" class="form-control" placeholder="Enter password" />
                        <label>Password</label>
                      </div>
                      <div class="text-center pt-1 mb-5">
                        <button class="btn btn-primary mb-6 btn-lg" type="button">Log In</button>
                      </div>
              </form>

              <script>
                function register (){
                  //Create request object
                  let request = new XMLHttpRequest () ;
                  //Create event handler that specifies what should happen when server responds
                  request.onload = () => {
                    //Check HTTP status code
                    if (request.status === 200){
                      //Get data from server
                      let responseData = request. responseText;
                      //Add data to page
                      document.getElementById("ServerResponse").innerHTML= responseData;
                    }
                    else{
                      alert("Error communicating with server: " + request.status);
                    }
                  };
                  //Set up request with HTTP method and URL 
                  request.open("POST","staff_register.php");
                  request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                  //Extract registration data
                  let usrName = document. getElementById ("usrname") . value;
                  let usrPassword = document. getElementById("pwd"). value;
                  //Send request
                  request.send("name=" + usrName + "§password=" + usrPassword);
                };
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>