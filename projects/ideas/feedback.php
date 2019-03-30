<?
    session_start();
    include("connection.php");
    include_once("analyticstracking.php");
    $query="SELECT ideas FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $feedback = $row['feedback'];
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
  		<div class="navbar-header pull-left">
  			<a class="navbar-brand"><span><img src="images/ide4slogo.png"/></span>IDE4S</a>
  		</div>
  		<div class="pull-right logout">
            <a href="index.php?logout=1"><input type="submit" name= "submit" class="btn btn-success" value="Log Out"></a>
        </div>
  	</div>	
  </div>	
<div class="container contentContainer" id="topContainer"> 
    <div class="col-md-6 col-md-offset-3" id="topRow">
        <div class="wrapper">
            <h1>Feedback</h1> 
            <p>What are your thoughts? How can we improve IDE4S to fit your needs?</p><br/>
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <div class="col-sm-12"> 
                  <textarea class="form-control" id="styledtextarea" rows="10" placeholder="Your feedback is saved automatically before you logout."><?php echo $feedback; ?></textarea>
                </div>
              </div>
<!--
              <div class="form-group"> 
                <div class="col-sm-12 margin-top">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
              </div>
-->
            </form>
        </div>
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
        $("textarea").keyup(function(){
            
            //Use ajax function in the future. Will give users options if internet goes down. 50:00
            $.post("updatefeedback.php", {feedback:$("textarea").val()} ); 
        });
        
    
    </script>
    
  </body>
</html>