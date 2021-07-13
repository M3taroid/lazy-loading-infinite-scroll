<?php 

try{
    $conn = new PDO("mysql:host=localhost;dbname=lazy_data", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
  echo "Erreur : " . $e->getMessage(); die();
}


if (isset($_GET['p']) AND $_GET['p'] != '') {
	$start = intval($_GET['p']);
	$users = $conn->query("SELECT * FROM users limit $start, 2");
	$html = "";

	foreach ($users as $user) {
		$html .= "
					<div class='card mt-2' style='width: 18rem;''>
					  <img class='card-img-top' src='img.png' alt='Card image cap'>
					  <div class='card-body'>
					    <h5 class='card-title'>". $user['name'] ."</h5>
					    <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href='#'' class='btn btn-primary'>Go somewhere</a>
					  </div>
					</div>
				";
	}

	$return = array('result' => "OK", 'html' => $html);
    die(json_encode($return));
	
}else{

	$start = 0;
	$users = $conn->query("SELECT * FROM users limit $start, 6");
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lazy Loading - Infinite Scroll</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<div class="container-fluid mt-1">
		<nav class="nav nav-pills flex-column flex-sm-row ">
		  <a class="flex-sm-fill text-sm-center nav-link active" href="#">Index Page</a>
		</nav>
		
		<div class="row ">
			<div class=" col ">
				
				<h1>Users List :(</h1>

				<div id="block"></div>

				
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-2.2.4.min.js"
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous"></script>

	<script type="text/javascript">
		
		$(function () {
			let p = 0;
			const loadMore = (start) => {
				url = 'index.php?p=' + start
				$.get(url, function(data){
			           if(data.result === 'OK'){
			       			$('#block').append(data.html) 
			       			p += 5
			       		}
			        }, 'json');
			}

			loadMore(p)
			$(window).scroll(function(){
				if($(window).scrollTop() >= $(document).height() - $(window).height()){
					loadMore(p)

				}
			})
		})
	</script>

</body>
</html>