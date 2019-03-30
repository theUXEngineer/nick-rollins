<?php

    if ($_POST['submit']) {

        if (!$_POST['email']) {  
            $error.="<br/>Please enter your email address";
        }
        
        if ($_POST['email'] !="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        
            $error.="<br/>Please enter a valid email address";
        } 
        if ($error) {
        
        $result='<div class="alert alert-danger fade in result">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>There was an error: </strong>'.$error.'</div>';
        
        } else {
        
            if (mail("nickallenrollins@gmail.com", "Comment from website", 
            
            "Email: ".$_POST['email'])) {
            
                $result='<div class="alert alert-success fade in result">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Thank you! We\'ll be in touch with you soon!</div>';    
            
            } else {
            
                $result='<div class="alert alert-danger"><strong>Sorry, there was an error sending your message. Please try again later.</strong>'.$error.'</div>';
            
            }
            
        }
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SoloTee</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
    
    <style>
        #emailForm {
            border: 1px solid gray;
            border-radius: 3px;
            padding-top: 50px;
            padding-bottom: 50px;
            margin-top: 50px;
        }
        #result {
            padding: 50px 10px;
        }
    </style>
    
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SoloTee</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

    </style>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed" id="menuBar">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target= ".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><img id="logo" src="images/SoloTeeLogo.png" /></a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="#midContainer">More</a></li>
                    <li><a href="#bottomContainer">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container" id="topContainer">
        <div id="row">
            <div class="col-md-6">
                <?php echo $result ?>
                <h1 id="topH1">Only the Best Tee Designs</h1>
                <p class="lead">Vote for your favorite tshirt designs.<br/> Tshirts with more votes have lower prices.<br/><br/>Interested? Join our mailing list.</p> 
                <form method="post">
                    <div class="input-group">
                        <input name="email" type="email" class="form-control" id= "emailBox" placeholder="email" />
                    </div>
                        <input name="submit" type="submit" class="btn emailButton" /><br/><br/>
                </form>
            </div>
        </div>
    </div>
    <div class="container contentContainer" id="midContainer">
        <div class="row center" id="betterHeader">
            <h2>What makes us better?</h2>
        </div>
        <div class="row" id="innerMid">
            <div class="col-md-6">
                <img id="mockUp" src="images/SoloTee.jpg" />
            </div>
            <div class="col-md-6 moreInfo">
                <h1><span class="glyphicon glyphicon-heart"></span> Vote & Save</h1>
                <p>Vote for your favorite tshirt designs. As the popularity of a shirt increases, the price decreases.</p>       
                <h1><span class="glyphicon glyphicon-shopping-cart"></span> Super Deals</h1>
                <p> For 24 hours, our most popular tshirt design is locked in at a super low price.</p>
                <h1><span class="glyphicon glyphicon-usd"></span> Make Money</h1>
                <p>Submit your own designs and create your own store. Do you have what it takes to become the #1 seller?</p>
            </div>
        </div>
    </div>
    <div class="container" id="bottomContainer">
        <div class="row center">
            <div class="col-md-12 center">
                <h1 class="center">Coming Soon for Mobile and Desktop</h1>
                <p class="lead">Sign up to our mailing list to be the first to try it out. Sell tshirts for the first 30 days commission free!</p>
                <form method="post">
                    <div class="input-group centerForm">
                        <input name="email" type="email" class="form-control" id="emailBox" placeholder="email" />
                    </div>
                        <input name="submit" type="submit" class="btn emailButton btn-lg footerButton" />
                </form>
            </div>
        </div>
    </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script>
    $(".contentContainer").css("min-height", $(window).height());    
</script>
</body>
</html>