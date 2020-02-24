
<?php 


// variable declaration
$clientname = "";
$Address    = "";
$contact    = "";
$items    = "";

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
    
   
    
  

    

    // register user if there are no errors in the form
    if (count($errors) == 0) {
    
        $query = "INSERT INTO paypalrecord (clientname, contact, Address, items) 
                  VALUES('$clientname', '$contact', '$Address', '$items')";
        mysqli_query($db, $query);

        $query = "SELECT * FROM paypalrecord (clientname, contact, Address, items) 
               VALUES('$clientname', '$contact', '$Address', '$items')";
        mysqli_query($db, $query);

        header('location: home.php');

    }
    

}





?>