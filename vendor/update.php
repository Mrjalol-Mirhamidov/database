

<? 

require_once '../connect.php';

$object = $_POST['object'];
$shop = $_POST['shop'];
$backdate = $_POST['backdate'];
$subject = $_POST['subject'];


mysqli_query($connect , "UPDATE `uty` SET `object` = '$object', `shop` = '$shop', `backdate` = '$backdate' `subject` = $subject")



?>

