<?php
/*Include the PHP file that contains the repeated code
in every page*/
    include('main.php'); 
	  //Call the functions to display the header and the navagation bar
    getHead("View Products");
    getNavBar("View Products");
?>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div class="container py-5">
    <div class="row d-flex justify-content-center">
        <table class="table">
            <thead>
              <tr>
                <th>Item Number</th>
                <th>Name</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1754383</th>
                <td>M&S Winter Coat</td>
                <td>£69.99</td>
                <td><button class="btn btn-primary mb-6 btn-lg" type="button">Edit</button></td>
              </tr>
              <tr>
                <th>7453864</th>
                <td>Maserati Potenza Watch</td>
                <td>£199.99</td>
                <td><button class="btn btn-primary mb-6 btn-lg" type="button">Edit</button></td>
              </tr>
              <tr>
                <th>3974204</th>
                <td>Spring Plaid Shirt</td>
                <td>£74.99</td>
                <td><button class="btn btn-primary mb-6 btn-lg" type="button">Edit</button></td>
              </tr>
            </tbody>
          </table>
    </div>
    </div>
    <div class="container py-3">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6">
            <div class="card bg-grey">
              <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-5">
                  <h2>Add new Product</h2>
                  <form>
                          <p>Please enter the product details:</p>
                          <div class="form-outline mb-4">
                            <input type="number" class="form-control" placeholder="Enter item number" />
                            <label>Item Number</label>
                          </div>
                          <div class="form-outline mb-4">
                            <input type="text" class="form-control" placeholder="Enter item name" />
                            <label>Item Name</label>
                          </div>
                          <div class="form-outline mb-4">
                            <input type="text" class="form-control" placeholder="Enter item price" />
                            <label>Item Price</label>
                          </div>
                          <div class="text-center pt-1 mb-5">
                            <button class="btn btn-primary mb-6 btn-lg" type="button">Add Item</button>
                          </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>