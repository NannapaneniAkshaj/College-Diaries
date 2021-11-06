<?php

    session_start();
    if(!isset($_SESSION["username"])){
      header("location: login.php");
        # code...
      }


?>      

    


<html lang="en">
  <head>

    <script type="text/javascript">
      window.history.forward();
    </script>



  	
  	<style type="text/css">
	body,html {
		/* to make an image of coversize, we need to make the body and html also 100%*/
				  height: 100%;
				}
            .navbar{
                        background-color: rgb(0,0,0);
                         background-color: rgba(0,0,0,0.5); /* Black w/opacity/see-through */
          color: white;
            }
            .logout:hover{
              cursor: pointer;
              box-shadow: 0 0 10px 0 white;
              box-shadow: 0px 5px 10px 0 white;
              border-radius: 50px;
              text-align: center;    


            }

		.crossfade{
			background-image: url("sub4.png");
          
          /* Add the blur effect */
          filter: blur(0px);
          -webkit-filter: blur(0px);
          
          /* Full height */
          height: 100%; 
          
          /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          scroll-behavior: none;
          overflow: hidden;
      }
  		.navbar-nav:hover .nav-link{
  
  			display: block;
  		}
  		.nav-link:hover{
  			box-shadow: 0px 5px 10px 0 white;
        	border-radius: 50px;
        	text-align: center;
  		}
  		.noti {
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.6); /* Black w/opacity/see-through */
          color: white;
          
          position: absolute;   /* TO place the text above the image of the cover size */
          top: 55%;
          left: 15%;
          transform: translate(-50%, -50%);
          font-size: 20px;
          width: 25%;
          height: 550px;
          padding: 5px;
          text-align: center;
          font-family: MV Boli;
          font-size: 18px;
      }

      .bg-text{
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.6); /* Black w/opacity/see-through */
          color: white;
          
          position: absolute;   /* TO place the text above the image of the cover size */
          top: 50%;
          left: 210%;
          transform: translate(-50%, -50%);
          font-size: 40px;
          width: 200%;

          padding: 5px;
          text-align: center;
          font-family: MV Boli;

      }
      .lis:hover {
        color: lightblue;
      }
			.login{
				opacity: 0.8;
				background-color: rgb(0,0,0);
				background-color: rgba(0,0,0,0.7);
				margin-left: 4px;
				border: 110px;
				position: absolute;
				border-color: black;
				top: 105px;
				left: 20px;
				color: black;
				border-radius: 4px;
				font-size: 15px;
				padding: 10px;
				color: white;
				font-family: Ink Free;
				font-weight: bold;


			}    
      .login:hover{
        cursor: pointer;
        box-shadow: 5px 5px 10px 0 white;
      }
         
		.sub:hover{
			box-shadow: 0 0 15px 0 white;
			cursor: pointer;
		}

  		
  	</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>READ</title>
    <meta http-equiv="refresh" content="900;url=logout.php" />
  </head>
  <body >
      	
  
    <nav>
    	<nav class="navbar navbar-expand-sm fixed-top navbar-dark ">        <!-- BAR COLOR SCHEME AND STARTING -->
    		<a href="https://sail.co.in/" target="_blank" class="navbar-brand" style="color: white;">
    			<img src="Capture.png" width="40" height="40">
    		Steel Authority Of India Ltd.</a>
    		<a href="main.php" class="navbar-brand">
    			<img src="new.png" width="75" height="40" style="margin-left: 10px;">
    		</a>


    		<!-- COLLAPSE ICON AND ALL -->
    		
    		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
    			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="menu">
	    		<ul class="navbar-nav" style="margin-left: 80px;">   <!-- THE ITEMS ON THE BAR -->
	    			
    		<div>
    			<ul class="navbar-nav"><li class="nav-item dropdown">
    				<a href="#" class="nav-link dropdown" data-toggle="dropdown" style="margin-left: 900px;color: white"><?php echo $_SESSION['username']; ?></a>
    				<div class="dropdown-menu" style="background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.5); margin-top: 13px;margin-left: 850px;">
    					<a href="profilev.php" class="nav-link">Profile</a>
    					<a href="#" class="nav-link">Settings</a>
  

    					<form action="logout.php" method="post"><input type="submit" value="Logout" class="logout" name="logout" style="border-radius: 10px;margin-top: 10px;margin-left: 30px; background-color: white;color: black;width: 100px;opacity: 0.9;"></form>

    				</div>
    			</li></ul>
    		</div>
      </ul>
    </nav>
    <div class="crossfade"></div>    
    <div class="login" style="width: 18rem;">
      <img class="card-img-top" src="Capture.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary" style="margin-left: 40px;">Go somewhere</a>
      </div>
    </div> 
    <div class="login" style="width: 18rem;margin-left: 400px;">
      <img class="card-img-top" src="Capture.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary" style="margin-left: 40px;">Go somewhere</a>
      </div>
    </div> 
    <div class="login" style="width: 18rem;margin-left: 800px;">
      <img class="card-img-top" src="Capture.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary" style="margin-left: 40px;">Go somewhere</a>
      </div>
    </div>
    <div class="login" style="width: 18rem;margin-left: 1200px;">
      <img class="card-img-top" src="Capture.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary" style="margin-left: 40px;">Go somewhere</a>
      </div>
    </div>   
    <div class="login" style="width: 18rem;margin-left: 5px;margin-top: 400px">
      <img class="card-img-top" src="Capture.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary" style="margin-left: 40px;">Go somewhere</a>
      </div>
    </div>    
    <div class="login" style="width: 18rem;margin-left: 400px;margin-top: 400px">
      <img class="card-img-top" src="Capture.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary" style="margin-left: 40px;">Go somewhere</a>
      </div>
    </div>     
  </div>





    





	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>




