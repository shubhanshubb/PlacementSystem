<?php

session_start();
if(!isset($_SESSION['email'])){
    
    header('Location:login.php');
}
include 'connect.php';

$usn = $name = $_10th = $_12th = $dip = $cgpa =$sem1 =$sem2 =$sem3 =$sem4 =$sem5 =$sem6 =$_10thyear =$_10thschool =$_10thboard =$pu_dip_clg =$pu_dip_board = $cet_rank = "";
$info = "";
$email = $_SESSION['email'];

if(isset($_POST['submit'])){
    
        $email = $_POST['email'];
        $usn =$_POST['usn'];
        $name = $_POST['name'];
        $_10th = $_POST['10th'];
        $_12th = $_POST['12th'];
        $dip =$_POST['Dip'];
        $cgpa =$_POST['CGPA'];
        $sem1 =$_POST['sem1'];
        $sem2 =$_POST['sem2'];
        $sem3 =$_POST['sem3'];
        $sem4 =$_POST['sem4'];
        $sem5 =$_POST['sem5'];
        $sem6 =$_POST['sem6'];
        $_10thyear =$_POST['10th_year_passing'];
        $_10thschool =$_POST['10th_school_name'];
        $_10thboard =$_POST['10th_board'];
        $pu_dip_clg =$_POST['pu_dip_clg_name'];
        $pu_dip_board = $_POST['pu_dip_board'];
        $cet_rank = $_POST['cet_rank'];
    
    $sql = "UPDATE `student` SET `name` = '$name', `email` = '$email', `usn` = '$usn',  `10th` = '$_10th', `12th` = '$_12th', `Dip` = '$dip', `CGPA` = '$cgpa', `sem1` = '$sem1', `sem2` = '$sem2', `sem3` = '$sem3', `sem4` = '$sem4', `sem5` = '$sem5', `sem6` = '$sem6', `10th_year_passing` = '$_10thyear', `10th_school_name` = '$_10thschool', `10th_board` = '$_10thboard', `pu_dip_clg_name` = '$pu_dip_clg', `pu_dip_board` = '$pu_dip_board', `cet_rank` = '$cet_rank' WHERE `student`.`id` =".$_SESSION['uid'];
    if($conn->query($sql)==true){
        $info = "Records updated successfully";
    }else{
        
        $info = "Failed to update records";
        
    }
    
}





$sql="select * from student where email='$email'";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result)>0){
        
        $row = $result->fetch_assoc();
        $usn =$row['usn'];
        $name = $row['name'];
        $_10th = $row['10th'];
        $_12th = $row['12th'];
        $dip = $row['Dip'];
        $cgpa =$row['CGPA'];
        $sem1 =$row['sem1'];
        $sem2 =$row['sem2'];
        $sem3 =$row['sem3'];
        $sem4 =$row['sem4'];
        $sem5 =$row['sem5'];
        $sem6 =$row['sem6'];
        $_10thyear =$row['10th_year_passing'];
        $_10thschool =$row['10th_school_name'];
        $_10thboard =$row['10th_board'];
        $pu_dip_clg =$row['pu_dip_clg_name'];
        $pu_dip_board = $row['pu_dip_board'];
        $cet_rank = $row['cet_rank'];

       
    }


?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>studentmain</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
      
      .inputgap{
          
          margin: 5px;
      }
      
  </style>
    </head>
    <center>
    
        <div class="row" style="width: 100%;">
         <div class="col-md-12" >
        <div class="row" style=" background: linear-gradient(to left,#fff 0.5%,#6a6a6a);">
            <?php 
            include 'connect.php';
            $sql=" select * from collegeInfo where id = 1 ";
             $result = $conn->query($sql);
             $name="YOUR COLLEGE NAME HERE";
             $Society="College Society here";
             $reBy = "Recognised by XYZ";
             $imgName = "tempLogo.png";
             
    if(mysqli_num_rows($result)>0){
        
        $row = $result->fetch_assoc();
    $name =$row['name'];
    $Society =$row['society'];
    $reBy =$row['reBy'];
    $imgName =$row['logoImgName'];
    
    
    }
            
            
            ?>
            
            
            
            <div class="col-md-2 col-md-offset-1">
                <img style= "display: inline; box-shadow: 0px 0px 10px #fff;" width="150" src="images/<?php echo $imgName; ?>"/>
            </div>
            <div class="col-md-7" style=" text-align: center; color:black;">
                <h2><?php echo $Society; ?></h2>
                <h1><?php echo $name; ?></h1>
                <h3><?php echo $reBy; ?></h3>
            </div>
            
        </div>
    	
    </div> 
        </div>
  
       
           <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    
    <ul class="nav navbar-nav navbar-right">
      <ul class="nav navbar-nav">
          <li class="active"><a href="announcment.php">Announcements</a></li>
      
      <li><a href="logout.php">Log out</a>
       </li>
      
      
    </ul>
  
</nav>
   </div>
    
  
</div>
    <body>
         <div>
             
             <h1> Welcome <?php  echo ucfirst($_SESSION['name']) ?></h1>
               
         </div>
        </center>
    <div class="row">
    
    
        <div class="col-md-8" style="padding:20px;margin-top: 10px;box-shadow:0px 0px 5px #003333"> 
            
            <center><h3>Anouncements</h3></center>
            <?php 
            $sql="select * from anouncement;";
                $result = $conn->query($sql);
            if(mysqli_num_rows($result)>0){
        
          while($row = $result->fetch_assoc()){
              ?>
            
            <div class="container" style="padding:20px;margin-top: 10px;box-shadow:0px 0px 5px #003333">
                
                <strong>Date:</strong> <?php echo $row['date'];?><br>
                <strong>Description:</strong> <?php echo $row['desc'];?>
                
            </div>
              
            <?php  
          }
            
          
            }
        ?>
            
            
        </div>
        <div class="col-md-4">
            <h3><?php echo $info; ?></h3>
            Update details:
            <form action="studentmain.php" method="post">
  <div class="input-group inputgap">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $email ?>">
  </div>
                
                
    <div class="input-group inputgap">
    <span class="input-group-addon">USN</span>
    <input id="usn" type="text" class="form-control" name="usn" placeholder="Usn" value="<?php echo $usn ?>">
  </div>             
   
    <div class="input-group inputgap">
    <span class="input-group-addon">Name</i></span>
    <input id="name" type="text" class="form-control" name="name" placeholder="name" value="<?php echo $name ?>">
  </div>
                
                
    <div class="input-group inputgap">
    <span class="input-group-addon">10%</span>
    <input id="ten percent" type="number" class="form-control" name="10th" placeholder="tenth percent" value="<?php echo $_10th; ?>">
  </div> 
                
     <div class="input-group inputgap">
    <span class="input-group-addon">12%</span>
    <input id="twelve percent" type="number" class="form-control" name="12th" placeholder="twelve percent" value="<?php echo $_12th; ?>">
  </div> 
               
    <div class="input-group inputgap">
    <span class="input-group-addon">Dip%</span>
    <input id="dip percentage" type="number" class="form-control" name="Dip" placeholder="Diploma percentage" value="<?php echo $dip; ?>">
  </div> 
    
    <div class="input-group inputgap">
    <span class="input-group-addon">CGPA</span>
    <input id="cgpa" type="number" class="form-control" name="CGPA" placeholder="Total BE CGPA" value="<?php echo $cgpa ?>">
  </div> 
                
   <div class="input-group inputgap">
    <span class="input-group-addon">sem1</span>
    <input id="sem1" type="number" class="form-control" name="sem1" placeholder="Sem1 SGPA" value="<?php echo $sem1 ?>">
  </div> 
            
   <div class="input-group inputgap">
    <span class="input-group-addon">sem2</span>
    <input id="sem2" type="number" class="form-control" name="sem2" placeholder="Sem2 SGPA" value="<?php echo $sem2 ?>">
  </div> 
                
   <div class="input-group inputgap">
    <span class="input-group-addon">sem3</span>
    <input id="sem3" type="number" class="form-control" name="sem3" placeholder="Sem3 SGPA" value="<?php echo $sem3; ?>">
  </div> 
          
   <div class="input-group inputgap">
    <span class="input-group-addon">sem4</span>
    <input id="sem4" type="number" class="form-control" name="sem4" placeholder="Sem4 SGPA" value="<?php echo $sem4; ?>">
  </div> 
            
 <div class="input-group inputgap">
    <span class="input-group-addon">sem5</span>
    <input id="sem5" type="number" class="form-control" name="sem5" placeholder="Sem5 SGPA" value="<?php echo $sem5 ?>">
  </div> 
                
   <div class="input-group inputgap">
    <span class="input-group-addon">sem6</span>
    <input id="sem6" type="number" class="form-control" name="sem6" placeholder="Sem6 SGPA" value="<?php echo $sem6 ?>">
  </div> 
          
    <div class="input-group inputgap">
      <span class="input-group-addon">10th year passing</span>
    <input id="tenth" type="text" class="form-control" name="10th_year_passing" placeholder="" value="<?php echo $_10thyear ?>">
  </div>
                
  <div class="input-group inputgap">
      <span class="input-group-addon">10th School Name</span>
    <input id="ten school" type="text" class="form-control" name="10th_school_name" placeholder="" value="<?php echo $_10thschool ?>">
  </div>
                
   <div class="input-group inputgap">
      <span class="input-group-addon">10th Board</span>
    <input id="ten board" type="text" class="form-control" name="10th_board" placeholder="" value="<?php echo $_10thboard ?>">
  </div>
          
  <div class="input-group inputgap">
      <span class="input-group-addon">PU/Dip clg name</span>
    <input id="ten college" type="text" class="form-control" name="pu_dip_clg_name" placeholder="" value="<?php echo $pu_dip_clg ?>">
  </div>
                
    <div class="input-group inputgap">
      <span class="input-group-addon">PU/DIP Board</span>
    <input id="twelve board" type="text" class="form-control" name="pu_dip_board" placeholder="" value="<?php echo $pu_dip_board ?>">
    </div>
                
   <div class="input-group inputgap">
      <span class="input-group-addon">CET Rank</span>
      <input id="rank" type="number" class="form-control" name="cet_rank" placeholder="" value="<?php echo $cet_rank ?>">
   </div>
  
                <div>
                    <center><input  style="margin: 10px; height: 50px; width: 100px"name="submit" type="submit" value="Update"></center>
     
   </div>
  
  
</form>

</body>


</html>