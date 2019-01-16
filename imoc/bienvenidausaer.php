<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<style type="text/css" media="screen">
	.sectioncontenedor{
			margin-top: 100px;
		}

</style>

<section class="sectioncontenedor">
<div class="contenedor">
	
	<?php 
if ( !empty($_GET["como"]) && is_array($_GET["como"]) ) {
echo "<ul>";
foreach ( $_GET["como"] as $como ) {
echo "<li>";
echo $como;
echo "</li>";
}
echo "</ul>";
}


	 ?>



</div>	
</section>

<style>

	
</style>

	
</body>
</html>