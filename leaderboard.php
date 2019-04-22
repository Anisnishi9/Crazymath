<?php 
	$db = mysqli_connect ("localhost", "root", "", "crazymath");
	$query = "SELECT * FROM scores ORDER BY score LIMIT 0, 10";
	$hasil = mysqli_query($db, $query);
?>

<html>
<head>
	<title>Crazy Math Leaderboard</title>
</head>
<body>
	<h1>Crazy Math Leaderboard</h1>
	<table>
		<tr><th>Usernae</th><th>Score</th><th>Playtime</th></tr>
			<?php 
			while ($data = mysqli_fetch_array($hasil)){
				echo "<tr>";
				echo "<td><a href='profil.php?id=".$data['id']."'>".$data['username']."<td>";
				echo "<td>".$data['score']."<td>";
				echo "<td>".$data['playtime']."<td>";
				echo "</tr>";
							}
			?>
	</table>
	<br><br><a href='index.php'>MASUK</a></font>
</body>
</html>