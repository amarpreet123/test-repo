<?php
$employeeAges;
$employeeAges["Lisa"] = "28";
$employeeAges["Jack"] = "16";
$employeeAges["Ryan"] = "35";
$employeeAges["Rachel"] = "46";
$employeeAges["Grace"] = "34";

foreach( $employeeAges as $name => $age){
	echo "Name: $name, Age: $age <br />";
}

?>