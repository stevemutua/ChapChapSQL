<?php

/*
 *--------------------------------------------------------------------------------------------------------------------------
 * ChapChapSQL v2.0.0 (https://kelvinkamau.github.com/ChapChapSQL) | (c) 2017 Kelvin Kamau /  License: MIT
 *--------------------------------------------------------------------------------------------------------------------------
 */
// require ChapChapSQL
require_once("assets/chapchapsql.min.php");

// create a new instance
$conn = new chapchapsql();

// set database credentials
try {
	$conn->set_credentials_via_json_file("assets/credentials.json");
} catch (Exception $e) {
	$conn->pretty_print($e->getMessage());
}


// test & debug
try {
	// your code goes here
	// [...]
} catch (Exception $e) {
	$conn->pretty_print($e->getMessage());
}

// destroy the instance
$conn->__destruct();
unset($conn);

?>
