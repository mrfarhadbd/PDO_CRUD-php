<?php
 $con =new PDO('mysql:host=localhost;dbname=farhad', 'root', '');
$my =$con->prepare("select * from mytable");
$my->execute();
$students=$my->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
<head>
	<title>database</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	</style>
</head>
<body>
	
	 <?php require 'nav.php'; ?>
	 <div class="container">
<h1>show student list by query</h1>
<table class="table table-bordered">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th></th>
		
	</tr>
	<?php foreach ($students as $student) : ?>
	<tr>
		<td><?php echo $student->id; ?></td>
		<td><?php echo $student->name; ?></td>
		<td><?php echo $student->email; ?></td>
		
		 <td>
      <a href="edit.php?id=<?php echo $student->id ?>" class="btn btn-primary">edit</a> 
      <a class="btn btn-info" href="delete.php?id=<?php echo $student->id ?>">Delete</a></td>
	</tr>
	<?php endforeach ; ?>
</table>
</div>
</body>
</html>