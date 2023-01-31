<?php
$name =$_POST["Sal_Name"];
$Type =$_POST["Sal_Type"];
$Date= $_POST["Sal_Order_Date"];
include('connection.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_sales (Sal_Name,Sal_Type,Sal_Order_Date) VALUES ('$name','$Type','$Date')";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:index_sales.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
