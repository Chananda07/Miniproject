<?php
$name =$_POST["S_Name"];
$lastname =$_POST["S_Lastname"];
$address= $_POST["S_Address"];
$subjectname= $_POST["S_SubjectName"];
include('connection.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_customers (S_Name,S_Lastname,S_Address,S_SubjectName) VALUES ('$name','$lastname','$address','$subjectname')";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:index.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
