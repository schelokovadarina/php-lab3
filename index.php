<?php
	session_start();
	if ($_SESSION['user']) {
		header("Location: profile.php");
	}
	require 'vendor/autoload.php';
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form on HTML5</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Paper Stack</title>
  <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<div class="container">
  <section id="content">
    <form action="vendor/signin.php" method="POST">
      <h1>Login</h1>
      <div>
        <input name="login" type="text" placeholder="Username" required="" id="username" />
      </div>
      <div>
        <input name="password" type="password" placeholder="Password" required="" id="password" />
      </div>
      <div>
        <input type="submit" value="Log in" />
        <a href="#">Lost your password?</a>
        <a href="registration.php">Register</a>
      </div>
    </form><!-- form -->

  </section><!-- content -->
</div><!-- container -->
</body>
</html>


</body>
</html>