<?php
date_default_timezone_set('Europe/Stockholm');
$recipe= 'panncakes';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Panncakes</title>
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
<h1> Panncakes</h1>
    <h2> Ingredients </h2>
    <ul class="desc">
 <li>1 1/2 cups flour</li>
 <li>3 1/2 teaspoons baking powder</li>
 <li>1 teaspoon salt</li>
 <li>1 tablespoon sugar</li>
 <li>1 egg</li>
 <li>1 1/4 cups milk</li>
 <li>3 tablespoons of butter</li></ul>
 <br>
  <h2> Description </h2>
  <p>
In a large bowl, sift together the flour, baking powder, salt and sugar. Make a well in the center and pour in the milk, egg and melted butter; mix until smooth.
Heat a lightly oiled griddle or frying pan over medium high heat. Pour or scoop the batter onto the griddle, using approximately 1/4 cup for each pancake. Brown on both sides and serve hot..</p>
    <img src="/id1354-fw-version6/resources/images/pannkakor.jpg" alt= panncakes width="300" height="300">
    <div class=comments>

      <h3> Comments</h3>
      <?php

      if ($this->session->get('uid') !==false) {
        ?>
        <form action='PanncakesPage' method='POST'>
          <input type='hidden' name='recipe' value='panncakes' />
            <textarea name='message' placeholder='Enter text here...'></textarea>
            <br>
            <br>
            <button type='submit' name='comment'>Comment </button>
          </form>
          <?php
          } else {
            echo "You can not comment since you are not logged in!";
          }

echo '<pre>';
foreach ($comments as $comment)
{
  ?>
    <div class="c1">
      <p>
        <?php echo $comment['date']; ?><br />
        <?php echo $comment['uid']; ?><br />
        <?php echo nl2br($comment['message']);

        if($this->session->get('uid')===$comment['uid']){
          echo '<button href="PanncakesPage?delete=' . $comment['cid'] . '">Delete</button>';
        }
        
        ?>
      </p>
    </div>
  <?php
}
echo '</pre>';

?>
    </div>
  </section>
  </body>
</html>