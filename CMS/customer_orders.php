<?php
/*Include the PHP file that contains the repeated code
in every page*/
    include('main.php'); 
	  //Call the functions to display the header and the navagation bar
    getHead("Customer Orders");
    getNavBar("Customer Orders");
?>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div class="container py-5">
    <div class="row d-flex justify-content-center">
        <table class="table">
            <thead>
              <tr>
                <th>Order Number</th>
                <th>Items</th>
                <th>Total amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1754383</th>
                <td>M&S Winter Coat</td>
                <td>£69.99</td>
                <td><button class="btn btn-danger mb-6 btn-lg" type="button">Remove</button></td>
              </tr>
              <tr>
                <th>7453864</th>
                <td>Maserati Potenza Watch</td>
                <td>£199.99</td>
                <td><button class="btn btn-danger mb-6 btn-lg" type="button">Remove</button></td>
              </tr>
              <tr>
                <th>3974204</th>
                <td>Spring Plaid Shirt</td>
                <td>£74.99</td>
                <td><button class="btn btn-danger mb-6 btn-lg" type="button">Remove</button></td>
              </tr>
            </tbody>
          </table>
    </div>
    </div>
</body>
</html>