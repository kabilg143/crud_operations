<?php
    function opencon()
    {
        $con= mysqli_connect('localhost','root','','person') or die("Connect failed: %s\n". $con -> error);  
        return $con;
    }
?>
