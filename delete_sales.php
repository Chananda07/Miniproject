<?php 
 $P_Code = $_GET['Sal_Code '];
include('connection.php');
$sql = "DELETE FROM tbl_sales WHERE Sal_Code ='$Sal_Code '";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='index_sales.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='index_sales.php'</script>";
}

$conn->close();
?>