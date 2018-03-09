
<!DOCTYPE html>
     <html>

     <head>
     	<title>Employee Logged In</title>
          <?php include "headerFiles.php"; ?>
     </head>

 <body>
     
<div>
     <div class="rows" >
        <?php 
              session_start(); 
              include "navpillsemp.php";
         ?>
         <div class="col-md-9" >
          	<div>
                  <?php 
                     include "profile_card.php";
                    ?>  
             </div>

         </div>
     </div>
</div>

     <!--  <div id="footer"></div>

      <script src="../Assets/js/add_file.js"></script> -->
     </body>
     </html>