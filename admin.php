


<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
      .divhover{
          
          box-shadow: 0px 0px 15px #003333;
          transition: all 0.5s ease-in-out;
          
      }
      
  </style>
        
    </head>
    
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
    <body style="background-image: url('images/bg4.jpg');background-attachment: fixed;background-repeat: no-repeat;background-size: cover">
    
        
        
        
        
    
   
           <?php include 'nav.php'; ?>
    
  <?php
    $result1 = "";
if(isset($_POST['email']) && isset($_POST['password']) ){
    $email=$_POST['email'];
     $pass=$_POST['password'];
   $sql = "select * from admin where email= '$email' and password = '$pass';";
    $sql=" select * from collegeInfo where id = 1 ";
             $result = $conn->query($sql);
             if(mysqli_num_rows($result)>0){
                 session_start();
        $_SESSION['admin']= true;
        header('Location: admin/viewstudent.php');
             }
             
   else{
        $result1 = "Invalid Credentials...Please try again.";
        
}}
    



?>
</div>
               <div class="row">
          <div class="col-md-4 col-md-offset-4">
    
        
    <center>
         
        <div id="adminPane"  style="background:linear-gradient(#ccffcc,003333,#003333,003333,#ccffcc)" class="jumbotron ">
             
             <h3>Admin Login</h3>
        <form action="admin.php" method="post">
            
            <div><?php echo $result1; ?></div>
            <div class="input-group" style="margin:15px">   
             <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
  </div>
                 
  <div class="input-group" style="margin:15px">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
  </div>
                  
            
            
            <input type="submit"value="Login">
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

