<?php
$P_Code = $_GET["P_Code"];
$P_Name =$_POST["P_Name"];  
$P_Type =$_POST["P_Type"];  
$P_Price =$_POST["P_Price"];
$P_Quantity =$_POST["P_Quantity"];  

include('connection.php');
$sql = "UPDATE tbl_product  SET P_Name='$P_Name', P_Type='$P_Type', P_Price='$P_Price' , P_Quantity='$P_Quantity' WHERE P_Code=$P_Code";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index_product.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index_product.php'</script>";
}
$conn->close();
?>