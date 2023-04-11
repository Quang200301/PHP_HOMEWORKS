<html>
    <body>
    
    </body>
    <?php
        require 'connect.php';
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $sql="SELECT * FROM shop where id='$id'";
             $query=mysqli_query($conn,$sql);
             while($row=mysqli_fetch_assoc($query)){
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Name</label>
        <input type="text" name="name" value="<?php echo $row['name']?>"><br>
        <label for="">Price</label>
        <input type="text" name="price" value="<?php echo $row['price']?>"><br>
        <label for="">Img</label>
        <input type="file" name="fileanh" value="<?php echo $row['img']?>" ><br>
        <label for="">soluong</label>
        <input type="text" name="soluong" value="<?php echo $row['soluong']?>"><br>
        <input type="submit" name="up" value="cập nhật">
    </form>
    <?php
        }
    }
    ?>
<?php
require 'connect.php';
if(isset($_POST['up'])){
$n=$_POST['name'];
$p=$_POST['price'];
$img=$_FILES['fileanh']['name'];
$sl=$_POST['soluong'];
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
    if($n!='' && $p!=''){
        $sql="UPDATE shop SET name='$n', price='$p',img='$img',soluong='$sl' where id='$id'";
        move_uploaded_file($_FILES['fileanh']['tmp_name'],'../file/'.$img);
        $query=mysqli_query($conn,$sql);
        if($query){
        header("location:show.php");
}
    }
}
}
?>

</html>