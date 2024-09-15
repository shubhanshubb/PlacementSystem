<?php

include 'adminNav.php';
if(isset($_GET['id'])){
    include '../connect.php';
    $id =$_GET['id'];
    $sql = "delete from student where id=$id";
    if($conn->query($sql)==true){
        
        header('Location: viewstudent.php');
    }else{
        header('Location: viewstudent.php?error=failed');
    }
    
}