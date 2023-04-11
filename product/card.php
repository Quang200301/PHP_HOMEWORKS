
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>

    <style>
        img{
            width: 40px;
            height: 40px;
        }
        input{
          width:40px;
          height:20px;
          justify-content: center;
         ;
        }
        
    </style>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Thành tiền</th>
      <th scopre="col">Action</th>
    </tr>
  </thead>
  <?php
    require 'connect.php';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $b=0;
          $sql="SELECT * FROM shop where id='$id'";
          $query=mysqli_query($conn,$sql);
           while($row=mysqli_fetch_assoc($query)){
          ?>
          <tbody>
            <tr>
              <td><?php echo $row['id']?></td>
              <td><?php echo $row['name']?></td>
              <td><?php echo $row['price']?></td>
              <td><img src="../file/<?php echo $row['img']?>" alt=""></td>
              <td><input type="text" name="sl" value=" <?php echo $row['soluong']?>">   </td>
              <td><?php
                $b=$row['price']*$row['soluong']; 
                echo $b;?></td>
              <td> <a href="thanhtoan.php" class="btn btn-primary">Mua</a>  <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-primary">Xóa</a> <a href="soluong.php?id=<?php echo $row['id']?>" class="btn btn-primary">Cập nhật</a></td>
              
            </tr>

          </tbody>
          <?php
          }
        }
         
        
      
    ?>
</table>
</body>
</html>
