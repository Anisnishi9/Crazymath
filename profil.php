<?php 
	$db = mysqli_connect ("localhost", "root", "", "crazymath");
	$id = $_GET['id'];
	$query = "SELECT * FROM scores WHERE id = '$id'";
	$hasil = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Crazy Math</title>
</head>
<body>
	<h1>USER PROFIL</h1>
	<?php
	$data = mysqli_fetch_array($hasil);
	echo "<h2>Username : ".$data['username']."</h2>";
	echo "<img src='photos/".$data['foto']."'>";
	?>
</body>
</html>