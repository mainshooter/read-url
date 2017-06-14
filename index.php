<?php

  require_once 'model/Router.class.php';
  require_once 'config.php';

  $Router = new Router();

  $Router->defaultController = 'order';
  $Router->defaultMethod = 'default';
  $Router->siteLocation = $config['base_url'];

  $Router->procesTheURL();
  $Router->debug();

?>
