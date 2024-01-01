<?php
include __DIR__."/../DB/dbcon.php";
//echo $_POST["name"];
//echo $_POST["address"];

$name= $_POST['name'];
$address = $_POST['address'];

$sql = "INSERT INTO users (FirstName, address) VALUES ('$name','$address')";
$result = mysqli_query($conn,$sql);

header("Location:/../ABC/index.php");

?>