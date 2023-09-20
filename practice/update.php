<?php 
$conn=new mysqli("localhost","root","","datbase_name");
$id=$_GET['id'];
$sql=("select * from table_name where id='$id'");
$res=mysqli_query($conn,$sql);

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$data=("update table_name set column_name='$variable_name',column_name='$variable_name',column_name='$variable_name' where id='$id'");
$record=mysqli_query($conn,$data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <?php 
            while($row=mysqli_fetch_assoc($res)){
            ?>
        <input type="hidden" name="id" placeholder="name" value="<?php echo $row['id']?>">
        <input type="text" name="name" placeholder="name" value="<?php echo $row['name']?>>
        <input type="email" name="email" placeholder="email" value="<?php echo $row['email']?>">
        <input type="password" name="password" placeholder="password" value="<?php echo $row['password']?>">
        <input type="contact" name="contact" placeholder="contact" value="<?php echo $row['contact']?>">
        <input type="submit" name="submit">
        </form>
        <?php }?>
    </div>
</body>
</html>