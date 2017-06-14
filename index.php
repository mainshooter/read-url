<?php

  require_once 'model/Router.class.php';
  $Router = new Router();

  $Router->defaultController = 'order';
  $Router->defaultMethod = 'default';
  $Router->siteLocation = '/leerjaar2/php/read-url/';

  $Router->procesTheURL();
  $Router->debug();

?>
