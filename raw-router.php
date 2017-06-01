<?php

  $link = $_SERVER['REQUEST_URI'];

  $link .= "order/read/53983/56325fdaffd/gfsht4whtewh/vboyahvgybowabhru";

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
  echo "Controllernaam: " . getNextThing($controller);
  echo "<br />";

  echo "<pre>";
    var_dump(parseIncomingURL('http://' .$domain . $link));
  echo "</pre>";

  function getNextThing($string) {
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

  function countSlashes($string) {
    $array = stringToArray($string);
    $count = 0;
    foreach ($array as $key) {
      if ($key == '/') {
        $count++;
      }
    }

    return($count);
  }

  function parseIncomingURL($url) {
    return(parse_url($url));
  }
  $currentLocationWithString;

  $url = parseIncomingURL('http://' .$domain . $link);
  // Get the vull domain location
  $path = replaceString($currentFolder, '', $url['path']);
  // Get the path link

  $controller = getNextThing($path);
  // Finds the controller

  $currentLocationWithString = $controller . '/';

  $method = getNextThing(replaceString($currentLocationWithString, '', $path));
  // Gets method

  $currentLocationWithString .= $method . '/';

  $howManyParameters = countSlashes(replaceString($currentLocationWithString, '', $path)) + 1;
  // Gets the count of how many parameters there are
  // We add one because we else would mis one

  for ($i=0; $i < $howManyParameters; $i++) {
    $parameter[] = getNextThing(replaceString($currentLocationWithString, '', $path));
    $currentLocationWithString .= $parameter[$i] . '/';
  }
  // Gets all parameters

  echo "Path: " . $path;
  echo "<br />";
  echo "Controller: " . $controller;
  echo "<br />";
  echo "Method: " . $method;
  echo "<br />";
  echo "Parameters: ";
  echo "<pre>";
  var_dump($parameter);
  echo "</pre>";

  // eerste is de controller
  // twee de methode
  // 3de en verder de parameters

?>
