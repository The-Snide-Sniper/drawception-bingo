<!DOCTYPE html>
<html>
  <head>
    <title><?php echo htmlspecialchars($_GET['board']); ?> - Drawception Bingo</title>
    <link rel="stylesheet" href="./<?php echo urlencode($_GET['board']) ?>/bingo.css" />
  </head>
  <body>
    <table>
      <tr>
        <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
      </tr>
      <tr>
        <td>
          <?php
        $possible_tiles = file("./boards/" . urlencode($_GET['board']) . "/tiles.txt");
        $tiles = array();
        for ($i = 0; $i < 5; $i++) {
          $row = array();
          for ($j = 0; $j < 5; $j++) {
            array_push($row, array_splice($possible_tiles, rand(0, count($possible_tiles) - 1), 1)[0]);
          }
          array_push($tiles, implode($row, "        </td>\n        <td>\n          "));
        }
        echo implode($tiles, "        </td>\n      </tr>\n      <tr>\n        <td>\n          ");
        ?>        </td>
      </tr>
    </table>
  </body>
</html>
