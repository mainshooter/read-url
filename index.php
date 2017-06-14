<?php

  require_once 'model/Router.class.php';
  require_once 'config.php';

  global $config;
  define("base_url", $config['base_url']);

  $Router = new Router();

  $Router->defaultController = 'order';
  $Router->defaultMethod = 'default';
  $Router->siteLocation = $config['base_url'];

  $Router->procesTheURL();

  if ($config['router-debug']) {
    $Router->debug();  
  }
?>
