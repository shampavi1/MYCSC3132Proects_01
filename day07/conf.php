<?php
define('SERVER', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DB', 'library_icae');
$conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DB);

	if ($conn) {
		//echo "Databases connected successfuly";
	}
	else{
		die("Connection failed ".mysqli_connect_error());
	}

?>