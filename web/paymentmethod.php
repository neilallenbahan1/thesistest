<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>payment method</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<style>
body{
	background-color:#138FE9;
}
.select{
	color:white;
	text-align:center;
	font-size:30px;
	font-family:montserrat;
	font-weight:medium;
	padding-top:6%;

	
}
.pay{
	position:absolute;
	left:27%;
	top:40%;
}
.paydel{
	position:absolute;
	left:52%;
	top:40%;

}
.walk{
	color:white;
	position:absolute;
	left:31%;
	top:34%;	
	font-size:20px;
	font-weight:medium;
}
.del{
	color:white;
	position:absolute;
	left:56%;
	top:34%;	
	font-size:20px;
	font-weight:medium;
}
@media (max-width: 576px) {
	.select{
		color:white;
	position:absolute;
	left:14%;
	font-size:20px;
	font-family:montserrat;
	font-weight:medium;
	padding-top:30%;

	
}	
.pay{
	position:absolute;
	left:7%;
	top:40%;
	width:150px;
	height:150px;
}
.paydel{
	position:absolute;
	left:52%;
	top:40%;
	width:150px;
	height:150px;
}
.walk{
	color:white;
	color:white;
	position:absolute;
	left:13%;
	top:34%;	
	font-size:15px;
	font-weight:medium;
}
.del{
	color:white;
	color:white;
	position:absolute;
	left:56%;
	top:34%;	
	font-size:15px;
	font-weight:medium;
}
}
</style>
<body>

	<p class="select">Select your Payment Method:</p>
	<p class="walk">Walk-in payment</p>
	<p class="del">Delivery payment</p>
	<div class=" border-0">
	<a href ="paypalcheckout.php" ><img class="pay" src="paypal.png"  >	</a> 	
	<a href ="paypaldelcheckout.php" ><img class="paydel"src="paypaldel.png" >	</a>
	</div>

</body>
</html>