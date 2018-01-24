<?php 
$id = $_GET['id'];
$con = new PDO('mysql:dbname=farhad;host=localhost', 'root', '');
$statement = $con->prepare('select * from mytable where id=:id');
$statement->execute([
  ':id' => $id
]);
$student = $statement->fetch(PDO::FETCH_OBJ);
if ( isset ($_POST['name']) && isset($_POST['email'])) {
  echo 'hello world';
  $statement = $con->prepare('update mytable set name=:name, email=:email where id=:id');
  $statement->execute([
    ':name' => $_POST['name'],
    ':email' => $_POST['email'],
    ':id' => $id
  ]);

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All student</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
  <?php require 'nav.php'; ?>
  <div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h2>update student</h2>
      </div>
      <div class="card-body">
       <form action="" method="post">
         <div class="form-group">
          <label for="name">name</label>
          <input value="<?= $student->name ?>" type="text" name="name" id="name" class="form-control">
         </div>
         <div class="form-group">
           <label for="email">email</label>
           <input value="<?= $student->email ?>" type="text" name="email" id="email" class="form-control">
         </div>
         <div class="form-group">
           <button type="submit" class="btn btn-outline-info">update teacher</button>
         </div>
       </form> 
      </div>
    </div>
  </div>
  
</body>
</html>