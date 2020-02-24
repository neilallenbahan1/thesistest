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
"SELECT * FROM `grade10` WHERE `pcode`='$code'"
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
   .w3-button{
     background-color:#1c1c1c;
     color:white;
   }
   .s-btn:hover{
  background-color: #1c1c1b; 
  color:white;
}
.b-btn:hover{
  background-color: #1c1c1b;
  color:white;
}     
.s-btn{
  background-color: #1c1c1b; 
  color:white;
}
.b-btn{
  background-color: #1c1c1b;
  color:white;
}   
.form .s-btn:active{
  background-color: #1c1c1b;
  color:white;
}
.form .s-btn:active{
  background-color: #1c1c1b;
  color:white;
}        
.seachh{
  padding-top:4%;
}
.elementarytease{
  padding-top:4%;
}
.name{
  font-size:17px;
  margin-bottom:0;
  color:black;
}
.price{
  font-size:15px;
  margin-bottom:0;
  color:black;
}
.cartnumber{
  color:#F64B4B;
  font-size:17px;
}
@media (max-width: 576px) {
  nav{
    width:80%;
  }
  .cartnav{
    padding-left:140px
  }

} </style>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="home.php">CNA</a>
      <ul class="navbar-nav">
                         <li class="cartnav nav-item">
                              <?php
                    
                                    if (!empty($_SESSION["shopping_cart"])) {
                                        $cart_count = count(array_keys($_SESSION["shopping_cart"])); ?>
                                         <div class="cart_div">
                                            <a  class="cartnumber"href="shoopcart.php"><img src="cart.png" /><span class= "numbercart">
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

      <div class="col-lg-3">
        
      <h3 class="my-3">Junior&Seniorhigh</h3>
      <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Grade10
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

  <a class="dropdown-item" href="highschool.php">Grade7</a>
    <a class="dropdown-item" href="grade8.php">Grade8</a>
    <a class="dropdown-item" href="grade9.php">Grade9</a>
    <a class="dropdown-item" href="grade11.php">Grade11</a>
    <a class="dropdown-item" href="grade12.php">Grade12</a>
  </div>
</div>


        

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-7">

        <form class="seachh" role="form" id="form-buscar " style="margin:auto;max-width:500px"action="search.php" method="POST" >
<div class="form-group">
<div class="input-group">
<input id="1" class="form-control" type="text" name="search" placeholder="Search..." required/>
<span class="input-group-btn">
<button class="b-btn btn " type="submit" name = "submitsearch">
<i class="fa fa-search s-btn" aria-hidden="true"></i> 
</button>
</span>
</div>
</div>
</form>
        
        <div class="row">
          
        <?php
    $result = mysqli_query($con,"SELECT * FROM `grade10`");

          
    
             while($row=$result->fetch_assoc()): ?>

              <div class="col-lg-4 col-md-6 col-sm-6 col-6 elementarytease">
                  <div class="card h-90">
                  <?php  echo  "<td><a href ='grade10info.php?title=".$row['pname']."'</td>  "; ?>
                        <img class="card-img-top" src=" <?php echo $row['image']; ?>"  alt="">
                            <div class="card-body" >
                                <div class="card-title">
                                    <?php  echo  "<td><a href ='grade10info.php?title=".$row['pname']."'</td>  "; ?>
                                    
                                  <p class="name">  <?php echo $row['pname']; ?><br></p>
                                  <p class="price">   ₱<?php echo $row['price']; ?></p>
                                </div>
                            </div>
                  </div>
              </div>
            
        <?php endwhile; 
        
          ?>  
             
        <div style="clear:both;"></div>

    <div class="message_box" style="margin:10px 0px;">
    <?php echo $status; ?>
    </div>
          

     

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


  <!-- Bootstrap core JavaScript -->

</body>

</html>
v