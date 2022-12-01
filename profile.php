<?php
	session_start();
  if (!$_SESSION['user']) {
      header('Location: /'); }
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Профиль</title>
  <link rel="stylesheet" href="assets/css/main.css">
  
</head>
<body>

    <!-- Профиль -->
<form >
<img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <p>Your id: <?= $_COOKIE['id'] ?></p>
         <a href="vendor/logout.php" class="logout">Выход</a>
       
    </form>
     

 
</body>
</html>


</body>
</html>