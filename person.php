<?php

require_once'db_connection.php';
require_once'refresh.php';

$con=opencon();

/*
if($count==1){
  echo "data stored";
  $count=0;
}*/
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>person details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    .container{
      background-color:aqua;
    }
  </style>

</head>
<body >

<div class="container"  >
  <h2 align="center" style="color:red;">Person Details</h2>
  <br>
  <br><br>

  <form action="refresh.php" method="post" id="frm">
  
    <div class="form-group">
      <label for="f_name">First_Name:</label>
      <input type="text" class="form-control"  placeholder="Enter your first name" name="f_name" id="f_name">
    </div>

    <div class="form-group">
      <label for="f_name">Last_Name:</label>
      <input type="text" class="form-control"  placeholder="Enter your last name" name="l_name" id="l_name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control"  placeholder="Enter your email id" name="email" id="email">
    </div>

    <div class="form-group">
      <label for="ph_no">phone No:</label>
      <input type="text" class="form-control" placeholder="Enter your phoneno" name="ph_no" id="ph_no">
    </div>
    

    <div class="form-group">
      <label for="gender">Gender:</label>
      
      <input type="radio"  name="gender" id="gender" value="male">male
      
      <input type="radio"  name="gender" id="gender" value="female">female
    </div>
 
     
    <div class="form-group">
      <label for="skills">Skills:</label> <br>
       <input type="checkbox"  name="skills[]" id="skills" value="c"> 
       <label for=""> c </label> <br>
       <input type="checkbox" name="skills[]" id="skills" value="c++">
       <label for="">c++</label> <br>
       <input type="checkbox" name="skills[]" id="skills" value="java">
       <label for="">java</label>
     </div>
 
   
      <div>
           <label for="scholorship">Scholorship:</label> <br>
           <select name="scholorship" id="scholorship">
            <option value="1">i have</option>
            <option value="0">not have</option>
           </select>  <br>

      </div>


     <div class="form-group">
      <br><br>
       <input type="submit" class="btn btn-default" name="submit_value" id="save" value="submit">
     </div>
  </form>
</div>

<h4 align="right"><a href="fetch_data.php">view the records</a> </h4>
</body>
</html>


