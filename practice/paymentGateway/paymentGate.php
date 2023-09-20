<?php 
require('config.php');
$msg='';
if(isset($_POST['submit'])){
   $p_name = $_POST['pName'];
   $p_price = $_POST['pPrice'];   

   $nm=$_FILES["pImage"]["name"];
   $tmp=$_FILES["pImage"]["tmp_name"];
   move_uploaded_file($tmp,"upload/".$nm);

   $sql=("insert into product(product_name,product_price,product_image) values('$p_name','$p_price','$nm')");
   $data=mysqli_query($conn,$sql); 
   if($data){
        $msg  = "Product added successfully";
    }else{
        $msg="failed to add product";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Product</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="bg-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-light mt-5 rounded">
                <h2 class="text-center p-2">Add Product Information</h2>

                <form action="" method="POST" class="p-2" enctype="multipart/form-data" id="form-box">
                    <div class="form-group">
                        <input type="text" class="from-control" placeholder="Product Name" name="pName" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="from-control" placeholder="Product Price" name="pPrice" required>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" placeholder="Product Image" name="pImage" id="customFile" required>
                        <label for="customFile" class="custom-file-label">Choose Product Image</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-danger btn-block" value="ADD"></inpu>
                    </div>
                    <div class="form-group">
                        <h4 class="text-center"><?php $msg?></h4>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 mt-3 p-4 bg-light rounded">
                <a href="index.php" class="btn btn-warning btn-block btn-lg">Go To Product Page</a>
            </div>
        </div>
    </div>
</body>

</html>