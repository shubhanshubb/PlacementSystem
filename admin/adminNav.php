<?php 

session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin']===true){
    
}else{
    header('location: ../admin.php');
}
?>

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
    <body>
    
        
        
        
        
    
     <div class="row" style="width: 100%;">
         <div class="col-md-12" >
        <div class="row" style=" background: linear-gradient(to left,white,orange);">
            <?php 
            include '../connect.php';
            $sql=" select * from collegeInfo where id = 1 ";
             $result = $conn->query($sql);
             $name="YOUR COLLEGE NAME HERE";
             $Society="College Society here";
             $reBy = "Recognised by VTU";
             $imgName = "hkbk-logo.png";
             
    if(mysqli_num_rows($result)>0){
        
        $row = $result->fetch_assoc();
    $name =$row['name'];
    $Society =$row['society'];
    $reBy =$row['reBy'];
    $imgName =$row['logoImgName'];
    
    
    }
            
            
            ?>
            
            
            
            <div class="col-md-2 col-md-offset-1">
                <img style= "display: inline; box-shadow: 0px 0px 10px #fff;" width="150" src="../images/<?php echo $imgName; ?>"/>
            </div>
            <div class="col-md-7" style=" text-align: center; color:black;">
                <h2><?php echo $Society; ?></h2>
                <h1><?php echo $name; ?></h1>
                <h3><?php echo $reBy; ?></h3>
            </div>
            
        </div>
    	
    </div> 
        </div>
    
    <nav class="navbar navbar-inverse" style=" border-radius: 0px;">
  
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <!--<ul class="nav navbar-nav">-->
    
      <li class="active"><a href="viewstudent.php">View Students</a>
       </li>
       <li><a href="adminAnouncement.php">Anouncements</a></li>
       <li><a href="collegeInfo.php">College Info</a></li>
       <li ><a href="../logout.php">Logout</a></li>
       
       </li>
      
    </ul>
  
</nav>
