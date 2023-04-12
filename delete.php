

<?php
           
          //require_once'fetch_data.php';
          require_once'db_connection.php';
          $connection=opencon();

        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $query="delete from person_details where id=$id";
            $result=mysqli_query($connection,$query);
             //echo'<script>alert("you are going to delete the record");</script>';
            if($result){
                    
              header('location:fetch_data.php');
             
            }       
        } 
        else{
          echo"value not come";
        }   
    
    
?>
