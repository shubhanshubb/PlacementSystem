<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        
    </head>
    <body style="background: url('images/bg1.jpg');">
    
         
          
         <?php
         include 'nav.php';
         ?>
     
         
           
           <div class="row">
           	
           	<div class="col-md-8">
           		
           		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <img src="images/ind1.jpg" alt="Administration">
    </div>

    <div class="item">
        <img src="images/ind2.jpg" alt="Computer Center">
    </div>

    <div class="item">
           <img src="images/ind3.jpg" alt="Auditorium">
    </div>
  </div>
  

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
        <center>
        <div class="col-md-4">
         <p><b>BEST ENGINEERING PLACEMENT COLLEGES IN BANGALORE</b></p>
         <h4>Due to HKBKCE’s strong industry-aligned courses, HKBKCE has always been a preferred choice for our recruiters. The  Career Services department works closely with the industry to develop and support collaborative Industry-Academia Interface and facilitates Placements and Internships for all our students.</h4>
         <div>
         <center><h3><b>Anouncements</b></h3></center>
            <?php 
            include 'connect.php';
            $sql="select * from anouncement;";
                $result = $conn->query($sql);
            if(mysqli_num_rows($result)>0){
        
          while($row = $result->fetch_assoc()){
              ?>
            
            <div  style="padding:20px;margin-top: 10px;box-shadow:0px 0px 5px #003333">
                
                <strong>Date:</strong> <?php echo $row['date'];?><br>
                <strong>Description:</strong> <?php echo $row['desc'];?>
                
            </div>
              
            <?php  
            }}
          ?>
         </div>
         
          </div>
   </div>
       	
                       
      
        
</center>

</body>


</html>