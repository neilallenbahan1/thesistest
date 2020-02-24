
<?php

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
    background-color:#246579;
    color:white;
    font-size:24px;
    padding-bottom:2%;
    
  }
  .colornav1{
    background-color:#246579;
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
  
  
  
                                
                            </tbody>
                        </table>

                    </div>
                </div>
  
                <?php
          
        
                $total_price += ($product["price"]*$product["quantity"]);
                $price = (int)$total_price;
} else {
       
    }
?>
  </div>

  <div style="clear:both;"></div>

  <div class="message_box" style="margin:10px 0px;">
    <?php echo $status; ?>
  </div>







</body>

</html>


