<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Name</label>
        <input type="text" name="name" ><br>
        <label for="">Price</label>
        <input type="text" name="price"><br>
        <label for="">Img</label>
        <input type="file" name="fileanh" ><br>
        <label for="">soluong</label>
        <input type="text" name="soluong"><br>
        <input type="submit" name="sub" value="nhập">
    </form>
</body>
</html>
<?php
require 'connect.php';
if(isset($_POST['sub'])){
    $name=$_POST['name'];
$price=$_POST['price'];
$img=$_FILES['fileanh']['name'];
$soluong=$_POST['soluong'];
$b=0;
$check=getimagesize($_FILES['fileanh']['tmp_name']);
if($check==true){
    $b=1;
}
else{
    $b=0;
}
if(file_exists($file2)){
    $b=0;
}
if($_FILES['fileanh']['size']>500000){
    $b=0;
}
if($check==0){
    echo "<script> alert('that bai')";
}
else{
    if($name!='' && $price!=''){
        $sql="INSERT INTO shop(name,price,img,soluong) value('$name','$price','$img','$soluong')";
        move_uploaded_file($_FILES['fileanh']['tmp_name'],'../file/'.$img);
        $query=mysqli_query($conn,$sql);
        if($query){
        header("location:show.php");
}
    }
}
}
