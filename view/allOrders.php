<?php
  echo "<table class='col-12'>";
  foreach ($orderHeaders as $row) {
    echo "<tr>";
    foreach ($row as $key => $value) {
      echo "<th>" . $key . "</th>";
    }
    echo "</tr>";
  }

  foreach ($orders as $row) {
    echo "<tr>";
    foreach ($row as $key => $value) {
      if ($key == 'idOrder') {
          echo "<td><a href='order/readOrder/" . $value . "'>" . $value . "</a></td>";
      }
      else {
          echo "<td>" . $value . "</td>";
      }
    }
    echo "</tr>";
  }

echo "</table>";


?>
