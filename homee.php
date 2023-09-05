<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="bootstrap\css\bootstrap.css">
<script src="js\bootstrap.js"></script> 
<link rel="stylesheet" href="header.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<meta name="viewpoint" content="width=device-width,initial-scale=1">
<style>

   
            h1{
                font-family:Garamond;
                font-weight: bold;
                text-align: center;
            }
            p{
                font-family:Garamond;
                font-size: 17pt;
               
               
            }
            #con{
              background-color: #115c3e;
              color: aliceblue;
              
            }
          
            h2{
                font-family:Garamond;
                font-weight: bold;
                color: black;
                font-size:40pt;
                background-color: rgb(158, 220, 154);
                
            }
            #b{
              font-weight: bolder;
            }
</style>
<script>
   function change()
    {
      document.getElementById("h1").style="color:green;" ;
    }
    function image()
    {
      document.getElementById("i").src="res.jpg";
    }
  </script>
</head>
<body>
  <h1 id="h" class=display-6 >Alex G.</h1>
<nav >

    
      
      <li><a href="homee.php">Home</a></li>
      <li><a href="login.php">Log in</a></li>
	  <li><a href="contact.php">Contact Us</a></li>
      <li><a href="about_us.php">About Us</a></li>
      <li><a href="order.php">Order Now</a></li>
	  <li><a href="menu.php">Menus</a></li>
    
	</nav>
<div class="container">
  <div class="row">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-interval="500" style="margin-top:-100px; " >
    <div class="carousel-inner" style="height:500px; width:100%">
      <div class="carousel-item active">
        <img src="image1.jpg" style="display: block;margin-left: auto;margin-right: auto;width: 100%;" class="d-block w-100" alt="Image Not Found :/" id="slide">
        <div class="carousel-caption d-none d-md-block">
          <h2>WElCOME</h2>
          <p id="b">Welcome to the modern Italian restaurant in the center of the city</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="image2.jpg" style="display: block;margin-left: auto;margin-right: auto;width: 100%;" class="d-block w-100"  alt="Image Not Found :/" id="slide">
        <div class="carousel-caption d-none d-md-block">
          <h2>EAT</h2>
          <p id="b">This is simply a heaven for food lovers.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="image3.jpg" style="display: block;margin-left: auto;margin-right: auto;width: 100%; "class="d-block w-100"  alt="Image Not Found :/" id="slide">
        <div class="carousel-caption d-none d-md-block">
          <h2>DRINK</h2>
          <p id="b">Get spoiled for choice.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="image4.jpg" style="display: block;margin-left: auto;margin-right: auto;width: 100%;" class="d-block w-100" alt="Image Not Found :/" id="slide">
        <div class="carousel-caption d-none d-md-block">
          <h2>VISIT</h2>
          <p id="b">The great times you can have with great food.</p>
        </div>
      </div>
    </div>
  </div>
  </div>
<br><br>

  <div class="row">
    <div class="col">
      <br><br><br>
      <h1 id="h1" onmouseover="change()">Welcome to Alex G.</h1>
      <p  >We would like to take this opportunity to welcome you to our restaurant. 
        We guarantee you the freshest food, delivered daily to our dock, prepared to your liking. We can prepare a specific meal by request. All our locations are providing a wonderful open-air venue to enjoy the meal all year round,
         we offer both indoor and alfresco dining and our focus is on serving.</p>  <br><br>
         <img src="people.jpg" style="height:400px">
    </div>
    <div class="col text-center" >
      <img src="img.jpg" id="i" onclick="image()" style="width:600px height=900px">
      <center><div id="con" style="width:370px" >
        <h5 style="padding-top:10px;">Contacts</h5>
          <p style="font-size:16px;">218 Beach Road, Matara</p>
          <p style="font-size:16px;">alexG.gmail.com</p>
          <p style="font-size:16px; padding-bottom:10px;">+94 000 234 479</p>
      </div> </center>
    </div>
  </div>
  </div>

<br><br>
<div class="footer" >
  <iframe src="footer.php" style="width:100% ;height:410px;"></iframe>
</div>
</body>

</html>