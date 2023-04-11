<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="row">
        <?php
        require 'connect.php';
        $sql="SELECT * FROM shop";
        $query=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($query)){
        ?>
        <div class="card" style="width: 18rem;">
            <img src="../file/<?php echo $row['img']?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['name']?></h5>
                <p class="card-text"><?php echo $row['price']?></p>
                <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-primary">delete</a>
                <a href="card.php?id=<?php echo $row['id']?>" class="btn btn-primary">add card</a>
                <a href="update.php?id=<?php echo $row['id']?>" class="btn btn-primary">update</a>
            </div>
        </div>
        <?php                                                                                                       
        }
        ?>

    </div>
   
</body>
</html>