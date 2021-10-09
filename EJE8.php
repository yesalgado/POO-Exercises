<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>The Shape of Things to Come</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<h1>Ejercicio CodeAcademy</h1>

	<?php

	#Create a Shape and Square class



	class Shape{

		public $hasSides = true;


	}

	class Square extends Shape{



	}

	$square = new Square();

	#Complete the if statement, using property_exists

	if (property_exists('Shape', 'hasSides')) {
		
		echo "I have sides!";
	}else
	{
		echo "I don't have sides!";
	}


	?>

</body>
</html>