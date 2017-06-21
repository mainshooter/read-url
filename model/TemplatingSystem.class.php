<?php

  class TemplatingSystem {
    public $template = 'default.tpl';
    private $error = '';


    function __construct() {
      if (file_exists($this->template)) {
        $this->error = 0;
      }

      else {
        $this->error = 1;
      }

    }
  }

?>
