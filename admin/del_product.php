<?php session_start(); 
if(!isset($_SESSION['admin_id'])){
    header("location:index.php");
    }
?>
<?php 
include("inc/db.php");
$did=$_GET['id'];

$del="DELETE FROM products WHERE product_id='$did'";
$con->query($del);

header("location:list-product.php");

?>