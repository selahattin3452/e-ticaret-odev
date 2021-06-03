<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=designbynex_proje;charset=utf8",'root','');
	

	

} catch (PDOExpception $e) {

	echo $e->getMessage();
}

?>