<!DOCTYPE html>
<html lang="en">

<head>
  <title>CSS Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <header>
    <h2>Cities</h2>
  </header>

  <section>
    <nav>
      <ul>
        <li><a href="?p=home">HOME</a></li>
        <li><a href="?p=about">ABOUT</a></li>
        <li><a href="?p=contact">CONTACT</a></li>
        <li><a href="?p=email">EMAIL</a></li>
        <li><a href="?p=searvices">SEARVICES</a></li>
        <li><a href="?p=product">PRODUCT</a></li>
      </ul>
    </nav>


    <article>
      <?php
      if (isset($_GET['p'])) {
        if (file_exists($_GET['p'] . 'php')) {
          print("<h1 class='title_view'>".ucwords(str_replace('_', ' ', $_GET['p']))."</h1>");
          include_once($_GET['p'] . '.php');
        } else {
          print('<h1 class="title_view">security worning</h1>');
          include_once('security.php');
        }
      } else {
        echo "<h1>Home page</h1>";
      }
      ?>
      <h1>home</h1>
    </article>

  </section>
  <footer>
    <p>Footer</p>
  </footer>

</body>

</html>