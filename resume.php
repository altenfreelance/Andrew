<!DOCTYPE html>
<html lang="en">

<?php include_once("repeatable/head.php"); ?>

<body>
   <div class="container">

      <div class="row row-centered"> 
         <h1 class="col-xs-10 col-centered pageTitle">Resume</h1>

         <?php

         if(!preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]))
         {
            echo "<object class=\"col-xs-12\" data=\"documents/Andrew Alten's Resume.pdf\" type=\"application/pdf\" style=\"overflow:hidden;height:800px; width:100%\"><p></p>
            </object>";


         }
         ?>
      </div>
      <div class="row row-centered"> 
         <a class="btn btn-success col-centered" href="documents/Andrew Alten's Resume.pdf" target="_blank">Click Here to Download
         </a>
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
            $('nav a:contains("Resume")').parent().css('background-color','white');
            $('nav a:contains("Resume")').css('color','rgb(51, 102, 153)');
         </script>
</body>
</html>