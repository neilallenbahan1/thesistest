
<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
  if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["pcode"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:red;'>
  </div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
        }		
      }
  }

if (isset($_POST['action']) && $_POST['action']=="change") {
    foreach ($_SESSION["shopping_cart"] as &$value) {
        if ($value['pcode'] === $_POST["pcode"]) {
            $value['quantity'] = $_POST["quantity"];
            break; // Stop the loop after we've found the product
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<style>
  
  body{
    font-family:montserrat;
    
  }
  .colornav{
    background-color:#343A40;
    color:white;
    font-size:20px;
    padding-bottom:2%;
    
  }
  .colornav1{
    background-color:#343A40;
    color:white;
    font-weight:400;
    font-family:montserrat;
   
  }
  .colornav3{
    background-color:#ffff;
    color:white;
    font-weight:400;
    font-family:montserrat;
   
  }
  .card-body{
    padding:0;
  }
  .tbody{
    padding-bottom:2%;
  }
 .remove{
   background-color:white;
   border:none;
 }
 .name{
   padding-top:4%;
   position:absolute;
   font-size:16px;
 }
 .checkout{
   background-color:#246579;
   border:none;
    padding-left:1%;
   padding-right:1%;
   padding-top:.7%;
   padding-bottom:.7%;
   position:absolute;
   color:white;

 }
 .total{
  margin-right:6%;
 }

  </style>
<body>


  <div class="cart">
    <?php
if (isset($_SESSION["shopping_cart"])) {
    $total_price = 0; ?>
  
  <div class="card">
                       
                         
                        <div class="card-body" >
                            <table class="table">
                                <thead class="colornav">
                                    <tr>
                                      <th class ="colornav1" scope="col"> <a class="backbutton" onclick="goBack()">
                                          <img  src ="backbuttoncart.png">
                                        </a></th>
                                      <th class ="colornav1" scope="col">Item</th>
                                      <th  class ="colornav1"scope="col">Quantity</th>
                                      <th class ="colornav1" scope="col">Price</th>
                                      <th class ="colornav1" scope="col">TotalItem</th>
                                      <th class ="colornav1" scope="col"></th>
                                  </tr>
                              </thead>
                              <tbody>
                              <th class ="colornav3" scope="col">
                                        </th>
                                      <th class ="colornav3" scope="col"></th>
                                      <th  class ="colornav3"scope="col"></th>
                                      <th class ="colornav3" scope="col"></th>
                                      <th class ="colornav3" scope="col"></th>
                                      <th class ="colornav3" scope="col"></th>
                              <?php
foreach ($_SESSION["shopping_cart"] as $product) {
        ?>
        <tr>
          <td class= " text-center">
            <img
              src='<?php echo $product["image"]; ?>'
              width="80" height="100" />
          </td>
          <td class="name"><?php echo $product["pname"]; ?><br />
        
          </td>
          <td>
            
            <form method='post' action=''>
              <input type='hidden' name='pcode'
                value="<?php echo $product["pcode"]; ?>" />
              <input type='hidden' name='action' value="change" />
              <select name='quantity' class='quantity' onChange="this.form.submit()">

                <option <?php if ($product["quantity"]==1) {
            echo "selected";
        } ?>
                  value="1">1</option>
                <option <?php if ($product["quantity"]==2) {
            echo "selected";
        } ?>
                  value="2">2</option>
                <option <?php if ($product["quantity"]==3) {
            echo "selected";
        } ?>
                  value="3">3</option>
                <option <?php if ($product["quantity"]==4) {
            echo "selected";
        } ?>
                  value="4">4</option>
                <option <?php if ($product["quantity"]==5) {
            echo "selected";
        } ?>
                  value="5">5</option>
              </select>
            </form>
          </td>
          <td><?php echo "₱".$product["price"]; ?>
          </td>
   
          <td><?php echo "".$product["quantity"]; ?>
       
          </td>
          <td>
          <form method='post' action=''>
              <input type='hidden' name='pcode'
                value="<?php echo $product["pcode"]; ?>" />
              <input type='hidden' name='action' value="remove" />
              <button type='submit' class='remove'><img  type='submit' class='remove' src="cartdelete.png" /></button>
            </form>
      </td>
        </tr>
        <?php
        
$total_price += ($product["price"]*$product["quantity"]);
$price = (int)$total_price;
    } ?>
        <tr>
          <td colspan="5" align="right">
            
            <strong class="total">TOTAL: <?php echo "₱".$total_price; ?></strong>
            
            <a href ="paymentmethod.php">

         
            <button  class="checkout" type='submit' class='checkout'>Checkout</button>
  </a>
          </td>
        </tr>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
  
                <?php
} else {
        echo "
                       
                         
        <div class='card-body' >
            <table class='table'>
            <h4>Your cart is empty!</h4>
                <thead class='colornav'>
                    <tr>
                      <th class ='colornav1' scope='col'> <a class='backbutton'href = 'home.php''>
                          <img  src ='backbuttoncart.png'>
                        </a></th>
                      <th class ='colornav1' scope='col'>Item</th>
                      <th  class ='colornav1'scope='col'>Quantity</th>
                      <th class ='colornav1' scope='col'>Price</th>
                      <th class ='colornav1' scope='col'>TotalItem</th>
                      <th class ='colornav1' scope='col'></th>
                  </tr>
              </thead>
              <tbody>
              <th class ='colornav3' scope='col'>
                        </th>
                      <th class ='colornav3' scope='col'></th>
                      <th  class ='colornav3'scope='col'></th>
                      <th class ='colornav3' scope='col'></th>
                      <th class ='colornav3' scope='col'></th>
                      <th class ='colornav3' scope='col'></th>
                      
                      
                      
                      ";
                      
    }
?>

  </div>


  <div style="clear:both;"></div>

  <div class="message_box" style="margin:10px 0px;">
    <?php echo $status; ?>
  </div>

  <script>
function goBack() {
  window.history.back();
}
</script>


</body>


</html>


