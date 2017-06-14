<?php

  require_once 'model/Router.class.php';
  $Router = new Router();
  $Router->defaultController = 'order';
  $Router->defaultMethod = 'default';

  $Router->procesTheURL();
  $Router->debug();

?>
