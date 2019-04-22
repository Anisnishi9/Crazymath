<?php
setcookie('username', '', time()-3600);
echo "<br>Coocie Sudah Terhapus<br>";


$now = date("d/m/Y h:i");
echo "<br>Waktu Sekarang $now<br>";
echo "<a href='index.php'>MASUK</font></a><br><br>";
?>