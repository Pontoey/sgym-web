<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "sgym_db_app";

    $con = new mysqli($host,$username,$password,$db);
    if ($con->connect_error)
    {
        die('Error : ('. $con->connect_errno .')'. $con->connect_error);
    }else{
        //echo "Connect Database successfully!";
        
    }
    $con->set_charset("utf8"); //สนับสนุนภาษาไทย

    function checkUsernamePassword($con,$sql){
        
        $result = $con->query($sql);
        return $result;
  
    }
?>