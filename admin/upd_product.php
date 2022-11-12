<?php session_start(); 
if(!isset($_SESSION['admin_id'])){
    header("location:index.php");
    }
?>
<?php 

include("inc/db.php");

$id=$_POST['id'];

$name=$_POST['name'];
$price=$_POST['price'];


if(isset($_FILES['product_image']['name']) && $_FILES['product_image']['name']!=""){
$fn=$_FILES['product_image']['name'];
$buf=$_FILES['product_image']['tmp_name'];
move_uploaded_file($buf,"../product_image/".$fn);
$upd="UPDATE products SET name='$name',price='$price',image='$fn' WHERE product_id='$id'";

}else{
    $upd="UPDATE products SET name='$name',price='$price' WHERE product_id='$id'";
}

$con->query($upd);

header("location:list-product.php");


?>