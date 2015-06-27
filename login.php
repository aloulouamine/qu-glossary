<!DOCTYPE html>
<?php
  include_once ('include/db.php');
  include_once ('model/User.class.php');
?>

<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap Login Form</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <img class="img-responsive center-block" align="center" src="images/qu_main_logo.png">
          <h1 class="text-center">Glossary</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block"  action="index.php" method="post">
            <div class="form-group">
              <input type="email" name="email" class="form-control input-lg" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control input-lg" placeholder="Password" required>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign in" />
              
            </div>
          </form>
          <?php
            if(isset($_POST['email'])&&isset($_POST['password'])){
              $user = new User($_POST['email'],$_POST['password']);
              if($user->login($conn)){
                session_start();
                $_SESSION['email']=$_POST['email'];
                header('Location: glossary.php');
              }
              else{
                ?>
                
                <div class="alert alert-danger" role="alert">
                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                  <span class="sr-only">Error:</span>
                  Enter a valid email address and password
                </div>
               
                <?php
              }
            }
          ?>
      </div>

      
          
      <div class="modal-footer">

          <div class="col-md-12">
         <span><a href="#">Need help?</a></span>  
		  </div>	
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>