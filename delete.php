<?php 
$id=$_GET['id'];
$con = new PDO('mysql:host=localhost;dbname=farhad', 'root', '');
$farhad=$con->prepare('delete from mytable where id=:id');
$farhad->execute([
  ':id' => $id
]);
header('location:index.php');
?>