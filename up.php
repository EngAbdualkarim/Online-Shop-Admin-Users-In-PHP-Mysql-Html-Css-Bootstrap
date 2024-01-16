



<?php

include('config.php');
if(isset($_POST['update'])){
    $ID=$_POST['id'];
    $NAME=$_POST['name'];
    $PRICE=$_POST['price'];
    $IMAGE=$_FILES['image'];
    
    $image_location=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    $image_up="images/".$image_name;
    $update="UPDATE prod SET name='$NAME',price='$PRICE',image='$image_up' WHERE id=$ID ";
    mysqli_query($con,$update);
    if(move_uploaded_file($image_location,'images/'.$image_name)){
        echo"<script>alert('تم Jتحديث بنجاح')</script>";
    }
    else{
        echo"<script>alert('حدث مشكاة لم يتم الرفع')</script>";
    }
    
    header('location:index.php');

}


?>