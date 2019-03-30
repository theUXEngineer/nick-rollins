<?php 
    include("login.php"); ?>
    include_once("analyticstracking.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Everybody has great ideas, but what do you do with those ideas after you think them up? IDE4S is an app that lets you jot down your ideas, keep them safe, and access them at any time, on any device. Try it out for free!">
    <title>IDE4S</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    
</head>
<body data-spy="scroll" data-target=".navbar-collapse">
  <div class="navbar navbar-inverse navbar-fixed-top">
  	<div class="container">
  		<div class="navbar-header">
  			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  			</button>
  			<a class="navbar-brand"><span><img src="images/ide4slogo.png"/></span>IDE4S</a>
  		</div>
  		<div class="collapse navbar-collapse">
  			<form class="navbar-form navbar-right" method="post"> 
  				<div class="form-group">
  					<input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>" />														   
  				</div>
  				<div class="form-group">
  					<input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />																	
  				</div>
  				<input type="submit" name= "submit" class="btn btn-success" value="Log In">
  			</form>
  		</div>
  	</div>	
  </div>
<div class="container contentContainer" id="topContainer"> 
    <div class="col-md-6 col-md-offset-3" id="topRow">
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <img class="media-object light" src="images/LightBulb.png" alt="lightbulb">
                </a>
            </div>
            <div class="media-body">
                <h1 class="media-heading">Got Ideas?</h1>
                <h4>Don't scribble them on a napkin.</h4>
                <p lead>We have a better solution. Keep your ideas safe and access them from any device whenever you want.</p>
                <br/>
            </div>
        </div>
            <?php
            if ($error) {
                echo '<div class="alert alert-danger center">'.addslashes($error).' 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                </div>';
            }
            if ($message) {
                echo '<div class="alert alert-success center">'.addslashes($message).'
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
                </div>';
            }
        ?>
        <form class="margintop" method="post">
            <div class="form-group">
                <label class="sr-only" for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="<? echo addslashes($_POST['name']); ?>" />
            </div>
            <div class="form-group">
                <label class="sr-only" for="email">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Email" value="<? echo addslashes($_POST['email']); ?>" />
            </div>
            <div class="form-group">
                <label class="sr-only" for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" value="<? echo addslashes($_POST['password']); ?>" />
            </div>
            <input type="submit" name="submit" value="Sign Up"class="btn btn-success btn-lg signup" />
        </form>
    </div>
</div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    
    <script>
    
		$(".contentContainer").css("min-height",$(window).height());
    
    </script>
    
  </body>
</html>