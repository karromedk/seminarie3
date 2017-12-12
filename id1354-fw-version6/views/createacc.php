<!DOCTYPE html>
<html>
  <head>
    <title>Tasty recipes</title>
    <link rel="stylesheet" type="text/css" href="/id1354-fw-version6/resources/css/tastyy.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
  <body> 
  	<ul>
  <li><a href="/id1354-fw-version6/seminarie/View/FirstPage">Home</a></li>
  <li><a href="/id1354-fw-version6/seminarie/View/MeatballPage">Recipe 1</a></li>
  <li><a href="/id1354-fw-version6/seminarie/View/PanncakesPage">Recipe 2</a></li>
  <li><a href="/id1354-fw-version6/seminarie/View/CalenderPage">Calender</a></li>
  <?php

  if($this->session->get('uid')!==false){
    echo '<li style="float:right"><a href="/id1354-fw-version6/seminarie/View/LogoutPage">Log out</a></li>';
  } else{
    echo '<li style="float:right"><a href="/id1354-fw-version6/seminarie/View/LoginPage">Log in</a></li>';
    echo '<li style="float:right"><a href="/id1354-fw-version6/seminarie/View/CreatePage">Create account</a></li>';
  }

  ?>
</ul>
<section>
  <h1>Sign up as a new user</h1>

<?php if (isset($message)) { echo $message; } ?>

  <p>Fill in the boxes with a username and a password</p><br>
  	<form action="CreatePage" method="post">
<input type="text" name="uid" placeholder="Username"/>
<input type="password" name="pwd" placeholder="Password" />
<input type="submit" name="signup" value="Sign up">
</form>
  </section>
  </body>
</html>