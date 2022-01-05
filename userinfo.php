<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}else{
    echo "Not Connected";
}

mysqli_select_db($con, 'reservation');

$date1 = $_POST['date1'];
$time1 = $_POST['time1'];
$party = $_POST['party'];
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$query = " insert into userinfodata(date1, time1, party, firstname, secondname, phone, email, comments) 
values ('$date1', '$time1', '$party', '$firstname', '$secondname', '$phone', ''$email', '$comments') ";
echo "$query";
mysqli_query($con, $query);
header('location:Reservations.html');

?>