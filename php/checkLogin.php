<?php
    session_start();
    //1. Connect Database
    include 'connectDB.php';

    //2.Read data from Form
    //echo 'Hello CheckLogin!';
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    //echo '<br>username: ' .$email;
    //echo '<br>password: '. $password;

    /*
    SELECT * 
    FROM users
    where UserEmail = 'somchai' and UserPassword='123'
    */


    //3.Write SQL Statement
    $sql = "select * from member where member_email = '".$email . "' and member_password = '".   $password ."'"; 

    //4. Send sql to MySQl, get result back
    $result = $con->query($sql);

 
    //5. Count result
    $count_row = mysqli_num_rows($result);



    //6.Work with data
    if($count_row !=0){
        while($rs = $result->fetch_assoc()){
            // echo "<br>User ID: " .  $rs["UserID"];
            // echo "<br>Username: ". $rs["UserEmail"];
            //header("location:profile.php?username=".$username);
            $_SESSION['email'] = $email;
            header("location:../index.html");
        }

    }else{
        //echo "Please check username and password";
        header("location:../login.php?error=1");
    }

    $con->close();
