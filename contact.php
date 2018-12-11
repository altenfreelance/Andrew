<!DOCTYPE html>
<html lang="en">

<?php include_once("repeatable/head.php"); ?>

<body>      
   <div class="container">
      <div class="row row-centered ">
         <h1 class="col-xs-10 col-centered pageTitle">Contact</h1>

         <div class="col-centered col-xs-6 col-sm-4 col-lg-3">      
            <img id="personImage" src="images/Andrew.jpg" class="img-responsive img-circle col">
         </div>
      </div>
      <div class="row row-centered ">
         <p class="col-xs-10 col-sm-8 col-md-6 col-lg-5 col-centered">Please don't heisitate to reach out to me any time of day. You can text, call, email or contact me via social media.</p>
      </div>

      <div class="row row-centered">
         <div class=" col-centered center-text col-xs-10 col-xs-offset-1 col-md-offset-0  col-md-3">
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
         </div>
      </div>


   </div> <!-- End container -->
   <?php
   include_once("repeatable/footer.php");
   ?>


   <?php
   include_once("repeatable/scripts.php");
   ?>
   <!-- Highlight the proper nav tab -->
         <script>
            $('nav a:contains("Contact")').parent().css('background-color','white');
            $('nav a:contains("Contact")').css('color','rgb(51, 102, 153)');
         </script>
</body>
</html>