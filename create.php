<? 
require_once 'connect.php';
?>


<?

//print_r($_POST);

$object = $_POST['object'];
$shop = $_POST['shop'];
$backdate = $_POST['backdate'];
$subject = $_POST['subject'];

mysqli_query($connect, "INSERT INTO `temir` (`object`, `shop`, `backdate`, `subject`) VALUES ('$object', '$shop', '$backdate', '$subject')");


exit("<meta http-equiv='refresh' content='1; url= /index.php'>");
?>



