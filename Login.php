<?php
session_start();
include 'Connection.php';
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
    <link rel="stylesheet" href="css1/animate.css">
    <link rel="stylesheet" href="css1/normalize.css">
    <link rel="stylesheet" href="css1/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css1/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>LOGIN FORM</h3>

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="#" name="form1" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" name="username" placeholder="username" title="Please enter you username" required="" value=""  id="username" class="form-control">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" name="password" title="Please enter your password" placeholder="******" required="" value="" id="password" class="form-control">

                            </div>

                            <button type="submit" name="login" class="btn btn-success btn-block loginbtn">Login</button>
                            <a class="btn btn-default btn-block" href="Register.php">Register</a>
                            <div ><a class="btn btn-success btn-block" href="admin/index.php">Admin login here</a></div>
                            <div class="alert alert-danger" id="failure" style="margin-top: 10px; display:none">
                                <strong>Does not Match! </strong> Invalid Username or Password
                            </div>
                        
                        </form>
                        
                    </div>
                </div>
            </div>
	</div>   
    </div>
<?php
 if(isset($_POST["login"]))
 {
        $count=0;
        $res= mysqli_query($link, "select * from registration where username='$_POST[username]' && password='$_POST[password]'");
        $count= mysqli_num_rows($res);
        
        if($count==0)
        {
            ?>
                 <script type="text/javascript">
                       document.getElementById("failure").style.display = "block";
                 </script>
            <?php
        }
        else
        {
            
            $_SESSION["username"]=$_POST["username"];
            ?>
         <script type="text/javascript">
             window.location="select_exam.php";
        </script>
         <?php
        }
        
    }
?>
</body>

</html>