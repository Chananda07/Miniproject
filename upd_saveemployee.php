<?php
$E_Code = $_GET["E_Code"];
$E_Name =$_POST["E_Name"];  
$E_LastName	 =$_POST["E_LastName"];  

include('connection.php');
$sql = "UPDATE tbl_employee  SET E_Name='$E_Name', E_LastName	='$E_LastName' WHERE E_Code=$E_Code";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index_employee.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index_employee.php'</script>";
}
$conn->close();
?>