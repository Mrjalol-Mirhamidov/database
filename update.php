
<? 
require_once 'connect.php';

$uty1_object = $_GET['object'];
$uty1 = mysqli_query($connect, "SELECT * FROM `uty` WHERE `id` = '$uty1_object ' ");
$uty1 = mysqli_fetch_assoc($uty1);
print_r($uty1)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>Изменить тавар</h1>



   <form action="vendor/create.php" method="POST">
        
         <input type="text" name="id" value="<?= $uty['object']?>" id="" >
         <p>Техт</p>
         <input type="text" name="title" value="<?= $uty['shop']?>" id="" >
         <p>Цена</p>
         <input type="text" name="price" value="<?= $uty['backdate']?>" id="">
         <p>Описание</p>
         <textarea name="description" id="" cols="30" rows="10"><?= $uty['subject']?></textarea>
         <br>
         <br>
         <br>
         <button type="submit">Доьавить новый продукт</button>
    </form>
    
</body>
</html>