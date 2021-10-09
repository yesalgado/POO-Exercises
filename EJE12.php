<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exercise</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<h1>Ejercicio CodeAcademy</h1>

	<?php

	#Create a person class
	class Person{

		#Use the static keyword
		public static function say()
		{

			echo "Here are my thoughts!";

		}

	}

	#Create a Blogger class, that inherits from Person
	class Blogger extends Person{

		const cats = 50;
	}

	#Scope resolution to call Blogger's inherited say() method without creating an instance of the class.
	
	Blogger::say();
	echo "<br>";
	echo Blogger::cats;

	?>

</body>
</html>