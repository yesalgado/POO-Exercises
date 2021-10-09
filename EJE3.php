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


	class Person{

		public $isAlive = true;
		public $firstname;
		public $lastname;
		public $age;

		#Add a constructor to person with 3 parameters created before.

		public function __construct($firstname,$lastname,$age)
		{

			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->age = $age;

		}


	};

	




	#$teacher = new Person();
	#Change your $teacher instantiation to store the following:

	$teacher = new Person("boring","123456",12345);

	#Add your $fistname, $lastname and $age in the same manner.

	$student = new person("Yesner Alexander","Tellez Salgado",26);

	#echo the $age of $student

	echo $student->age;


	?>

	
</body>
</html>