<?php 

function myAutoload($class) {
	if(pregmatch('/\A\w+\Z/', $class)){
		include 'classes/' . $class . '.class.php';
	}

	spl_autoload_register('myAutoload');
	
}

$bike = new Bicycle;
$bike->brand = 'Ninos';
echo $bike->brand;

?>