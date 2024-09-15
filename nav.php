<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


     <div class="row" style="width: 100%;">
         <div class="col-md-12" >
        <div class="row" style=" background: linear-gradient(to left,#fff 0.5%,#7a6a6a);">
            <?php 
            include 'connect.php';
            $sql=" select * from collegeInfo where id = 1 ";
             $result = $conn->query($sql);
             $name="YOUR COLLEGE NAME HERE";
             $Society="College Society here";
             $reBy = "Recognised by VTU";
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
 
    <div class="navbar-header ">
      
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="register.php">Student Register</a>
       </li>
       <li><a href="admin.php">Admin login</a></li>
      <li><a href="login.php">Student Login</a>
       </li>
      
    </ul>
  </div>
</nav>