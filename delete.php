

<?php

include('config.php');
$ID=$_GET['id'];

mysqli_query($con,"DELETE FROM PROD WHERE ID=$ID");
header('location:products.php');

?>