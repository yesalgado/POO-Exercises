<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Reconstructing the Person class</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<h1>Ejercicio CodeAcademy</h1>

	<?php

	#Create a dog class, 
	#Add a public property called #numlegs which store the value = 4
	#Add another public property called $name, which doesn't contain a value
	#Add the __construct(), which accepts $name as a parameter.

	class dog{

		public $numlegs = 4;
		public $name;


		public function __construct($name)
		{

			$this->name = $name;

		}


	};



	?>

	
</body>
</html>