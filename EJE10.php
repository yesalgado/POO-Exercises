<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Scope it Out</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<h1>Ejercicio CodeAcademy</h1>

	<?php

	class Person{

	
	}

	class Ninja extends Person{

		const stealth = 'MAXIMUM';

	}


	if (Ninja::stealth) {
		
		echo Ninja::stealth;
	}




	?>

</body>
</html>