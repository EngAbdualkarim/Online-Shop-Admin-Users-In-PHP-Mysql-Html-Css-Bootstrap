

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Online | اضافة منتتجات</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
</head>
<body>
<center>
   <div class="main">
        <form action="insert.php"  method="post"  enctype="multipart/form-data">
        <h2>موقع تسويقي اونلاين</h2>
        <img src="images\logo.jpg" alt="logo" width="350px" >
        <br>
        <input type="text" name="name" >
        <br>
        <input type="text" name="price" >
        <br>
        <input type="file" id="file" name="image" style="display:none;">
        <label for="file">اختيار صورة للمنتج</label>
        <button name="upload">رفع المنتج</button>
        <br>
        <a href="products.php">عرض كل المنتجات</a>
        <p>Devloper by Abdualkarim</p>
        </form>
   </div>
</center>
</body>
</html>