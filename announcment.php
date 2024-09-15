<?php

session_start();
if(!isset($_SESSION['email'])){
    
    header('Location:studentmain.php');
}

?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Comapany list</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        
    </head>
    <center>
    
        
  
        <!--<h1 style="font-family:courier; color:#e05775">UBDTCE Placement Cell</h1>-->
          <?php
         include 'nav.php';
         ?>
    
  
</div>
    <body>
         <div>
             <form action="studentmain.php" method="get">
             <h1> Welcome <?php  echo $_SESSION['email']; ?></h1>
             </form>
         </div>
        
   

</body>
</center>

</html>

