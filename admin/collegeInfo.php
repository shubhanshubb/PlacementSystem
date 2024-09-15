
<?php 
    $msg = "";
    if(isset($_POST['submit'])){
        
                $name = $_POST['name'];
                $soc = $_POST['soc'];
                $reBy = $_POST['reBy'];
               
                $imgName = $_FILES["fileToUpload"]["name"];
                
                $target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
         include '../connect.php';
                //Insert into db
                $sql = "update collegeinfo set name = '$name',society = '$soc',reBy='$reBy',logoImgName='$imgName' where id = 1;";
                
                if($conn->query($sql)==true){
                    
                    header("location:collegeInfo.php");
                    
                }else{
                    
                     ?> <script> alert("error to Update <?php echo mysqli_error($conn);?>");  </script> <?php
                }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
                
                
                
                
                
                
                // Validation code here
                
               
                
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
        
        
        <div class="row" style="width:100%;">
          <div class="col-md-7 col-md-offset-3">
    
        
    <center>
         
        <div id="adminPane"  style="background:linear-gradient(orange, white);" class="jumbotron ">
            <?php 
            include '../connect.php';
            $sql=" select * from collegeInfo where id = 1 ";
             $result = $conn->query($sql);
             $name="";
             $Society="";
             $reBy = "";
            
             
    if(mysqli_num_rows($result)>0){
        
        $row = $result->fetch_assoc();
    $name =$row['name'];
    $Society =$row['society'];
    $reBy =$row['reBy'];
    $imgName =$row['logoImgName'];
    
    
    }
            
            
            ?>  
             <h3>Update College info </h3>
             <form action="collegeInfo.php" method="post" enctype="multipart/form-data" >
            
          
            <div class="input-group" style="margin:15px">   
                <span class="input-group-addon" style="">Name of the College:</span>
                <input  type="text" class="form-control" name="name" value="<?php echo $name; ?>" >
  </div>
                  <div class="input-group" style="margin:15px">   
             <span class="input-group-addon">Society if any:</span>
    <input  type="text" class="form-control" name="soc" value="<?php echo $Society; ?>" >
  </div>
                  <div class="input-group" style="margin:15px">   
             <span class="input-group-addon">Recognised By:</span>
             <input  type="text" class="form-control" name="reBy" value="<?php echo $reBy; ?>">
  </div>
               <div class="input-group" style="margin:15px">   
             <span class="input-group-addon ">College Logo</span>
             <input  type="file" class="form-control" name="fileToUpload" id="fileToUpload" required="" >
  </div>     
  
                  
            
            
                 <input class="btn btn-success btn-lg" name="submit" type="submit" value=" Update">
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

