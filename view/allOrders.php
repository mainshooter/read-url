<?php
echo "<div class='col-8'>";
  echo "<table>";
  echo "<tr>";
  foreach ($orderHeaders as $row) {
      echo "<th>" . $row . "</th>";
    }
    echo "</tr>";

  foreach ($orders as $row) {
    echo "<tr>";
    foreach ($row as $key => $value) {
      if ($key == 'idOrder') {
          echo "<td><a href='order/read/" . $value . "'>" . $value . "</a></td>";
      }
      else {
          echo "<td>" . $value . "</td>";
      }
    }
    echo "</tr>";
  }

echo "</table>";
echo "</div>";


?>
