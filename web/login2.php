<?php require_once 'authController.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel ="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class = "container ">
        <div class = "row">   
            <div class ="col-md-4 offset-md-4 form-div login">
                    <form action ="Index2.php" method ="POST">

                        <h3 class="text-center">Log in</h3>

                        <?php if(count($errors) > 0): ?>
                            <div class ="alert alert-danger">
                                <?php foreach ($errors as $error):?>
                                <li> <?php echo $error;?></li>
                                <?php endforeach;?>
                            </div>    
                                <?php endif;?>

                            <div class ="form-group">
                                <label for = "username">Username or Email</label>
                                <input type ="text" name = "username" class = "form-control form-control-lg">
                            </div>


                            <div class ="form-group">
                                <label for = "password">Password</label>
                                <input type ="password" name = "password" class = "form-control form-control-lg">
                            </div>

                            <div class ="form-group">
                                <button type="submit" name="login-btn" class = "btn btn-primary btn-block btn-lg">Login</button>
                            </div>
                            <p class ="text-center">Dont have an account yet? <a href ="signup.php">Sign Up</a> </p>
                    </form>

            </div>
        </div>
    </div>
</body>
</html>