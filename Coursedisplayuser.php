<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shopping Cart System</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>


<body>
  <!-- Navbar start -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="#"><i class=""></i>&nbsp;&nbsp;Courses Details</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href=""><i class="fas fa-mobile-alt mr-2"></i>Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-th-list mr-2"></i>Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar end -->

  <!-- Displaying Products Start -->
  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM tbl_courseadd');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()){
          if($row['status']==0)
          {

        
  		?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
           <!-- <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">-->
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info"><?= $row['cname'] ?></h4>
              <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['fees'],2) ?>/-</h5>
              <h6 class="card-title text-center text-info"><?= $row['description'] ?></h6>
            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <!--<div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['description'] ?>">
                  </div>-->
                </div>
                <input type="hidden" class="cid" value="<?= $row['cid'] ?>">
                <input type="hidden" class="cname" value="<?= $row['cname'] ?>">
                <input type="hidden" class="fees" value="<?= $row['fees'] ?>">
                <!--<input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">-->
            
               <!-- <a href="book.php?id=<?php echo $row['cid']?>">Book Now</a>-->
                <button class="btn btn-info btn-block addItemBtn" ><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Apply</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php } } ?>
    </div>
  </div>
  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

 
</body>

</html>