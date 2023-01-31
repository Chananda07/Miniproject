<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <a href="index_product.php" class="btn btn-primary mt-3">Go Back</a>
        <hr>
        <h1 class="mt-5">เพิ่มสินค้า</h1>
        <hr>
        
<div class="mb-3">
<form  action="create_product.php" method="post">
            <div class="mb-3">
                <label for="P_Name" class="form-label">Name</label>
                <input type="P_Name" class="form-control" name="P_Name" required>
            </div>
            <div class="mb-3">
                <label for="P_Type" class="form-label">Type</label>
                <input type="P_Type" class="form-control" name="P_Type" required>
            </div>
            <div class="mb-3">
                <label for="P_Price">Price</label>
                <input type="P_Price" class="form-control" name="P_Price" required>
            </div>
            <div class="mb-3">
                <label for="P_Quantity">Quantity</label>
                <input type="P_Quantity" class="form-control" name="P_Quantity" required>
            </div>
            <button type="submit">Create</button>
            <a class="btn" href="index_produte.php">Back</a>
            </form>
            </div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>