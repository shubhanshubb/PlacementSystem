
<?php 
    $msg = "";
    if(isset($_POST['submit'])){
        
                $date = $_POST['date'];
                $desc = $_POST['desc'];
                
                // Validation code here
                
                include '../connect.php';
                //Insert into db
                $sql = "insert into anouncement values(NULL,'$date','$desc');";
                
                if($conn->query($sql)==true){
                    
                    $msg = "Added New Anouncement.";
                    
                }else{
                    
                    $msg= "Failed to add new anouncement" ;
                }
                
    }


?>


<html>
    <head>
        <title>Anouncements</title>
         <style>
        table tr td{
            font-family:sans-serif;
            font-size:0.6cm;
            color: #7B1F06
        }
        input{
            font-family:sans-serif;
            font-size:0.6cm;
            color:#003333;
        }
        .size21{
            font-style: italic;
        }
    </style>
    </head>
   
    <body>
         <?php include 'adminNav.php'; 
       
         ?>
        
        
         <div class="row">
          <div class="col-md-4 col-md-offset-4">
    
        
    <center>
         
        <div id="adminPane"  style="background:linear-gradient(#ccffcc,003333,#003333,003333,#ccffcc)" class="jumbotron ">
             
             <h3>Add new Anouncement</h3>
        <form action="adminAnouncement.php" method="post">
            
            <div><?php echo $msg; ?></div>
            <div class="input-group" style="margin:15px">   
             <span class="input-group-addon">Date:<i class="glyphicon glyphicon-date"></i></span>
    <input id="email" type="date" class="form-control" name="date" placeholder="Date">
  </div>
                 
  <div class="input-group" style="margin:15px">
    <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
    <textarea id="password"  class="form-control" name="desc" placeholder="Anouncement"></textarea>
  </div>
                  
            
            
            <input name="submit" type="submit" value=" Add">
        </form>
             
         </div>
        <script>
       
        $("#adminPane").hover(function(){
             
             $(this).toggleClass("divhover");
             
         });
         
        </script>
        
        
        
    </center>  
                   </div>
               </div>
   
        
    </body>   
</html>

