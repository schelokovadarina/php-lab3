<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login Form on HTML5</title>
  <link rel="stylesheet" href="styles.css">
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
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
</head>
<body>
<div class="container">
  <section id="content">
    <form action="vendor/signup.php" method="POST">
      <h1>Registration</h1>
      <div>
        <input type="text", name="login", placeholder="Enter a username" required="" id="username" />
      </div>
      <div>
        <input type="text", name="full_name", placeholder="Enter a full name", required="", id="full_name">
      </div>
      <div>
        <input type="email", name="email", placeholder="Enter a email", required="", id="email">
      </div>
      <div>
        <input type="password", name="password" placeholder="Enter a password" required="" id="password" />
      </div>
      <div>
        <input type="password", name="repeat_password" placeholder="Repeat password" required="" id="rep_password" />
      </div>
      <div>
        <input type="submit" value="Register" />
        <a href="index.php">Log in</a>
      </div>
    </form><!-- form -->

  </section><!-- content -->
</div><!-- container -->
</body>
</html>


</body>
</html>