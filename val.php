


<?php

include('config.php');
$ID=$_GET['id'];
$up=mysqli_query($con,"SELECT * FROM prod where id=$ID");
$data=mysqli_fetch_array($up);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تاكيد شراء المنتج</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">

<style>
    set
    .main{
        width: 30%;
        padding: 20px;
        box-shadow: 1px 1px 10px silver;
    }
</style>

</head>
<body>
    <center>
        <div class="main">
<form action="insert_card.php" method="post" >
<h2>هل فعلا تريد شراء المنتج</h2>
<input type="text" name="id"  value="<?php echo $data['id']?>">
<input type="text" name="name" value="<?php echo $data['name']?>">
<input type="text" name="price" value="<?php echo $data['price']?>">
<button name="add" type="submit" class="btn btn-warning">تاكيد اضافة المنتج للعربة</button>
<br>
<a href="shop.php">الرجوع لصفحة المنتجات</a>

</form>
</div>
    </center>
</body>
</html>