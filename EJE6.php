<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Practice makes perfect!</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<h1>Ejercicio CodeAcademy</h1>

	<?php

	#Create a cat class, 
	#Add a public property called #numlegs which store the value = 4, $isAlive = true;
	#Add the __construct(), which accepts $name as a parameter.

	class cat{

		public $numlegs = 4;
		public $isAlive = true;

		public function __construct($name)
		{

			$this->name= $name;

		}


		#Add a public method called meow()

		public function Meow()
		{

			echo "Meow meow, ";
			return $this->name;
		}


	};



	$CodeCat = new cat("Codecat");

	#Call the Meow() method on $CodeCat and echo the result;

	echo $CodeCat->Meow();


	?>

	
</body>
</html>