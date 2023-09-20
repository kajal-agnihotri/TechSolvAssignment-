<?php 
$conn=new mysqli("localhost","root","","database_name");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h2>Add Product Information</h2>
        <input type="text" name="Pname">
        <input type="text" name="Pprice">
        <input type="file" name="Pimage">
        <input type="submit" name="submit">
    </form>
</body>
</html>