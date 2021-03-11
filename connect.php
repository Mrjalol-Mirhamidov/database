<?

// phpinfo();

//$connect = mysqli_connect(); // php 7 


define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'bro1400');

$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
if(!$connect){
    die('error');
}

?>