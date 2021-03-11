<? 
require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
</head>
<body>



<button onclick="document.querySelector('.format').style ='display:flex'" id="btn_add">Add</button>


<!-- <form class="search" name="search" method="post" action="">
    <input type="search" name="query" placeholder="Поиск">
    <button type="submit">Найти</button> 
</form> -->



<div class="format">
<form class="form" action="create.php" method="POST">
<span id="btn_x" onclick="abs()">X</span>
         <span id="form_span"><p>Тепловоз:</p>
         <input type="text"  name="object" id="bir" onchange="func()"></span>
         <span id="form_span"><p>Отвественный:</p>
         <input type="text" name="shop" id="ikki"></span>
         <span id="form_span"><p>Дата прибытие:</p>
         <input type="date" name="backdate" id=""></span>
         <span id="form_span"><p>Причина:</p>
         <textarea name="subject" id="" cols="30" rows="10"></textarea></span>
         <br>
         <button type="submit">Добавить</button>
    </form>
</div>
    
<div class="container">
<? 

$uty = mysqli_query($connect, "SELECT * FROM `temir`");
$uty = mysqli_fetch_all($uty);

foreach($uty as $uty1){  
?>

       <div class="class">
        <span id="w"><h1>Teпловоз:</h1><?= $uty1[1]?></span>
        <span id="a"><h1>Отвественный:</h1><?= $uty1[2]?></span>
        <span id="b"><h1>Дата прибытие:</h1><?= $uty1[3]?></span>
       <span id="c"><h1>Причина:</h1> <?= $uty1[4]?></span>
       <p class="absd"><?= $uty1[0]?></p>
        
       </div>
    
    
<?

}

?>

</div>


  
  <script src="script.js"></script>
<!--   
// show.onclick(function(){
//     document.querySelector('.form').style ="display:block";
// }); -->

</body>
</html>