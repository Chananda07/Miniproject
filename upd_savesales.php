<?php
$Sal_Code = $_GET["Sal_Code"];
$Sal_Name =$_POST["Sal_Name"];  
$Sal_Type =$_POST["Sal_Type"];  
$Sal_Order_Date	 =$_POST["Sal_Order_Date	"];
$S_SubjectName =$_POST["S_SubjectName"];  

include('connection.php');
$sql = "UPDATE tbl_sales SET Sal_Name='$Sal_Name', Sal_Type='$Sal_Type', Sal_Order_Date	='$Sal_Order_Date	' WHERE Sal_Code=$Sal_Code";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index_sales.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index_sales.php'</script>";
}
$conn->close();
?>