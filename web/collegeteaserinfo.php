<?php
include 'db.php';
?>

<?php require_once 'authController.php';
?>
<?php
if(isset($_SESSION['id'])){
  header('location: login.php');
  exit();
}
include('db.php');
$status="";
if (isset($_POST['pcode']) && $_POST['pcode']!=""){
$code = $_POST['pcode'];
$result = mysqli_query(
$con,
"SELECT * FROM `Collegetease` WHERE `pcode`='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['pname'];
$code = $row['pcode'];
$price = $row['price'];
$image = $row['image'];
 
$cartArray = array(
 $code=>array(
 'pname'=>$name,
 'pcode'=>$code,
 'price'=>$price,
 'quantity'=>1,
 'image'=>$image)
);
 
if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
 $status = "<div class='box' style='color:red;'>
 Product is already added to your cart!</div>"; 
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
 }
 
 }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>
<style>
    .ccard{
        width:259.98px;
        -webkit-box-shadow: 0.1px 0.1px 3px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0.1px 0.1px 3px 0px rgba(0,0,0,0.75);
box-shadow: 0.1px 0.1px 3px 0px rgba(0,0,0,0.75)
    }
    .card-body {   
       float: none; /* Added */
       width:259.98px;
   }
   .elementarytease
   {
      padding-top:1%;
   }
   .Seemore{
  background-color:#246579;
  color:white;
   }
   .Title{
     padding-top:2%

   }
  </style>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">CNA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
       
        <ul class="navbar-nav">
           <li class="nav-item">
            <a class="nav-link" href="#"><?php echo $_SESSION['username'];
            ?>
            
            </a>
          </li>
          <li class="nav-item" style="border-right: 0.1rem solid lightgrey">
            
          </li>
          <li class="nav-item">
            <a class="nav-link btn nav-register-btn" href="index.php">Logout</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">


      </div>
      <!-- /.col-lg-3 -->
      <?php
 $title = mysqli_real_escape_string($con, $_GET['title']);
 $sql = "SELECT * FROM Collegetease WHERE pname ='$title'";
 $result = mysqli_query($con, $sql);
 $queryResults = mysqli_num_rows($result);

 if ($queryResults > 0) {
     while ($row = mysqli_fetch_assoc($result)) {
         echo
        "  
    
      <div class='col-lg-5'>

        <div class='card mt-5'>
        <input type='hidden' name='pcode' value=".$row['pcode']." />
        <a href='#'><img class='card-img-top' src=' ".$row['image']." ' height ='300px' width ='300px'></a>
       
          <div class='card-body'>
            <h3 class='card-title'>".$row['pname']."</h3>
            <h4>".$row['price']."</h4>
            
            <span class='text-warning'>&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div>
        </div>";
    }
}
   mysqli_close($con);
   ?>
        <!-- /.card -->

      
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->
</div>
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
