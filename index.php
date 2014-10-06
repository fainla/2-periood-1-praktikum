<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content type" content="text/html; charset=utf-8">
</head>
<body>
<?php echo "Esimene leht" ?><br>
<?php $link_file="second_page.php";
$age =32;
 ?>
<a href="second_page.php?age=32">Second page</a>

<?php
	print_r($_GET);
?>

<?php 
	$jada = array('frank', '24');
	echo $jada[1];
?>


<?php echo "<h1>" . $_GET["name"] . "</h1>"; ?>  

<?php  echo "Minu nimi on " . $_GET["name"] . $_GET["age"] ?>
</body>
</html>