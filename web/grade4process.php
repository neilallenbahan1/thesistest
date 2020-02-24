<?php


$mysqli = new mysqli('db5000304463.hosting-data.io', 'dbu529749', 'Cnabooks@17', 'dbs297356') or die (mysqli_error($mysqli));
$id = 0;
$update = false;
$pname = '';
$pcode = '';
$price = '';
$image = '';




if(isset($_POST['save'])){
    $pname = $_POST['pname'];
    $pcode = $_POST['pcode'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    
    $mysqli->query("INSERT INTO grade4(pname, pcode, price, image) VALUES('$pname', '$pcode', '$price', '$image')") or die ($mysqli->error);

    header("location: grade4crud.php");
}

if(isset($_GET ['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM grade4 WHERE id= $id") or die ($mysqli->error());

   
    header("location: grade4crud.php");
} 

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM grade4 WHERE id =$id") or die ($mysqli->error());
   
    if  (array($result) !==null){
        $row = $result->fetch_array();
        $pname = $row['pname'];
        $pcode = $row['pcode'];
        $price = $row['price'];
        $image = $row['image'];
    }
}

if (isset($_POST['update'])){
     $id = $_POST['id'];
     $pname = $_POST['pname'];
     $pcode = $_POST['pcode'];
     $price = $_POST['price'];
     $image = $_POST['image'];

     $mysqli->query(" UPDATE grade4 SET pname='$pname', pcode='$pcode', price='$price', image='$image' WHERE id =$id") or die ($mysqli->error) ;

     
    header("location: grade4crud.php");
    ob_end_flush();
}
?>









 