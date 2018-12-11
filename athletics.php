<!DOCTYPE html>
<html lang="en">

<?php include_once("repeatable/head.php"); ?>

<body>
   <div class="container-fluid">
      

      <div class="row" style=""> 

         <!-- <div class="col-xs-12">
            <img id="" src="images/about.jpg" class="img-responsive">
         </div> -->
         <h1 class="col-xs-12 pageTitle">Athletics</h1>
            <img src="images/afca.jpg" class="img-responsive col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4">
        
         
         <div class="col col-xs-10 col-xs-offset-1">
            <!-- First row with grad pic -->
            <div class="row">

               <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                  <p class="pageBody" style="text-align:center"> Accolades
                     <ul>
                        <li>2017 1st Team All-American (American Football Coaches Association)</li>
                        <li>2017 GMAC Offensive Lineman of the Year </li>
                        <li>2017 First Team All-GMAC Team</li>
                        <li>2017 Second team All-American by the D2CCA</li>
                        <li>2017 Second team All-American by the Associated Press</li>
                        <li>2017 First team All-Region by D2CCA</li>
                        <li>2017 Don Hansen's first Team All-Region</li>
                        <li>2016 First team All-GLIAC</li>
                        <li>2016 Don Hansen's Second Team All-Region</li>
                        <li>2014 - 2017: Four Year Member of University of Findlay Varsity Football Team</li>
                        <li>2014 Division I 285lb Ohio High School Wrestling State Champion (Loveland High School)</li>
                        <li>2013 Division II Ohio High School Football State Champion (Loveland High School)</li>
                        
                     </ul>
                  </p>
               </div>
               </div>
               <div class="row">
                  <img src="images/oline.jpg" class="img-responsive col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-3">

                  <img src="images/chaunce.jpg" class="img-responsive col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-0 col-lg-3">
               </div>
               
            


         </div>

      </div>  
   </div>

      <?php
      include_once("repeatable/footer.php");
      ?>


      <?php
      include_once("repeatable/scripts.php");
      ?>

      <!-- Highlight the proper nav tab -->
         <script>
            $('nav a:contains("Athletics")').parent().css('background-color','white');
            $('nav a:contains("Athletics")').css('color','rgb(51, 102, 153)');
         </script>
   </body>
   </html>