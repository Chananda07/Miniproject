<?php
$name =$_POST["T_Name"];
$quantity =$_POST["T_quantity"];

include('connection.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_product_type (T_Name,T_quantity) VALUES ('$name','$quantity')";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:index_product_type.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
