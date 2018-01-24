<?php 
$id=$_GET['id']
$con = new PDO('mysql:host=localhost;dbname=farhad', 'root', '');
$my = $con->prepare('select * from mytable where id=:id');
$my->execute([
':id'=>$id
]);
$student =$my->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html>
<head>
	<title>insert people</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="card">
		<div class="card-header">
			<h1>update people</h1>
		</div>
	<div class="card-body">
		<form action="" method="POST">
			<div class="from-group">
				<label for="name">name</label>
				<input value="<?php $student->name; ?>" type="text" name="name" id="name" class="form-control">
			</div>
			<div class="from-group">
				<label for="email">email</label>
			<input value="<?php $student->email; ?>" type="text" name="name" id="name" class="form-control">
			</div>
			<div class="from-group">
				<button class="btn btn-outline-primary" type="submit">update people</button>
			</div>
		</form>
		</div>
		</div>	
</div>
</body>
</html>