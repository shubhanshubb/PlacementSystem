<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
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
    <?php
    include 'connect.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pass = hash('sha256', $pass);
    
    
    $sql="select * from student where email='$email' and password='$pass'";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result)>0){
        
        $row = $result->fetch_assoc();
        
        session_start();
        $_SESSION['email']= $email;
        
        $_SESSION['name']= $row['name'];
        $_SESSION['usn']= $row['usn'];
        $_SESSION['uid']= $row['id'];
        
        header('Location:studentmain.php');
    }else{
        ?>
        <script>
        alert('Invalid Credentials');
        window.open('login.php','self');
        </script>
        <?php
    }
    }
    ?>
    
    <body style="background-image: url('images/bg2.jpg');background-attachment: fixed;background-repeat: no-repeat;background-size: cover">
      <?php include 'nav.php'; ?>
        <div class="row">
                   
               <div class="col-md-4 col-md-offset-4">
            <center>
         <div class="jumbotron">
             
             <form action="login.php" method="post">
                 
              <div class="input-group">   
             <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
  </div>
                 
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
  </div>
            <div class="input-group">
            <button type="submit" id="submit" class="form-control" name="submit"> <i class="glyphicon glyphicon-plus"></i> Login</button>
            </div>       
            
            
        </form>
         </div>
               </div>
        </div>
        
   
</center>
</body>


</html>