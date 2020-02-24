
<?php 


// variable declaration
$clientname = "";
$Address    = "";
$contact    = "";
$items    = "";
$Adviser    = "";
$totalpaid ="";


$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('db5000304463.hosting-data.io', 'dbu529749', 'Cnabooks@17', 'dbs297356');

// REGISTER USER

if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $clientname = mysqli_real_escape_string($db, $_POST['clientname']);
    $Address = mysqli_real_escape_string($db, $_POST['Address']);
    $contact = mysqli_real_escape_string($db, $_POST['contact']);
    $items = mysqli_real_escape_string($db, $_POST['items']);
    $Adviser = mysqli_real_escape_string($db, $_POST['Adviser']);
    $totalpaid = mysqli_real_escape_string($db, $_POST['totalpaid']);  

    
   
    
  

    

    // register user if there are no errors in the form
    if (count($errors) == 0) {
    
        $query = "INSERT INTO paypalrecorddelivery (clientname, contact, Address, items, Adviser, totalpaid) 
                  VALUES('$clientname', '$contact', '$Address', '$items', '$Adviser', '$totalpaid')";
        mysqli_query($db, $query);

        $query = "SELECT * FROM paypalrecorddelivery (clientname, contact, Address, items, Adviser, totalpaid) 
                 VALUES('$clientname', '$contact', '$Address', '$items', '$Adviser', '$totalpaid')";       
         mysqli_query($db, $query);

        header('location: home.php');

    }
    

}





?>