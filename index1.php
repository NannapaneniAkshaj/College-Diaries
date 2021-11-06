<html lang="en">
  <head>
    <title>Home College</title>
    <!-- Required meta tags -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <style type="text/css">
            .navbar{
                        background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.5); /* Black w/opacity/see-through */
          color: white;
          font-family: Ink Free;
            }

              .crossfade{
            
            /* The image used */
            
            background-image: url("sub4.png");
            /* Add the blur effect */
            filter: blur(0px);
            -webkit-filter: blur(1px);
            
            /* Full height */
            height: 100%; 
            
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            scroll-behavior: none;
            overflow: hidden;
            animation-name: example;
          	animation-duration: 8s;
          	animation-iteration-count: infinite;
      }

@import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');
*{
  margin: 0;
  padding: 0;
  list-style: none;
  text-decoration: none;
  box-sizing: border-box;
}
body{
  font-family: 'Montserrat', sans-serif;
  background: url(bg.jpeg);
  background-position: center;
  background-size: cover;
  height: 100vh;
}
nav{
  position: fixed;
  width: 70px;
  margin-top: 150px;
  transition: all 0.3s linear;
  box-shadow: 2px 2px 8px 0px rgba(0,0,0,.4);
}
nav li{
  height: 60px;
  position:relative;
}
nav li a{
  color: white;
  display: block;
  height: 100%;
  width: 100%;
  line-height: 60px;
  padding-left:25%;
  border-bottom: 1px solid rgba(0,0,0,.4);
  transition: all .3s linear;
}
nav li:nth-child(1) a{
  background: #4267B2;
}
nav li:nth-child(2) a{
  background: #1DA1F2;
}
nav li:nth-child(3) a{
  background: #E1306C;
}
nav li:nth-child(4) a{
  background: #2867B2;
}
nav li:nth-child(5) a{
  background: #333;
}
nav li:nth-child(6) a{
  background: #ff0000;
}
nav li a i{
  position:absolute;
  top: 17px;
  left: 20px;
  font-size: 27px;
}
ul li a span{
      @keyframes example {
        0%   {background-image: url("sub4.png");}
        20%  {background-image: url(sub2.png);}
        40%  {background-image: url(sub3.png);}
        60%  {background-image: url(sub5.png);}
        80%  {background-image: url(sub1.png);}
      }

      .nav-link:hover{
      	box-shadow: 3px 3px 10px 0 yellow;
      	border-radius: 30px;
        width: 100px;
      }


      .big-text {
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
          color: white;
          border: 3px solid;
          position: absolute;
          top: 55%;
          left: 50%;
          transform: translate(-50%, -50%);
          font-size: 100px;
          width: 70%;
          padding: 5px;
          text-align: center;
          box-shadow: 10px 10px 10px 0px black;
          font-family: Ink Free;
          font-weight: bold;

      }

			.write{
				 
				 position: absolute;
				 top: 90%;
				 left: 42%;
				 text-align: center;
				 opacity: 0.8;
		
			}
			.read{
				 position: absolute;
				 top: 90%;
				 left: 52%;
				 text-align: center;
				 opacity: 0.8;
		
			}
	</style>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
    <nav>
      <ul>
       <li><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
       <li><a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
       <li><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
       <li><a href="#"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a></li>
       <li><a href="#"><i class="fab fa-github"></i><span>Github</span></a></li>
       <li><a href="#"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
     </ul>
   </nav>
  	 <div class="crossfade"></div>  
     <div class="container-fluid">
        <nav>
          <nav class="navbar navbar-expand-xl fixed-top navbar-dark">
            <a href="index.php"class="navbar-brand" style="color: white">
              <img src="Capture.png" width="40" height="40"> College Diaries</a>


            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">



              <ul class="navbar-nav">
                <li class="">
                  <a href="#" class="" data-toggle="dropdown" style="color: white;margin-left: 1050px;">
                  </a>
                </li> 

                <li class="nav-item" style="color: white;margin-left: 50px;">
                  <a href="signup.php" class="nav-link" style="color: white;font-size: 25px;">Signup
                  </a>
                </li>

     
                <li class="nav-item">
                  <a href="login.php" class="nav-link" style="color: white;font-size: 25px;margin-left: 50px;">Signin</a>
                </li>
              </ul>
            </div>
          </nav>
        </nav>
      </div>



    
     <div class="big-text" >
        <h1 style="font-size:150px;text-decoration: none;padding: 1px;">College Diaries</h1>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


    
    