<?php 
	include "connection.php";
	session_start();

	$strength = $_POST['strength'];
	$health = $_POST['health'];
	$willpower = $_POST['willpower'];
	$intellect = $_POST['intellect'];
	$charisma = $_POST['charisma'];
	$exp = $_POST['exp'];

	$update = "UPDATE stats SET
				strength=$strength,
				health=$health,
				willpower=$willpower,
				intellect=$intellect,
				charisma=$charisma,
				exp=$exp
			WHERE id='1'";

	$mysqli->query($update);

	/*echo "strength: ".$strength;
	echo "health: ".$health;
	echo "willpower: ".$willpower;
	echo "intellect: ".$intellect;
	echo "charisma: ".$charisma;*/
?>