


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-wid th, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Doc</title>
</head>
<body>
  <?php
require_once 'connection.php'; // подключаем скрипт
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
// выполняем операции с базой данных
     
// закрываем подключение
mysqli_close($link);
?>


<?php
require_once 'connection.php'; // подключаем скрипт
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
// выполняем операции с базой данных
$query ="SELECT * FROM zakaz";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "";
}
 
// закрываем подключение
mysqli_close($link);
?>
<?php
require_once 'connection.php'; // подключаем скрипт
 
if(isset($_POST['name']) && isset($_POST['number'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $number = htmlentities(mysqli_real_escape_string($link, $_POST['number']));
     
    // создание строки запроса
    $query ="INSERT INTO zakaz VALUES(NULL, '$name','$number')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'></span>";
    }
    // закрываем подключение
    mysqli_close($link);
}
?>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-xxl" >
    <a class="navbar-brand" href="index.html">Главная</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="info.html">Фото работ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="photo.html">Контакты</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Услуги
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#"></a></li>
            <li><a class="dropdown-item" href="1.html">Услуги грузчиков</a></li>
            <li><a class="dropdown-item" href="2.html">Грузоперевозки</a></li>
            <li><a class="dropdown-item" href="3.html">Квартирные переезды</a></li>
            <li><a class="dropdown-item" href="4.html">Офисные переезды</a></li>
            <li><a class="dropdown-item" href="5.html">Дачный переезд</a></li>
            <li><a class="dropdown-item" href="6.html">Срочные переезды</a></li>
            <li><a class="dropdown-item" href="7.html">Упаковка мебели и вещей</a></li>
            <li><a class="dropdown-item" href="8.html">Услуги разнорабочих</a></li>
            <li><a class="dropdown-item" href="9.html">Вывоз мусора</a></li>
          </ul>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="zakaz.php">Сделать заказ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </header>
  <br>
  <section class="container-xxl">
          
        <br>
    <div class="row">

    <h2>Сделать заказ</h2>
    <br>
    <br>
     <br>
      <br>
       <br>
<form method="POST">

<p>Укажите услугу:</p>
<input type="text" name="name" class="form-control" /></p>
<p>Укажите номер телефона:</p>
<input type="text" name="number" class="form-control" /></p>
<input type="submit" value="Добавить" class="btn btn-success">
  </div>
          <br>
   <br>
    <br>
     <br>
      <br>
       <br>
        <br>
  </section>
  <footer>
    <div class="footer-top">
      <div class="container-xxl">
<div class="row">
   <div class="col-8">
     <img src="img/1.png" alt="logo">
    </div>
    <div class="col-4">
      <h4 class="font1">ИП Шагапов Сергей Витальевич</h4>
      <h4 class="font1">г. Амурск, пр. Строителей 47</h4>
      <h4 class="font1">888-888-888</h4>
 
      </div>

    <br>
    <br>
    <br>
    <br>
    <hr class="font1">
    <p class="font1">@ВозимГрузы, Амурск. Все права защищены<p>
</div>
</div>
</div>


  </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
