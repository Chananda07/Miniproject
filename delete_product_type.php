<?php 
 $T_Code = $_GET['T_Code'];
include('connection.php');
$sql = "DELETE FROM tbl_product_type WHERE T_Code='$T_Code'";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='index_product_type.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='index_product_type.php'</script>";
}

$conn->close();
?>