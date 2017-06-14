<?php
echo "<div class='col-8'>";
  echo "<table>";

echo "<tr>";
  foreach ($orderHeaders as $row) {
      echo "<th>" . $row . "</th>";
  }
echo "</tr>";

  foreach ($orderDetails as $row) {
    echo "<tr>";
    foreach ($row as $key => $value) {
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";

echo "<table>";
    echo "<tr>";
    foreach ($orderItemHeader as $key) {
      echo "<th>" . $key . "</th>";
    }
    echo "</tr>";

  foreach ($orderItems as $row) {
    echo "<tr>";
    foreach ($row as $key => $value) {
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
echo "</div>";


?>
