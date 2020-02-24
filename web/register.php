
<?php
session_start();?>
<?php include('server.php') ?>
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
	<title>Registration system PHP and MySQL</title>

</head>
<style>
input{
	width:250px;
	
}
.reg{
	
	width:300px;
	position:absolute;
	left:13%;
	top:12%;
}
.btn{
	background-color:#138FE9;
    color:white;
	margin-top:20px;
	margin-bottom:15px;
}
h3{
	padding-left:14px;

}
.already{
padding-left:20px;	
}
@media (max-width: 576px) {
	input{
	width:250px;
	
}
.reg{
	
	width:300px;
	position:absolute;
	left:13%;
	top:12%;
}
.btn{
	background-color:#138FE9;
    color:white;
	margin-top:20px;
	margin-bottom:15px;
}
h3{
	padding-left:14px;

}
.already{
padding-left:20px;	
}
}
@media (min-width: 768px) {
	.reg{
	
	width:300px;
	position:absolute;
	left:30%;
	top:12%;
}
}
@media (min-width: 1026px) {
	.reg{
	width:300px;
	position:absolute;
	left:38%;
	top:12%;
}
}
</style>
<body>
	
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

	<div class="reg ">
	<h3>Register</h3>
		<div class=" container">
			<label>Username</label> <br>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="container">
			<label>Password</label><br>
			<input type="password" name="password_1">
		</div>
		<div class="container">
			<label>Confirm password</label><br>
			<input type="password" name="password_2">
		</div>
		<div class="container">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p class="not">
			Already have an account? <a href="login.php">Sign in</a>
		</p>
	</form>
	</div>
</body>
</html>