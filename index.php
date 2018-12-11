<!DOCTYPE html>
<html lang="en">
   <?php include_once("repeatable/head.php"); ?>
   <body>
      <div class="container-fluid">
         
         <div class="row">
            <h1 class="col-xs-12 pageTitle">Home</h1>
            <!-- Left Panel -->
            <div class="center-text col-xs-10 col-xs-offset-1 col-md-offset-0 col-md-3">
               <h4><hr></h4>
               <a href='resume.php'>Resume</a>
               <br>
               <a href='contact.php'>Contact Information</a>
               <h4><hr></h4>
               <br><br>
            </div>
            <!-- middle column info -->
            <div class="col-xs-10 col-xs-offset-1 col-md-offset-0  col-md-6">
               <!-- Person face shot -->
               <div class="col-xs-6 col-sm-4 col-xl-3 col-xl-2">
                  <img id="personImage" src="images/Andrew.jpg" class="img-responsive img-circle">
               </div>
               <!-- About Section -->
               <p> 
                  My name is Andrew and I am a graduate student, looking for opportunities to grow my expertise in the data science and software development fields. I have multiple years of experience as a collegiate student-athlete and business professional, making me an efficient and effective leader. I pride myself as being a collaborative and open-minded worker and am a great addition to any team environment. I am confident in my passions for data science, software design, computer science and am looking forward to joining a team environment in the Cincinnati/Dayton area while pursuing my master’s degree in data analytics.
               </p>
               <p>
                  I graduated from The University of Findlay Suma Cum Laude with a Bachelor of Science degree in computer science and mathematics while being a four-year starter for the football team. I have a life-long love of sports and music and love to learn and discover new things. 
               </p>
                  Additionally, I provide freelance web design services and pride myself in creating simple and sleek websites which are designed to look great on any device. I am passionate about life and love to make new connections. Please take a minute to look around my website to learn a bit about me.  
               </p>
            </div>
            <!-- Right Pane -->
            <div class=" center-text col-xs-10 col-xs-offset-1 col-md-offset-0  col-md-3">
               <h4><hr></h4>
               <!-- Social Icons -->
               <a href="https://www.linkedin.com/in/andrew-alten" class="hb-xs-margin" target="_blank"><span class="hb hb-xs spin hb-linkedin"><i class="fa fa-linkedin-square"></i></span></a>
               <a href="https://www.facebook.com/andrew.alten" class="hb-xs-margin" target="_blank"><span class="hb hb-xs spin hb-facebook"><i class="fa fa-facebook"></i></span></a>
               <a href="https://twitter.com/AAlten74" class="hb-xs-margin" target="_blank"><span class="hb hb-xs spin hb-twitter"><i class="fa fa-twitter"></i></span></a>
               <!-- Phone -->
               <div style="white-space:nowrap;">
                  <!-- Phone Logo -->
                  <span class="glyphicon glyphicon-phone"></span>

                  <a href="tel:15138333889">(1) 513-833-3889</a>
                  
               </div>
               <br>
               <!-- Email -->
               <div style="white-space:nowrap;">
                  <span class="glyphicon glyphicon-envelope"></span>
                  <a href="mailto:altena@findlay.edu">altena@findlay.edu</a>
               </div>
               <h4><hr></h4>
            </div>
         </div>
      </div>
      <?php
         include_once("repeatable/footer.php");

         include_once("repeatable/scripts.php");
         ?>

         <!-- Highlight the proper nav tab -->
         <script>
            $('nav a:contains("Home")').parent().css('background-color','white');
            $('nav a:contains("Home")').css('color','rgb(51, 102, 153)');
         </script>
   </body>
</html>