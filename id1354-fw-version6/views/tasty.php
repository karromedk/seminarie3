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
  	<h1> Welcome to Tasty Recipes</h1>
  	<p id="corners">	
  	On Tasty Recipes you can find various recipes for all around the year. Need some help deciding what to choose?
  	Take a look at our most popular recipes or check out the latest dishes we have added to the Calender. 
  	You find the Calender at the top of this page or <a href="calender.html">Here</a></p><br>
  </section>
  </body>
</html>