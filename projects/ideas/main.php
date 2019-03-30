<?
    session_start();
    include("connection.php");
    include_once("analyticstracking.php");
    $query="SELECT ideas FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $idea = $row['ideas'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IDE4S</title>
    
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
</head>
<body data-spy="scroll" data-target=".navbar-collapse">
  <div class="navbar navbar-inverse navbar-fixed-top">
  	<div class="container">
  		<div class="navbar-header pull-left">
  			<a class="navbar-brand"><span><img src="images/ide4slogo.png"/></span>IDE4S</a>
  		</div>
        <div class="collapse navbar-collapse">
 	 	 	 <div class="navbar-nav navbar-right">
 	 	 	 	 <a href="index.php?logout=1"><input type="submit" name= "submit" class="btn btn-success logout" value="Log Out"></a>
 	 	 	 </div>
 	 	 </div>
  	</div>	
  </div>
 <div class="container contentContainer" id="topContainer">  
     <div class="row">
  			<div class="col-md-10 col-md-offset-1" id="pageRow">
                <div class="feedback">
                    <a href="http://www.ide4s.com/feedback.php"><h4>Feedback?</h4></a>
                </div>
 			    <textarea class="form-control" id="styledtextarea" placeholder="Your ideas are saved automatically before you logout."><?php echo $idea; ?></textarea>
 			</div>
     </div>
</div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.js"></script>
    
    <script>
    
    
		$(".contentContainer").css("min-height",$(window).height());
        $("textarea").css("height",$(window).height()-150);
        $("textarea").keyup(function(){
            
            //Use ajax function in the future. Will give users options if internet goes down. 50:00
            $.post("updateideas.php", {ideas:$("textarea").val()} ); 
        });
        
    </script>
    
  </body>
</html>
