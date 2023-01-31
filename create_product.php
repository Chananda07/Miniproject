<?php
$name =$_POST["P_Name"];
$Type =$_POST["P_Type"];
$Price= $_POST["P_Price"];
$Quantity= $_POST["P_Quantity"];
include('connection.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_product (P_Name,P_Type,P_Price,P_Quantity) VALUES ('$name','$Type','$Price','$Quantity')";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:index_product.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
