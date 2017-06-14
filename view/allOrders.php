<?php
  echo "<table>";
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
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
  }
  
echo "</table>";


?>
