<?php
$T_Code = $_GET["T_Code"];
$T_Name =$_POST["T_Name"];  
$T_quantity =$_POST["T_quantity"];  

include('connection.php');
$sql = "UPDATE tbl_product_type  SET T_Name='$T_Name', T_quantity='$T_quantity' WHERE T_Code=$T_Code";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index_product_type.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index_product_type.php'</script>";
}
$conn->close();
?>