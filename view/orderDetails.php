<?php
  echo "<table>";

  foreach ($orderHeaders as $row) {
    echo "<tr>";
    foreach ($row as $key => $value) {
      echo "<th>" . $key . "</th>";
    }
    echo "</tr>";
  }

  foreach ($orderDetails as $row) {
    echo "<tr>";
    foreach ($row as $key => $value) {
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
  }

  foreach ($orderItemHeader as $row) {
    echo "<tr>";
    foreach ($row as $key => $value) {
      echo "<th>" . $key . "</th>";
    }
    echo "</tr>";
  }

  foreach ($orderItems as $row) {
    echo "<tr>";
    foreach ($row as $key => $value) {
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";


?>
