<?php 
   $count=0;
  

?>



<html>
   <head>
      <title> display datas</title>
      <style>

         .dbresult,.dbresult td,.dbresult th{
            border:1px solid black;
            border-collapse:collapse;
            padding:8px;
         }

         .dbresult{
            width:800px;
            margin:auto;
         }

         .dbresult tr{
            background-color:lightgrey;
         }


      </style>
   
   </head>
   <body>
      <?php
         require_once'db_connection.php';
         $con=opencon();
         $query="SELECT * FROM person_details";

         $result=mysqli_query($con,$query);

         $numrow=mysqli_num_rows($result);

         
         if($numrow>0)
         { ?>
            
            <table class="dbresult">
                <tr><th colspan="10"><a href="person.php">go to form</a></th></tr>
               <tr>
               
                <th>Id</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>email_id</th>
                <th>phone_no</th>
                <th>gender</th>
                <th>skills</th>
                <th>scholorship</th>
                <th>delete</th>
                <th>update</th>

              </tr>
             
              <?php
             while($row=mysqli_fetch_assoc($result))
               { ?>
                
                <?php
                   $id=$row['id'];
                 echo"
                  <tr>
                  
                  <td> $row[id]</th>
                  <td> $row[first_name]</td>  
                  <td> $row[last_name]</td>
                  <td> $row[email_id]</td>
                  <td> $row[phone_no]</td>
                  <td> $row[gender]</td>
                  <td> $row[skills]</td>
                  <td> $row[scholorship]</td>
                  <td> <a href='delete.php?id=$id'>delete</a></td>
                  <td> <a href='update.php?id=$id'>update</a></td>
                  </tr>
               ";?>
              <?php }  ?>
            </table>  
               
         <?php }
         
         else{
            echo"record not found";
         }
      ?>
      
   </body>
</html>