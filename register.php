<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style>
             table tr td{
            font-family:sans-serif;
            font-size:0.5cm;
            color: #7B1F06
        }
        input{
            font-family:sans-serif;
            font-size:0.5cm;
            color:#003333;
        }
        .size21{
            font-style: italic;
        }
   
.error {color: #FF0000;}
</style>
   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration form </title>
         
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      </head>
    <body style="background-image: url('images/bg3.jpg');background-attachment: fixed;background-repeat: no-repeat;background-size: cover">
        <?php include 'nav.php';?>
           
          
        </div>
     
      <?php
// define variables and set to empty values
$nameErr = $emailErr = $GenderErr = $usnErr =$BranchErr = $passErr= "";
$name = $email = $gender = $usn = $branch = $address = $phone = $date = $resume = $pass =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["usn"])) {
    $usnErr = "USN is required";
  } else {
    $usn = test_input($_POST["usn"]);
  }

  if (empty($_POST["Branch"])) {
    $branchErr = "Branch is required";
  } else {
    $branch = test_input($_POST["Branch"]);
  }

  if (empty($_POST["Gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["Gender"]);
  }
  if (empty($_POST["address"])) {
    $address = "";
  } else {
    $address = test_input($_POST["address"]);
  }
  if (empty($_POST["phone"])) {
    $phone = "";
  } else {
    $phone = test_input($_POST["phone"]);
  }
  if (empty($_POST["date"])) {
    $date = "";
  } else {
    $date = test_input($_POST["date"]);
  }
  if (empty($_POST["password"])) {
    $passErr = "Please enter password";
  } else {
    $pass = test_input($_POST["password"]);
    $pass = hash('sha256',$pass);
  }

if(empty($nameErr) && empty($emailErr) && empty($usnErr) && empty($branchErr)&& empty($genderErr) && empty($dateErr) && empty($passErr)){

    
}else{
// get the connection

// build a insert query
$sql = "INSERT INTO student(name,email,usn,branch,address,mobile,gender,dob,password)  VALUES ( '$name', '$email', '$usn', '$branch', '$address', '$phone', '$gender', '$date', '$pass');";
$result = $conn->query($sql);
if($result){
    echo "record Inserted";
    header('Location:login.php');
}else{
    echo "Failed to insert data:". $conn->error();
    
}
}

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
             
            
           
          <div class="row">
          <div class="col-md-4 col-md-offset-4">
   
            <div style="background:linear-gradient(#white,white,#bca9d8);box-shadow: 0px 0px 5px #003333;" class="jumbotron">
                 <center>
            <p><span class="error"></span></p>
            <form action="register.php" method="post">
                <style>
                    td{
                        padding:10px;
                    }
                </style>
          <table>   
              <tr><td>Name:</td><td><input type="text" placeholder="name" name="name">
                <span class="error">* <?php if(isset($nameErr)) {echo $nameErr;}?></span></td></tr> 
              <tr><td>Email:</td><td><input type="text" placeholder="email" name="email">
                <span class="error">* <?php if(isset($emailErr)) {echo $emailErr;}?></span></td></tr> 
              <tr><td>Pass:</td><td><input type="password" placeholder="Password" name="password">
                <span class="error">* <?php if(isset($passErr)) {echo $passErr;}?></span></td></tr> 
              
              <tr><td>USN:</td><td><input type="text" placeholder="usn" name="usn">
                <span class="error">* <?php if(isset($usnErr)) {echo $usnErr;}?></span></td></tr> 
            
            <tr><td>Branch: </td><td> <select name="branch" enable="">
             <option>CSE</option>
             <option>ECE</option>
             <option>EEE</option>
             <option>MECH</option>
             <option>CIVIL</option>
         </select>
         
                 <span class="error">* <?php if(isset($BranchErr)){ echo $BranchErr;}?></span></td></tr>
            
            
                <tr><td> Address:</td><td><input type="text" placeholder="address" name="address"></td></tr>
                <tr><td> Mob no:</td><td><input maxlength="10" pattern="[0-9]{10}" title="10 digits number" type="text"name="phone"></td></tr><br><br>
            
                <tr><td>  Gender: </td><td> <input type="radio" name="gender" value="Male" enable="" />Male
            <input type="radio" name="gender" value="2" enable="" />Female
            <span class="error">* <?php echo $GenderErr;?></span> </td><tr>
        
        <tr><td>DOB:</td><td><input type="date" placeholder="dob" name="date">
                <span class="error">* <?php if(isset($dateErr)) {echo $dateErr;}?></span></td></tr> 
            
<!--        <tr><td> Upload resume:</td><td><input type="file" placeholder="name" name="Upload " value=""/> </td></tr>
       -->
        </table>
        
          <input type="submit"value="Register">
        </form>
            </center>
            </div>
             
    
           </div>
              </div>
          
    </body> 
</html>



