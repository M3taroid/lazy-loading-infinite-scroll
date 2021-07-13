<?php 

try{
    $conn = new PDO("mysql:host=localhost;dbname=lazy_data", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
  echo "Erreur : " . $e->getMessage(); die();
}

$users = $conn->query("SELECT * FROM users");

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lazy Loading - Infinite Scroll</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<div class="container-fluid mt-5">
		<nav class="nav nav-pills flex-column flex-sm-row justify-content-center">
		  <a class="flex-sm-fill text-sm-center nav-link active" href="#">Index Page</a>
		</nav>
		
		<div class="row">
			<div class="col">
				
				<h1>Users List :(</h1>

				<?php foreach ($users as $user): ?>
					<div>
						<?= $user['name'] ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

</body>
</html>