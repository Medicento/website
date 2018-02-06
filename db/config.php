<?php
    /**
	 * These are the database login details
	 */
    define("HOST", "localhost"); 			// The host you want to connect to. 
	define("USER", "root"); 			// The database username. 
	define("PASSWORD", "root"); 	// The database password. 
	define("DATABASE", "test");             // The database name.	

    define("CAN_REGISTER", "any");
    define("DEFAULT_ROLE", "cpanel");

    define("SECURE", FALSE);    // For development purposes only!!!!	

/* #**********************************#
   *                                  *
   *                                  *
   *                                  *
   ************************************
*/

//Connection End*********************
//Connection Required****************

		$link = @mysqli_connect(HOST, USER, PASSWORD, DATABASE);

		if (!$link) 
		{
			echo "Error: Unable to connect to MySQL." . PHP_EOL;
			echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
			echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
			exit;
		}
		
		
		// Report simple running errors
		error_reporting(E_ERROR | E_WARNING | E_PARSE);

		// Reporting E_NOTICE can be good too (to report uninitialized
		// variables or catch variable name misspellings ...)
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

		// Report all errors except E_NOTICE
		error_reporting(E_ALL & ~E_NOTICE);

		// Report all PHP errors (see changelog)
		error_reporting(E_ALL);

		// Report all PHP errors
		error_reporting(-1);

		// Same as error_reporting(E_ALL);
		ini_set('error_reporting', E_ALL);
		
		// Turn off all error reporting
		error_reporting(0);
?>

