<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database ="attend";
    
    $con = mysqli_connect($server, $username, $password,$database);
    
    if(!$con){
       die("Connection failed due to:".mysqli_connect_error());
    }
      session_start();
      $ID = $_SESSION['username'];
      $sql ="UPDATE details SET Attendance ='PRESENT' where RegistrationID ='$ID';";
      $res =mysqli_query($con,$sql);
      
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet" href="C:\xampp\htdocs\php12\style.css">
    <link rel="stylesheet" href="style.css" />
    <title></title>
    <style>
      #Rocket{
          position:relative;
          height:30vh;
          width: auto;
          left:228px;
          bottom:726px;
          animation-name:neecheseupar;
          animation-duration:2.5s;
      }
      @keyframes neecheseupar
      {
          from{
          bottom:120px;
          }
          to{
            bottom:726px;
          }
      }
      </style>
  </head>
  <body>
    <header class="showcase">
      <div class="showcase-top">
        <img src="hellostu.png" id ="attendphoto">
        
       
        
        <a style="opacity: .25; color: orange;">Sucessfully logged in</a>
        
      </div>
      <div class="showcase-content">
        <h1>MIT BENGALURU STUDENT ATTENDENCE PORTAL</h1>
      
       

        
          <p>PRESENT MARKED<i class="fa-3x"></i
        ></p>
        <img src ="Rocket-removebg-preview.png" id ="Rocket">
      </div>
    </header>

    <section class="tabs">
      <div class="container">
        <div id="tab-1" class="tab-item btn-rounded">
          <i class="fas fa-door-open fa-3x"></i>
          <p class="hide">Portal Guide</p>
        </div>
        <div id="tab-2" class="tab-item">
          <i class="fas fa-tablet-alt fa-3x"></i>
          <p class="hide-sm">About</p>
        </div>
        
    </section>

    <section class="tab-content">
      <div class="container">
        
        <div id="tab-1-content" class="tab-content-item show">
          <div class="tab-1-content-inner">
            <div>
              <p class="text-lg">
                <p></p>
                Step 1 – Go to the Manipal Institiute of Technology,Bengaluru official Student Attendence Portal. Now click on "Login".
                <p></p>
                Step 2 – Simply login with your login details or click on "Click here for new registration" if you are not registered on the portal. Once you fill the details and click on Submit, a "Registered Sucessfully" text will appear
               <p></p>
               Step 3 –Once you are done, go back on the login page and fill in your details then click on "Submit"
                <p></p>
                Step 4 – You will now return to the home page with a "Sucessfully logged in" text at the top right part of your screen.
                <p></p>
                Step 5 – Now hover and click on "Mark Your Attendence Here" and you will be marked present in the data base
              </p>
             
            </div>
          
          </div>
        </div>

        
        <div id="tab-2-content" class="tab-content-item">
          <div class="tab-2-content-top">
           
            <a href="https://manipal.edu/mu/campuses/mahe-bengaluru.html" class="btn btn-lg">MAHE official webpage</a>
            <a href="https://www.linkedin.com/in/mit-bengaluru-089168224/?originalSubdomain=in" class="btn btn-lg">MIT BANGALORE linkedin</a>
          </div>
          <div class="tab-2-content-bottom">
            <div>
              <img src="mahe1.png" alt="" />
             
            </div>

            <div>
              <img src="mahe2.png" alt="" />
              
            </div>

            <div>
              <img src="mahe3.png" alt="" />
             
            </div>
          </div>
        </div>

        
       
    </section>
    <footer class="footer">
       
        <div class="footer-cols">
       
          <ul>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Terms Of Use</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">By Yashvardhan</a></li>
          </ul>
          <ul>
            </footer>

   
    <script src="node.js"></script>
    <!-- INSERT INTO `attend` (`Registration number`, `Password`) VALUES (NULL, '215891046'), (NULL, 'HeeHawwww123'); -->
  </body>
</html>