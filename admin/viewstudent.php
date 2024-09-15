

<html>
    <head>
        <title>Admin View Students</title>
        <style>
            th{
                width: 150px;
            }
        </style>     
    </head>
   
    <body>
         <?php include 'adminNav.php'; ?>
        
        <div class="container-fluid">
            
            <table class="table table-responsive table-stripped" style="margin: 20px">
                <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>USN</th>
                <th>10th %</th>
                <th>PU/Dip %</th>
                <th>B.E Aggregate</th>
                <th>Delete Student</th>
                </thead>
                <?php
                include '../connect.php';
                $sql="select * from student;";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result)>0){
                
        while($row=$result->fetch_assoc()){
        ?>
            
                <tr>
                    <td><?php echo $row['id']?></td>    
                       <td><?php echo $row['name']?></td>    
                          <td><?php echo $row['email']?></td> 
                             <td><?php echo $row['usn']?></td>
                             <td><?php echo $row['10th']?></td>
                             <td><?php echo $row['12th']?></td>
                             <td><?php echo $row['CGPA']?></td>
                           <?php  $delLink = "deleteStudent.php?id=".$row['id']; ?>
                             <td><a href="<?php  echo $delLink ?>" >Delete</a></td>  
                </tr>
            
            <?php
        
         }
    }
?>
                
            </table>
            
            
        </div>
        
        
    </body>   
</html>

