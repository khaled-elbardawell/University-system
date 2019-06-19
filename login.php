<?php
include "db.php";
session_start();


if(isset($_SESSION['id_std']) ){
	header("Location: index.php");
}else{

if(isset($_POST['login'])){
$user=htmlspecialchars($_POST['user']);
$pass=htmlspecialchars(sha1($_POST['pass']));	
$sql="SELECT * FROM login WHERE username='$user' and password='$pass'";

// $sql = 'SELECT * FROM login WHERE username ="' + $user + '" AND password ="' + $pass + '"';

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if( ($user==$row['username']) && ($pass==$row['password']) ){
	$_SESSION['name']=$row['name'];
	$_SESSION['id_std']=$row['id'];
	$_SESSION['pass_std']=$_POST['pass'];
	$_SESSION['user']=$row['username'];
	$_SESSION['pass']=$row['password'];
	header("Location: index.php");
}
}
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login </title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>
<body class="image-body">
	  <div class="container">
	  	<form class="login-form" method="post">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input autofocus type="text" class="form-control" placeholder="Username" name="user" >
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" placeholder="Password" name="pass" >
        </div>
       
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>
      </div>
    </form>
	  </div>

</body>
</html>