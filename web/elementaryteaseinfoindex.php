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
"SELECT * FROM `elementarytease` WHERE `pcode`='$code'"
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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  

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
   .buy{
        Font-family:montserrat;
        font-size:15px;
        background-color:#fa780f;
        border:none;
        color:white;
    
        padding-top:5px;
        padding-bottom:5px;
        margin-bottom:12px;
    }
    .back{
        Font-family:montserrat;
        font-size:15px;
        background-color:#11404F;
        border:none;
        color:white;
        padding-left:18px;
        padding-right:18px;
        padding-top:5px;  
        padding-bottom:5px;
        
        margin-bottom:10px;
    }
    .cartnumber{
  color:#F64B4B;
  font-size:17px;
}
@media (max-width: 576px) {
  nav{
   
  }
  .cartnav{
    padding-left:145px
  }

}
  </style>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">CNA</a>
       
      <ul class="navbar-nav">
                         <li class="cartnav nav-item">
                              <?php
                    
                                    if (!empty($_SESSION["shopping_cart"])) {
                                        $cart_count = count(array_keys($_SESSION["shopping_cart"])); ?>
                                         <div class="cart_div">
                                            <a class="cartnumber "href="shoopcart.php"><img src="cart.png" /><span class= "numbercart">
                                                <?php echo $cart_count; ?> </span></a>
                                         </div>
                              <?php
                                    }else{   ?>     
                                 
                                       <img src="cart.png" /><span>                                           
                                <?php  }
                                  ?>
                                           
                         </li>
                       </ul>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
       
        <ul class="navbar-nav">
           <li class="nav-item">
            
            </a>
            <li class="nav-item">
            <a class="nav-link" href="login.php">Sign in</a>
          </li>
          <li class="nav-item" style="border-right: 0.1rem solid lightgrey">
          <li class="nav-item">
            <a class="nav-link btn nav-register-btn" href="register.php">Register</a>
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
 $sql = "SELECT * FROM elementarytease WHERE pname ='$title'";
 $result = mysqli_query($con, $sql);
 $queryResults = mysqli_num_rows($result);

 if ($queryResults > 0) {
     while ($row = mysqli_fetch_assoc($result)) {
         echo
        "  
    
      <div class='col-lg-4'>

        <div class='card mt-3'>
        <input type='hidden' name='pcode' value=".$row['pcode']." />
        <form method='post' action='' class='p-from'>
        <input type='hidden' name='pcode' value=".$row['pcode']." />
        <a href='#'><img class='card-img-top' src=' ".$row['image']." ' height ='300px' width ='300px'></a>
       
          <div class='card-body'>
            <h3 class='card-title'>".$row['pname']."</h3>
            <h4>".$row['price']."</h4>
            
       
    
            <button type='submit' class='buy'>AddtoCart</button>
            <div >
         
        </div>";
    }
}

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



</body>


</html>
