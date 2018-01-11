<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="./bingo.css" />
  </head>
  <body>
    <table>
      <tr>
        <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
      </tr>
      <tr>
        <?php
        $tiles = file("./boards/" . $_GET['board'] . ".txt");
        ?>
      </tr>
    </table>
  </body>
</html>
