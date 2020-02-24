
<?php
session_start();?>
<?php
include('server.php') ?>
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

input{
	width:250px;

}
h3{
	position:absolute;
	left:5%;
	top:1%;
}
.reg{
	padding-top:4%;
	width:300px;
	position:absolute;
	left:37%;
	top:18%;
}
.btn{
	background-color:#138FE9;
    color:white;
	margin-top:20px;
	margin-bottom:15px;
}
.not{
	padding-left:5%;
}
@media (max-width: 576px) {
	input{
	width:250px;

}
h3{
	position:absolute;
	left:5%;
	top:1%;
}
.reg{
	padding-top:18%;
	width:300px;
	position:absolute;
	left:13%;
	top:18%;
}
.btn{
	background-color:#138FE9;
    color:white;
	margin-top:20px;
	margin-bottom:15px;
}
.not{
	padding-left:5%;
}
}
@media (min-width: 768px) {

	h3{
	position:absolute;
	left:5%;
	top:1%;
}
.reg{
	padding-top:5%;
	width:300px;
	position:absolute;
	left:30%;
	top:18%;
}
.btn{
	background-color:#138FE9;
    color:white;
	margin-top:20px;
	margin-bottom:15px;
}
.not{
	padding-left:5%;
}


}
@media (min-width: 1026px) {
	input{
	width:250px;

}
h3{
	position:absolute;
	left:5%;
	top:1%;
}
.reg{
	padding-top:4%;
	width:300px;
	position:absolute;
	left:37%;
	top:18%;
}
.btn{
	background-color:#138FE9;
    color:white;
	margin-top:20px;
	margin-bottom:15px;
}
.not{
	padding-left:5%;
}
}

	</style>
<body>


	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>
	

		<div class="reg">
		<h3>Login</h3>
		<div class="container">
			<label>Username</label><br>
			<input type="text" name="username" >
		</div>
		<div class="container">
			<label>Password</label><br>
			<input type="password" name="password">
		</div>
		<div class="container">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p class="not">
			Dont have an account? <a href="register.php">Sign up</a>
		</p>
	</form>
	</div>

	

</body>
</html>