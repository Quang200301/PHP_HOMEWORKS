<?php
require 'connect.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM shop where `id`='$id'";
    $query=mysqli_query($conn,$sql);
    if($query){
        $sl=$row['soluong'];
        $sql="UPDATE shop SET soluong='$sl' where soluong='$sl'";
        $query=mysqli_query($conn,$sql);
    }
        
}
?>