<?php

  $link = $_SERVER['REQUEST_URI'];

  $link .= "order/";

  $domain = $_SERVER['SERVER_NAME'];
  $currentFolder = '/leerjaar2/php/read-url/';
  $controller;
  $request;

  $controller = replaceString($currentFolder, '', $link);
  // The thing that we want to replace
  // What we want to replace it with
  // The string we use

  echo "Domain: " . $domain;
  echo "<br />";
  echo "link: " . $link;
  echo "<br />";
  echo "Current folder: " . $currentFolder;
  echo "<br />";
  echo "PRE Controller: " . $controller;
  echo "<br />";
  echo "Controllernaam: " . getController($controller);

  function getController($string) {
    $array = stringToArray($string);
    $resultArray;

    $pastSlash = 0;
    foreach ($array as $key) {
      if ($pastSlash == 0) {
        if ($key != '/') {
          $resultArray[] = $key;
        }
        else if ($key == '/') {
          $pastSlash = 1;
        }
      }
    }
    return(arrayToString($resultArray));

  }

  function arrayToString($array) {
    $string = implode('', $array);
    return($string);
  }


  function stringToArray($string) {
    $array = str_split($string);
    return($array);
  }

  function replaceString($searchString, $replace, $stringSub) {
    $string = str_replace($searchString, $replace, $stringSub);
    return($string);
  }

  function displayOrder() {
    echo "order: 4323";
  }

?>
