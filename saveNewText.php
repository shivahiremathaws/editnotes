<?php
$usename = "root";
$passowrd = '';
$db ='mydatabase';

$conn= new mysqli('localhost', $usename, $passowrd, $db) or die("unable to connect");

$newText =$_POST['newText'];

if ($newText != ""){
    $sql = " UPDATE mytable SET div1 = '".$newText."' WHERE id=1 ";
    $result = mysqli_query($conn, $sql);
}


?>