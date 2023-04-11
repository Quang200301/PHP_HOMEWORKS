
<html>
    <header>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </header>
    <body>
        <?php
            require 'connect.php';
            if(isset($_GET['id'])){
                $id=$_GET['id'];

                $k=0;
                $sql="SELECT*FROM shop,user where `id`='$id'";
                $query=mysqli_query($conn,$sql);
                while ($row=mysqli_fetch_assoc($query)){
                
            
        ?>
        <div class="card" style="width: 18rem;">
            <img src="../file/<?php echo $row['img'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?php echo $row['name'] ?></h5>
            <p class="card-text"><?php echo $row['price'] ?></p>
            <a href="thanhtoan.php" class="btn btn-primary">Mua</a>
            </div>
        </div>
        <?php
             }
        }
        ?>
       
    </body>
</html>