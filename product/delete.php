<?php
    require 'connect.php';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="DELETE FROM shop where id='$id'";
        $query=mysqli_query($conn,$sql);
            header("location:show.php");
    }
?>
