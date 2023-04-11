<htm>
    <body>
        <form action="" method="post">
            <label for="">name</label>
            <input type="text" name="name"><br>
            <label for="">pin</label>
            <input type="text" name="pin"><br>
            <label for="">so du</label>
            <input type="text" name="sodu"><br>
            <input type="submit" name="sm" value="Tạo">
        </form>
    </body>
</htm>
<?php
require 'connect.php';
if(isset($_POST['sm'])){
    $n=$_POST['name'];
    $p=$_POST['pin'];
    $sd=$_POST['sodu'];
    $sql="INSERT INTO user(name,pin,sodu) value('$n','$p','$sd')";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo" <script> alert('thanh cong')</script>";
    }
    else{
        echo" <script> alert('thất bại')</script>";
    }
}
?>