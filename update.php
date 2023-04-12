<?php 
 if(isset($_GET['id']))
 {

   ?>

   <?php

   require_once'db_connection.php';


     $connection=opencon();


 

         $id=$_GET['id'];

        $query="select id,first_name,last_name,email_id,phone_no,gender,skills,scholorship from person_details where id=$id";
        $result=mysqli_query($connection,$query);
        $numrow=mysqli_num_rows($result);

       if($numrow==1)
        {
        $row=mysqli_fetch_assoc($result);
        
    ?>

     <!DOCTYPE html>
     <html lang="en">
     <head>
     <title>update details</title>
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
     <h2 align="center" style="color:red;">Update Details</h2>
     <br>
     <br><br>

    
     <form action="refresh.php" method="post" id="frm">  
      
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div class="form-group">
      <label for="f_name">First_Name:</label>
      <input type="text" class="form-control"   name="f_name" id="f_name" value="<?php echo"$row[first_name]"; ?>" >
      </div>

    <div class="form-group"> 
      <label for="f_name">Last_Name:</label>
      <input type="text" class="form-control"  placeholder="Enter your last name" name="l_name" id="l_name" value="<?php echo"$row[last_name]"; ?>">
    </div>

    <div class="form-group"> 
      <label for="email">Email:</label>
      <input type="email" class="form-control"  placeholder="Enter your email id" name="email" id="email" value="<?php echo"$row[email_id]"; ?>">
    </div>

    <div class="form-group"> 
      <label for="ph_no">phone No:</label>
      <input type="text" class="form-control" placeholder="Enter your phoneno" name="ph_no" id="ph_no" value="<?php echo"$row[phone_no]"; ?>">
    </div>

    
    <div class="form-group"> 
      <!--<label for="gender">Gender:</label>
      
      <input type="radio"  name="gender" id="gender" value="male">male
      <input type="radio"  name="gender" id="gender" value="female">female-->

      <label>Gender:</label></br>
      <input type="radio" name="gender" <?php if($row['gender']=="male"){echo "checked";}?> value="male">male
      <input type="radio" name="gender" <?php if($row['gender']=="female"){echo "checked";}?> value="female">female
    </div>
 
     
    <div class="form-group"> 
      <label for="skills">Skills:</label> <br>
       <!--<input type="checkbox"  name="skills[]" id="skills" value="c">
       <label for=""> c </label> <br>
       <input type="checkbox" name="skills[]" id="skills" value="c++">
       <label for="">c++</label> <br>
       <input type="checkbox" name="skills[]" id="skills" value="java">
       <label for="">java</label>-->

       <?php  
         $result = mysqli_query($connection,"SELECT skills FROM person_details WHERE id = $id"); 
         $rows = mysqli_fetch_array($result);
        
          
          $skill_array = explode(" ", $rows['skills']);
        ?>    
  
         <input type="checkbox"  name="skills[]"  value="c"   <?php if(in_array("c",$skill_array)) { ?> checked="checked" <?php } ?> >c
         <input type="checkbox" name="skills[]"  value="c++"  <?php if(in_array("c++",$skill_array)) { ?> checked="checked" <?php } ?> >c++
         <input type="checkbox" name="skills[]"  value="java"  <?php if(in_array("java",$skill_array)) { ?> checked="checked" <?php } ?> >java
         
        
     </div>
 
   
      <div> 
           <!-- <label for="scholorship">Scholorship:</label> <br>
           <select name="scholorship" id="scholorship">
            <option value="1">i have</option>
            <option value="0">not have</option>
           </select>  <br>-->
            
           <label>Scholorship:</label></br>
           <select name="scholorship" id="scholorship">
            <option  value="1" <?php if($row["scholorship"]==1){echo "selected";}?> > i have</option>
            <option  value="0" <?php if($row["scholorship"]==0){echo "selected";}?> > not have</option>
           </select>  <br>
           
           
      </div>
      <br><br>

     <div class="form-group">
       <input type="submit" class="btn btn-default" name="update_value" id="save" value="update">
     </div>
    </form>
    </div>

       <h4 align="right"><a href="fetch_data.php">view the records</a> </h4>
   </body>
   </html>

 <?php
   
}
  else{
  echo"record not found";
  }

}
else{
  echo"you are not alowed";
}
?>

