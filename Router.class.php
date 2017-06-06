<?php

  class Router {
    private $url;
    private $path;

    private $locationOfThePath;
    // It is used to track wat we allready have seperated

    private $controller;
    private $method;
    private $parameters;

    function __construct() {
      $this->url = parse_url($_SERVER['REQUEST_URI']);
      $this->path = $this->url['path'];
      $this->path = 'order/read/frsafdsa/fdsa/fds/ag/rqh/3qg/3qg/rw/';
    }

    public function procesTheURL() {
      $this->controller = $this->getController($this->path);
      $this->method = $this->getMethod($this->path);
      $this->parameters = $this->getParamters($this->path);

      echo "Path: " . $this->path;
      echo "<br>";
      echo "Controller: " . $this->controller;
      echo "<br>";
      echo "Methode: " . $this->method;
      echo "<br>";
      echo "Parameters: ";
      echo "<pre>";
      var_dump($this->parameters);
      echo "</pre>";
    }

    /**
     * Gets all parameters
     * @return [array] [With all parameters]
     */
    private function getParamters() {
      $location = $this->replaceString($this->locationOfThePath, '', $this->path);
      // To get remove from the location what we already have done

      $howManyParameters = $this->countSlashes($location);

      for ($i=0; $i < $howManyParameters; $i++) {
        $this->parameters[] = $this->getNextValue($this->locationOfThePath);
        // This gets all new parameters

        $this->locationOfThePath .= $this->parameters[$i] . '/';
        // To save what we already have done
      }

      return($this->parameters);
    }

    /**
     * Get the next value between 2 slashes
     * @param  [string] $string [The path what we already did]
     * @return [type]         [description]
     */
    private function getNextValue($string) {
      $string = $this->replaceString($string, '', $this->path);
      // To get remove from the location what we already have done

      $array = $this->stringToArray($string);
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
      return($this->arrayToString($resultArray));
    }

    /**
     * Gets the method
     * @return [string] [method name]
     */
    private function getMethod() {
      $this->method = $this->getNextValue($this->locationOfThePath);

      $this->locationOfThePath .= $this->method . '/';
      // To save what we already have done

      return($this->method);
    }

    /**
     * Counts how many / there are for hoe many parameters there are
     * @param  [string] $string [The path string]
     * @return [INT]         [How many slashes we have]
     */
    private function countSlashes($string) {
      $array = $this->stringToArray($string);
      $count = 0;
      foreach ($array as $key) {
        if ($key == '/') {
          $count++;
        }
      }

      return($count);
    }

    /**
     * Gets the name of the controller
     * @param  [string] $string [The path that we now have]
     * @return [string] [With the name of the controller]
     */
    private function getController($string) {
      $this->controller = $this->getNextValue($this->locationOfThePath);

      $this->locationOfThePath .= $this->controller . '/';
      // To save what we already have done

      return($this->controller);
    }

    /**
     * Converts a string to a array
     * @param  [string] $string [The string we want to go to a array]
     * @return [array] [the result]
     */
    private function stringToArray($string) {
      $array = str_split($string);
      return($array);
    }

    /**
     * Array to string
     * @param  [1 dept array] $array [The array we want to convert to a string]
     * @return [string] [The array converted to a string]
     */
    private function arrayToString($array) {
      $string = implode('', $array);
      return($string);
    }

    /**
     * [replaceString description]
     * @param  [string] $searchString [What we want te replace]
     * @param  [string] $replace      [What we will replace it with]
     * @param  [string] $stringSub    [The string that we will use]
     * @return [string]               [The replaced string]
     */
    private function replaceString($searchString, $replace, $stringSub) {
      $string = str_replace($searchString, $replace, $stringSub);
      return($string);
    }





  }
  $Router = new Router();
  $Router->procesTheURL();

?>
