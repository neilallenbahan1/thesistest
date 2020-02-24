<?php require 'shop.php';
?>
<?php require_once 'authController.php';
?>

<?php if(isset($_SESSION['id'])){
  header('location: login.php');
  exit();
}?>
<?php include('paypalrecord.php') ?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>jQuery Keypad Plugin Test</title>
        <link rel="stylesheet" type="text/css" href="jQKeyboard.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="jQKeyboard.js"></script>

        <style type="text/css">
            #jQKeyboardContainer
            {
               position:absolute;
               left:38%;
               top:79%;
                font-size:25px;
            }
            body{
  font-family:montserrat;
width:80%;
padding-top:2%;
margin-left:9%;
}
.con {
    top:35%;
  position:absolute;
  left:30%;
 
}
label{
  font-family:montserrat;
  font-weight:bold;
  font-size:16px;
  padding-top:12px;

}
.registerbtn{
    position:absolute;
    top:100%;
    font-size:15px;
    border:none;
    padding-left:30px;
    padding-right:30px;
    padding-top:10px;
    padding-bottom:10px;
    background-color:#138FE9;
    color:white;
    
    
}
#testvirtual{
    width:50%;
    height:40px;
    font-size:20px;
}
button{
   font-size:40px;
}
.thanks{
        position:absolute;
        left:33%;
        top:10%;
        font-size:33px;
    }
    .please{
        top:20%;
        position:absolute;
        left:35%;
        
        font-size:25px;
    }
@media (max-width: 576px) {
    .thanks{
        position:absolute;
        left:17%;
        top:7%;
        font-size:17px;
    }
    .please{
        top:15%;
        position:absolute;
        left:17%;
        
        font-size:15px;
    }
    #testvirtual{
    width:70%;
    height:40px;
    font-size:20px;
}
.con {
    top:25%;
  
  position:absolute;
  left:13%;
 
}
.registerbtn{
    position:absolute;
    top:100%;
    font-size:15px;
    border:none;
    padding-left:30px;
    padding-right:30px;
    padding-top:10px;
    padding-bottom:10px;
    background-color:#138FE9;
    color:white;
    
    
}
}


        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script type="text/javascript" src="jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="jQKeyboard.js"></script>
        <script type="text/javascript">
            $(function(){
                var keyboard = {
                    'layout': [
                        // alphanumeric keyboard type
                        // text displayed on keyboard button, keyboard value, keycode, column span, new row
                        [
                            [
                                ['`', '`', 192, 0, true], ['1', '1', 49, 0, false], ['2', '2', 50, 0, false], ['3', '3', 51, 0, false], ['4', '4', 52, 0, false], ['5', '5', 53, 0, false], ['6', '6', 54, 0, false], 
                                ['7', '7', 55, 0, false], ['8', '8', 56, 0, false], ['9', '9', 57, 0, false], ['0', '0', 48, 0, false], ['-', '-', 189, 0, false], ['=', '=', 187, 0, false],
                                ['q', 'q', 81, 0, true], ['w', 'w', 87, 0, false], ['e', 'e', 69, 0, false], ['r', 'r', 82, 0, false], ['t', 't', 84, 0, false], ['y', 'y', 89, 0, false], ['u', 'u', 85, 0, false], 
                                ['i', 'i', 73, 0, false], ['o', 'o', 79, 0, false], ['p', 'p', 80, 0, false], ['[', '[', 219, 0, false], [']', ']', 221, 0, false], ['&#92;', '\\', 220, 0, false],
                                ['a', 'a', 65, 0, true], ['s', 's', 83, 0, false], ['d', 'd', 68, 0, false], ['f', 'f', 70, 0, false], ['g', 'g', 71, 0, false], ['h', 'h', 72, 0, false], ['j', 'j', 74, 0, false], 
                                ['k', 'k', 75, 0, false], ['l', 'l', 76, 0, false], [';', ';', 186, 0, false], ['&#39;', '\'', 222, 0, false], ['Enter', '13', 13, 3, false],
                                ['Shift', '16', 16, 2, true], ['z', 'z', 90, 0, false], ['x', 'x', 88, 0, false], ['c', 'c', 67, 0, false], ['v', 'v', 86, 0, false], ['b', 'b', 66, 0, false], ['n', 'n', 78, 0, false], 
                                ['m', 'm', 77, 0, false], [',', ',', 188, 0, false], ['.', '.', 190, 0, false], ['/', '/', 191, 0, false], ['Shift', '16', 16, 2, false],
                                ['Bksp', '8', 8, 3, true], ['Space', '32', 32, 12, false], ['Clear', '46', 46, 3, false], ['Cancel', '27', 27, 3, false]
                            ]
                        ]
                    ]
                }
                $('input.jQKeyboard').initKeypad({'keyboardLayout': keyboard});
            });
        </script>
    </head>
    <body>
   
    
    <p class="thanks">Thank you <?php echo $_SESSION['username'];?> for your purchase!</p>
    <p class="please">Please fill up the following information</p>
    <div class="container" style="margin-top:80px;">
 
            <form method="post" action="paypalrecord.php">
            <div class="container con">
                <label>FullName</label>
                <input  type = "text" id="testvirtual" class = "jQKeyboard form-control" name="clientname" placeholder="" value="<?php echo $clientname; ?>">
           
       
         <form>
                <label>Contact.no</label>
                <input  type = "text" id="testvirtual" class = "jQKeyboard form-control" name="contact" placeholder="" value="<?php echo $contact; ?>"/>
            </form>
          
                <label>Address</label>
                <input  type = "text" id="testvirtual" class = "jQKeyboard form-control" name="Address" placeholder="" value="<?php echo $Address; ?>"/>
          

                <label></label>
                <input  type = "hidden" id="testvirtual" class = "jQKeyboard form-control" name="items" placeholder="" value=" <?php
foreach ($_SESSION["shopping_cart"] as $product){


    echo $product["pname"]; 
} ?>">
                
                
        
     

        
    
            <button href="home1.php" type="submit" class="registerbtn" value="confirm" name="reg_user">Confirm</button>
        </div>

    
    </div>
  </div>
    </body>
</html>
