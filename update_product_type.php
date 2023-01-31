<!DOCTYPE html>
<?php 
    session_start();
    include('connection.php');
    $id = $_GET['c_no'];
    $sql = "select * from tbl_product_type where T_Code='$id'";
    $result = $conn->query($sql);
    
    $row;
    $row = $result->fetch_assoc();
   $_SESSION['id'] = $id;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product Type</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"  integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-3">เพิ่มข้อมูล</h1>
        <hr>
        <form action="upd_saveproduct_type.php?T_Code=<?=$id;?>" enctype="multipart/form-data"   method="POST">
            <label for="T_Name" class="form-label">ประเภทสินค้า</label>
            <input class="form-control" type="text" name="T_Name" value="<?php echo $row['T_Name']; ?>">

            <label for="T_quantity" class="form-label">จำนวนสินค้า</label>
            <input class="form-control" type="text"  name="T_quantity" value="<?php echo $row['T_quantity']; ?>">
           
            <input class="btn btn-success mt-3" type="submit" value="Update">
            <a href="index_product_type.php" class="btn btn-primary mt-3">Go Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
   </html>