


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عربتي | منتجاتي</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">


<style>
h3{
    margin-top: 20px;
    font-family: 'Cairo', sans-serif;
    font-weight: bold;

}
main{
width: 40%;
margin-top: 20px;
}
table{
    box-shadow: 1px 1px 10px silver;
}
thead{
    background-color: #3498DB;
    color: white;
    text-align: center;
}
tbody{
    text-align: center;
}
}
</style>
</head>
<body>
    <center>
<h3>منتجاتك المحجوزة</h3></center>
<?php
include('config.php');
$result=mysqli_query($con,"select * from addcard");
while($row=mysqli_fetch_array($result)){

echo "
<center>
<main>
<table class='table'>
<thead>
    <tr>
        <th>Product name</th>
        <th>Product price</th>
        <th>Delete product</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>$row[name]</td>
        <td>$row[price]</td>
        <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>ازالة</a> </td>
    </tr>
</tbody>
</table>

</main>
</center>
";


}

?>


<center>
    <a href="shop.php">الرجوع لصفحة المنتجات</a>
</center>
</body>
</html>