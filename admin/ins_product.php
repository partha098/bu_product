<?php session_start();

if(!isset($_SESSION['admin_id'])){
    header("location:index.php");
    }
?>
<?php 

include("inc/db.php");

$name=$_POST['name'];
$price=$_POST['price'];

$fn=$_FILES['product_image']['name'];
$buf=$_FILES['product_image']['tmp_name'];
move_uploaded_file($buf,"../product_image/".$fn);

$ins="INSERT INTO products SET name='$name',price='$price',image='$fn'";

$con->query($ins);

header("location:list-product.php");


?>