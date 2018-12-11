<!DOCTYPE html>
<html lang="en">

<?php include_once("repeatable/head.php"); ?>

<body>
   <div class="container-fluid">

      <div class="row" style=""> 

         <!-- <div class="col-xs-12">
            <img id="" src="images/about.jpg" class="img-responsive">
         </div> -->
         <h1 class="col-xs-12 pageTitle">About Me</h1>
         <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4 col-lg-2 col-lg-offset-5"> 
            <img src="images/graduation.jpg" class="img-responsive col">
         </div>
         
         <div class="col col-xs-10 col-xs-offset-1">
            <!-- First row with grad pic -->
            <div class="row">

               <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                  <p class="pageBody" style="text-align:center">I was born and raised in the Cincinnati area and went to Loveland City Schools. I come from a loving and supportive family including my parents, two older brothers, and fiancée. I attended Loveland High School where I involved myself in football, wrestling, and jazz band. It was during high school where I first developed a passion for programming and computer science. After much athletic success in high school, including state championship titles in football and wrestling, I received a scholarship from the University of Findlay to continue my technological, academic and athletic careers. Playing college football was one of the most rewarding experiences of my life. I gained essential life skills such as leadership, dedication, passion, and teamwork. I pursued majors in Computer Science and Mathematics and became involved with multiple internships. I can truly say that I enjoyed every part of my growth at the University of Findlay and have chosen to further my career by pursing my master's degree in data analytics. To learn more about my academic career please see my  <a href="resume.php" >resume</a>.
                  </p>
               </div>
               
               <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-3"> 
                  <img src="images/family.jpg" class="img-responsive col">
               </div>
               <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-0 col-lg-3 "> 
                  <img src="images/jakes.jpg" class="img-responsive col">
               </div>
               
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
            $('nav a:contains("About")').parent().css('background-color','white');
            $('nav a:contains("About")').css('color','rgb(51, 102, 153)');
         </script>
</body>
</html>