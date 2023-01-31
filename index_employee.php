<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Product</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

<div class="container">
        <a href="ins_formemployee.php" class="btn btn-info">เพิ่มข้อมูลกพนักงาน</a>
        <a href="index.php" class="btn btn-warning">กลับไปยังหน้าแรก</a>
<table id="mytable" class="table table-bordered table-striped">
        <thead>
<tr>
<th>No</th>
<th>Name</th>
<th>LastName</th>
<th>Sale Date</th>
<th>Update</th>


</tr>
</thead>
<tbody>
<?php
include('connection.php');
$sql = "SELECT * FROM tbl_employee";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//แสดงข้อมูลเป็ นตาราง
while($row = $result->fetch_assoc()) 
{
echo '<tr>';
echo '<td>'. $row['E_Code'] . '</td>';
echo '<td>'. $row['E_Name'] . '</td>';
echo '<td>'. $row['E_LastName'] . '</td>';
echo '<td>'. $row['E_Sale_Date'] . '</td>';
echo '<td><a role="button"  href="Update_employee.php?c_no='.$row['E_Code'].'" class="btn btn-success">แก้ไขข้อมูล</a> ';  //ปุ่มที่เพิ่มเข้ามา
echo '<a href="delete_employee.php?E_Code='.$row['E_Code'].'" class="btn btn-danger">ลบข้อมูล</a>';  //ปุ่มที่เพิ่มเข้ามา
echo '</tr>';
}
} else {
echo " ";
}
$conn->close();
?>
</tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>