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

	#Add a public $isAlive property to the person class
	#Add 3 further public properties to the person class: $firstname, $lastname and $age

	class Person{

		public $isAlive = true;
		public $firstname;
		public $lastname;
		public $age;


	};


	$teacher = new Person();

	#echo the value of the $teacher $isAlive propierty
	echo $teacher->isAlive;
	
	$studen = new Person();



	?>

	
</body>
</html>