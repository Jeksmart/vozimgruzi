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
  <div class="container mt-4">

    <?php
    if($_COOKIE['user'] == ''):
    ?>

   <div class="row";>
   
 <div class="col";>
    
<h1>Форма авторизации</h1>
<form action="auth.php" method="post">
  <input type="text" class="form-control" name="login"
  id="login" placeholder="Введите логин"> <br>

    <input type="password" class="form-control" name="pass"
  id="pass" placeholder="Введите пароль"> <br>
  <button class="btn btn-success">Авторизоваться</button> 
  </form>
</div>
<?php else: ?>
<p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a
  href="exit.php">здесь</a>.</p>
  

<?php endif;?>

</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
