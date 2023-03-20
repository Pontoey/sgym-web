<?php
include 'connectDB.php';

//(เงื่อนไข) ? (ค่าที่กำหนดให้เมื่อเงื่อนไขเป็นจริง) : (ค่าที่กำหนดให้เมื่อเงื่อนไขเป็นเท็จ);
/*$name = (!empty($_POST['name'])) ? ($_POST['name']) : ("");
$gender = (!empty($_POST['gender'])) ? ($_POST['gender']) : ("");
$birth = (!empty($_POST['birthday'])) ? ($_POST['birthday']) : ("");
$age = (!empty($_POST['age'])) ? ($_POST['age']) : ("");
$weight = (!empty($_POST['weight'])) ? ($_POST['weight']) : ("");
$height = (!empty($_POST['height'])) ? ($_POST['height']) : ("");
$email = (!empty($_POST['email'])) ? ($_POST['email']) : ("");
$password = (!empty($_POST['password'])) ? ($_POST['password']) : ("");*/


$name = $_POST['name'];
$gender = $_POST['gender'];
$birth = $_POST['birthday'];
$age = $_POST['age'];
$weight =  $_POST['weight'];
$height = $_POST['height'];
$email = $_POST['email'];
$password =  $_POST['password'];


echo $name;
echo $gender;
echo $birth;
echo $age;
echo $weight;
echo $height;
echo $email;
echo $password;


$sql = "insert into member (member_name,member_age,member_gender,member_date,member_weight,member_height,member_email,member_password) values (?,?,?,?,?,?,?,?)";

$statement = $con->prepare($sql);
$statement->bind_param('sissiiss', $name, $age, $gender, $birth, $weight, $height, $email, $password);

// i: integer, s:string, d:double, b:blob
if ($statement->execute()) {
    print "Success!!" .  $con->insert_id;
    echo $statement->affected_rows;
} else {
    die('Error : ' . $con->error);
}
$statement->close();
$con->close();

    //ถ้าต้องการ เข้ารหัส password ให้ดูตัวอย่างที่นี่ https://code-boxx.com/password-encrypt-decrypt-php/
