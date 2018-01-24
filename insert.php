<?php 
if (isset($_POST['name']) && isset($_POST['email'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];

$con = new PDO('mysql:host=localhost;dbname=farhad', 'root', '');
$my = $con->prepare("insert into mytable(name, email) values('$name', '$email')");
$my->execute([
':name'=>$name,
':email'=>$email
]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>insert people</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
	 <?php require 'nav.php'; ?>
<div class="container">
	<div class="card">
		<div class="card-header">
			<h1>inser a people</h1>
		</div>
	<div class="card-body">
		<form action="" method="POST">
			<div class="from-group">
				<label for="name">name</label>
				<input type="text" name="name" id="name" class="form-control"/>
			</div>
			<div class="from-group">
				<label for="email">email</label>
				<input type="email" name="email" id="email" class="form-control"/>
			</div>
			<div class="from-group">
				<button class="btn btn-outline-primary" type="submit">add people</button>
			</div>
		</form>
		</div>
		</div>	
</div>
</body>
</html>