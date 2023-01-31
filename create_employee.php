<?php
$name =$_POST["E_Name"];
$LastName =$_POST["E_LastName"];
$Price= $_POST["E_Sale_Date"];
include('connection.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_employee (E_Name,E_LastName,E_Sale_Date) VALUES ('$name','$LastName','$SaleDate')";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:index_employee.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>