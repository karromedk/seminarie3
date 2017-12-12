<!DOCTYPE html>
<html>
  <head>
    <title>Tasty recipes</title>
    <link rel="stylesheet" type="text/css" href="/id1354-fw-version6/resources/css/tastyy.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
  <body> 
      <?php
  use TastyRecipes\Controller\Login;
  //use TastyRecipes\Controller\CreateAcc;
  //use TastyRecipes\Controller\Login_status_check;

  ?>
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
<h1>Log in to Tasty Recipe</h1>
<?php

if(isset($message)){
  echo $message;
}

?>
<div>
  	<div class='form'><form method='POST' action='LoginPage'>
      Username: <input type='text' name='uid'>
      Password: <input type='password' name='pwd'>
      <input type="submit" name="login" value="Log in">
    </form>
</div>
  </section>
  </body>
</html>
