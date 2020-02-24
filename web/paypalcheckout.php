
<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
  if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["pcode"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
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
  td{
    padding-left:10%;
  }
  body{
    font-family:montserrat;
    
  }
  .container{
    padding-top:5%;
  }
  p{
    font-size:20px;
  }
  .value{
    font-size:25px
  }
  .label{
    color:#246579;
    font-weight:bold;
    font-size:20px
  }
  .table{
    font-size:20px
  }
  strong{
    color:#246579;
  }
  .cart.container{
    padding-top:1%;
  }
  #paypal-button{
      position:absolute;
      left:72%;
      
  }
  @media (max-width: 576px) {
  nav{
    width:80%;
  }
  .cartnav{
    padding-left:140px
  }
  #paypal-button{
      position:absolute;
      left:58%;
      
  }
  td{
   font-size:14px;
  }
}
  </style>

<body>
  <div class="container">
<h5>Your selected items</h5>
</div>

  <div class="cart container">
    <?php
if (isset($_SESSION["shopping_cart"])) {
    $total_price = 0; ?>
    <table id="cart" class="table table-hover table-condensed">
    <table class="table">
      <tbody>
        <tr>
          <td style="width:15%">ITEM</td>
          <td style="width:2%"></td>
          <td style="width:20%">UNIT PRICE</td>
          <td style="width:20%">ITEMS TOTAL</td>
        </tr>
        
        <?php
foreach ($_SESSION["shopping_cart"] as $product) {
        ?>
        <tr>
          
          <td><?php echo $product["pname"]; ?><br />
          
          </td>
          <td>
  
          </td>
          <td><?php echo "₱ ".$product["price"]; ?>
          </td>
          <td><?php echo "".$product["quantity"]; ?>
          </td>
        </tr>
        <?php
$total_price += ($product["price"]*$product["quantity"]);
$price = (int)$total_price;
$price2= (int)$total_price+55;
    } ?>
        <tr>
          <td colspan="5" align="right">
            <strong>TOTAL:<?php echo "₱ ".$total_price; ?></strong>
          
          </td>
        </tr>
      </tbody>
    </table>
    <?php
} else {
        echo "<h3>Your cart is empty!</h3>";
    }
?>
  </div>

  <div style="clear:both;"></div>

  <div class="message_box" style="margin:10px 0px;">
    <?php echo $status; ?>
</div>
<div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
var val = "<?php echo $price?>";
  paypal.Button.render({
    
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AYmnEWYXUOGZmEoDsnzpyY0b3lvdhoSpEPQacfrrOQfo4DgGdCiTygH_jHAbvAHpvxpOhM2uOeRlFQDu',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
      image:'cart-icon1',
    },

    // Enable Pay Now checkout flow (optional)
    
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: val,
            currency: 'PHP'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
        alert('Thank you for your purchase!');
        window.location.href = "paypalsucessform.php";
        
    
      });
    }
  }, '#paypal-button');

</script> 


 



  
</body>

</html>


