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

	#Create a dog class, 
	#Add a public property called #numlegs which store the value = 4
	#Add another public property called $name, which doesn't contain a value
	#Add the __construct(), which accepts $name as a parameter.

	class dog{

		public $numlegs = 4;
		public $name;

		public function __construct($name)
		{

			$this->name= $name;

		}

		#Add a public method called bark()

		public function bark()
		{

			echo "Woof!";
		}

		#Add a public method called greet()

		public function greet()
		{

		$Saludo = "Hello, my name is: ";
		echo $Saludo;
		return $this->name; 

		
		}

	};



	$dog1 = new dog("Barker");
	$dog2 = new dog("Amigo");

	#Call the bark() method on $dog1 and echo the result;

	echo $dog1->bark();


	#Call the greet() method on $dog2 and echo the result;

	echo "<br>";
	echo $dog2->greet();

	?>

	
</body>
</html>