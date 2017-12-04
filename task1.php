<?php 

 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
		section {
			padding: 5px;
			border: 1px solid purple;
			border-radius: 20px;
			width: 300px;
			display: -webkit-flex;
			display: -moz-flex;
			display: -ms-flex;
			display: -o-flex;
			display: flex;
			justify-content: space-between;
		}
		#cond {
			border: 1px solid red;
			border-radius: 15px;
			background-color: silver;
			text-align: center;
		}
	</style>
	<title></title>
</head>
<body>
	<section>
		<div>
			<h1><?php echo $_POST['cars'] ;?></h1>
			<p id="cond"><?php echo (strlen($_POST['condition'])>0)? $_POST['condition']:"";  ?></p>
			<img width="150px" height="150px;" src="https://img.autoplus.fr/picture/bugatti/chiron/1502078/Bugatti_Chiron_2016_83002-1200-800.jpg">
			<p><?php echo empty($_POST['attributes1'])?"":$_POST['attributes1']." ";
			echo empty($_POST['attributes2'])?"":$_POST['attributes2']." ";
			echo empty($_POST['attributes3'])?"":$_POST['attributes3']." ";?></p>
		</div>
		<div>
			<p><?php echo $_POST['price'] ;?></p>
			<p><u><?php echo $_POST['select'] ;?></u></p>
		</div>
	</section>
</body>
</html>