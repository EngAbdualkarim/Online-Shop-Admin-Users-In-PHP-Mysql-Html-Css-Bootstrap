


<?php
include('config.php');
$ID=$_GET['id'];
mysqli_query($con,"DELETE FROM addcard WHERE ID=$ID");
header('location:card.php');
?>