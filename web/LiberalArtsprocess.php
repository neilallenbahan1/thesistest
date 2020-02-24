
<?php


$mysqli = new mysqli('db5000304463.hosting-data.io', 'dbu529749', 'Cnabooks@17', 'dbs297356')or die (mysqli_error($mysqli));
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
    
    $mysqli->query("INSERT INTO la(pname, pcode, price, image) VALUES('$pname', '$pcode', '$price', '$image')") or die ($mysqli->error);

    header("location: LiberalArtscrud.php");
   
    
}

if(isset($_GET ['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM la WHERE id= $id") or die ($mysqli->error());

    header("location: LiberalArtscrud.php");
    
} 

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM la WHERE id =$id") or die($mysqli->error());
   
    if (array($result) !==null) {
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

     $mysqli->query(" UPDATE la SET pname='$pname', pcode='$pcode', price='$price', image='$image' WHERE id =$id") or die ($mysqli->error) ;

     header("location: LiberalArtscrud.php");
     ob_end_flush();
}

?>

