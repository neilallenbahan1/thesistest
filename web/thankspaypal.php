
<?php include('paypalrecord.php') ?>
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
  </style>

<body>
<form class="from1"action ="admin.php" method ="POST">  
    <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
                        



                            <div class ="form-group">
                                <label  >Booktitle</label>
                                <input type ="pname" name = "pname"  class = "form-control form-control-lg"
                                    value = "<?php echo $pname; ?>" >
                            </div>

                            <div class ="form-group ">
                                <label for = "pcode">ProductCode </label>
                                <input type ="pcode" name = "pcode"  class = "form-control form-control-lg"
                                value = "<?php echo $pcode; ?>" >
                            </div>

                            <div class ="form-group">
                                <label  >Price</label>
                                <input type ="price" name = "price"  class = "form-control form-control-lg"
                                    value = "<?php echo $price; ?>" >
                            </div>
                            <div class ="form-group">
                                <label  >Image</label>
                                <input type ="text" name = "image"  class = "form-control form-control-lg"
                                    value = "<?php echo $image; ?>" >
                            </div>
                    
                    <div class ="form-group">

                  
                    <?php
                            if($update == true):
                    ?>
                      <button type="submit" name="update" class = "btn btn-info btn-block btn-lg">Update</button>

                        <?php else:?>
                    <button type="submit" name="save" class = "btn btn-primary btn-block btn-lg">Add</button>
                         
                         <?php endif; ?>
                        </div>
                        </form>

                       

                       
                            

    </body> 

  <div style="clear:both;"></div>

  <div class="message_box" style="margin:10px 0px;">
    <?php echo $status; ?>
  </div>

 



  
</body>

</html>


