<?php

$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection Successful...";
}else{
    echo "No connection.....";
}

mysqli_select_db($con, 'covid');

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$symptoms = $_POST['symptoms'];

$query = "insert into contact (name, number, email, age, gender, symptoms) values ('$name', '$number', '$email', '$age', '$gender', '$symptoms')";

mysqli_query($con, $query);

echo "$query";
?>