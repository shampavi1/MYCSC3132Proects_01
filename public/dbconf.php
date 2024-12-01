<?php
define('SERVERNAME','127.0.0.1:3306');
define('USERNAME','root');
define('PASSWORD','mariadb');
define('DNAME','school');

//connect with database
$connect=mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DNAME);
    if(!$connect){
        die("connection failed".mysqli_connect_error());
    }
    else{
        echo "connectection successfully";
    }
}
catch (Execption $e){
    die($e->getMessage());
}
?>