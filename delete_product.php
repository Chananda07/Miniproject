<?php 
 $P_Code = $_GET['P_Code'];
include('connection.php');
$sql = "DELETE FROM tbl_product WHERE P_Code='$P_Code'";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='index_product.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='index_product.php'</script>";
}

$conn->close();
?>