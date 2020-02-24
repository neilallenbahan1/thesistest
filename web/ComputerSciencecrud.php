<?php
    ob_start();
?>
<?php include('adminloginserver.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
	<title>Login</title>
<style>
.from1{
    width:30%;
    padding-left:7%;
    padding-top:4%;
    

}
.table{
    width:50%;
    margin-left:30%;
    margin-top:3%;
    position:absolute;
}
.dr{
    padding-top:3%;
    padding-left:7%;    
}
nav{
        
         background-image: url("adminbody.png");
        -webkit-box-shadow: 1px -1px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 1px -1px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 1px -1px 3px 0px rgba(0,0,0,0.75);
        height:70px;
        margin-bottom:12px;
        }
.category{
        color:#AAAAAA;
        text-decoration:none;
        padding-left:10px;
        padding-right:10px;
        font-size:22px;
}
.elemen{
        font-weight:500;
        FONT-SIZE:25PX;
        color:white;
}

</style>	




<body>
<nav class="navbar navbar-expand-lg navbar-custom z-depth-half sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="fas fa-book-open"></i>
         </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                     <div class="collapse navbar-collapse" id="navbarSupportedContent">

                       <ul class="navbar-nav mr-auto">
                         <li class="nav-item">
                            <a href="#" class="nav-link title_logo"><img src="ADMIN.png" /></a>
                         </li>
                       </ul>
                     
                       <ul class="nav navbar-nav">
      <li ><a class="category " href="admin.php">Elementary</a></li>
      <li class="nav-item" style="border-right: 0.1rem solid lightgrey">
            
            </li>
      <li ><a class="category" href="adminhighschool.php">Junior&SeniorHigh</a></li>
      <li class="nav-item" style="border-right: 0.1rem solid lightgrey">
            
            </li>
      <li ><a class="category elemen" href="admincollege.php">College</a></li>
    
    </ul>

                                        
                       
                    </div>
    </div>
  </nav>
<div class="dropdown show dr">
  <a class="btn btn-secondary dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  ComputerScience
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
 
    <a class="dropdown-item" href="admincollege.php">   Business&Accountancy</a>
    <a class="dropdown-item" href="CustomsAdministrationcrud.php">CustomsAdministration</a>
    <a class="dropdown-item" href="HospitalityManagementcrud.php">HospitalityManagemen</a>
    <a class="dropdown-item" href="CriminialJusticecrud.php">CriminialJustice</a>
    <a class="dropdown-item" href="LiberalArtscrud.php">LiberalArts</a>
    <a class="dropdown-item" href="Engineeringcrud.php">Engineering</a>
    <a class="dropdown-item" href="TeacherEducationcrud.php">TeacherEducation</a>
  </div>
</div>

<?php require_once 'ComputerScienceprocess.php'; ?>


    <?php  
        if(isset($_SESSION['message'])):?>

            <div class = "alert alert-<?=$_SESSION['msg_type']?>">

            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
            </div>
            <?php endif?>
            <?php

?>
    <div class = "container list"> 
    <?php
    $mysqli = new mysqli('db5000304463.hosting-data.io', 'dbu529749', 'Cnabooks@17', 'dbs297356') or die (mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM cs") or die ($mysqli->error);
    //pre_r($result);
  
    
    function pre_r($array){
        echo'<pre>';
        print_r($array);
        echo '</pre>';
    }
    ?>

    <div class ="row-justify-content-center"> 
            <table class ="table">
                  <thead>
                       <tr>
                           <th>Booktitle</th>         
                           <th>BookCode</th> 
                           <th>Price</th>
                           <th>Image</th>
                           <th colspan ="2">Action</th>  
                          
                       </tr>
                  </thead>
    <?php
            while($row=$result->fetch_assoc()): ?>
            <tr>
               <td> <?php echo $row['pname']; ?></td>
               <td> <?php echo $row['pcode']; ?></td>
               <td> <?php echo $row['price']; ?></td>
               <td> <?php echo $row['image']; ?></td>
               <td>
                    <a class="edit" href = "ComputerSciencecrud.php?edit=<?php echo $row['id']?>"
                            class = "btn- btn-info"><img src="crudedit.png" /></a>
                    <a class="delete"  href = "ComputerSciencecrud.php?delete=<?php echo $row['id']?>"
                            class = "btn- btn-danger"><img src="cruddelete.png" /></a>       
                        
               </td>
            </tr>
                 <?php endwhile; ?>                       

            </table>                               
        </div>
        </div>
   
    <form class="from1"action ="ComputerSciencecrud.php" method ="POST">  
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