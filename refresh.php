<?php
    require_once'db_connection.php';
    $con=opencon();

    if(isset($_POST['submit_value']) && $_POST['submit_value']=="submit"){
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
        $email=$_POST['email'];
        $ph_no=$_POST['ph_no'];
        $gender=$_POST['gender'];
        $skills=$_POST['skills'];
        $scholorship=$_POST['scholorship'];
        $chk="";
        foreach($skills as $chk1)  
         {  
        $chk .= $chk1."  ";  
         }
        if( $f_name!="" && $l_name!="" && $email!="" && $ph_no!="" && $gender!="" && $skills!="" && $scholorship!="")
        {
           $sql="INSERT INTO person_details(first_name,last_name,email_id,phone_no,gender,skills,scholorship) VALUES('$f_name','$l_name','$email','$ph_no','$gender','$chk',$scholorship)";
           $result1=mysqli_query($con,$sql);

           
            
           
           if($result1){
              
            header("location:person.php");
           }
           else{
            echo "all fields required";
           }
          
           /*if($con->query($sql)){
                 echo "data stored"; 
            }
            else{
                    echo "insert data failed";
            }
          }
         else{
          echo "all fields required";
          }*/
          //header("location:person.php");
       }
    }

    elseif(isset($_POST['update_value']) && $_POST['update_value']=="update"){
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
        $email=$_POST['email'];
        $ph_no=$_POST['ph_no'];
        $gender=$_POST['gender'];
        $skills=$_POST['skills'];
        $scholorship=$_POST['scholorship'];
        $id=$_POST['id'];
          
        $chk="";
        foreach($skills as $chk1)  
         {  
        $chk .= $chk1."  ";  
         }

        $query="UPDATE person_details SET first_name='$f_name',last_name='$l_name',email_id='$email',phone_no=$ph_no,gender='$gender',skills='$chk',scholorship=$scholorship WHERE id=$id";
        $result=mysqli_query($con,$query);

        if($result){
            header('location:fetch_data.php');
        }
        else{
            echo "error while updating the data";
        }
    }




    
          
?>



