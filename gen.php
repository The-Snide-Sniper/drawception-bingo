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
        $possible_tiles = file("./boards/" . $_GET['board'] . ".txt");
        $tiles = array();
        for ($i = 0; $i < 5; $i++) {
          $row = array();
          for ($j = 0; $j < 5; $j++) {
            array_push($row, array_splice($possible_tiles, rand(0, count($possible_tiles) - 1))[0]);
          }
          array_push(implode($row, "<\/td><td>"));
        }
        echo implode($tiles, "<\/td><\/tr><tr><td>");
        ?>
      </tr>
    </table>
  </body>
</html>
