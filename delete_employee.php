<?php 
 $E_Code= $_GET['E_Code'];
include('connection.php');
$sql = "DELETE FROM tbl_employee WHERE E_Code='$E_Code'";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='index_employee.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='index_employee.php'</script>";
}

$conn->close();
?>