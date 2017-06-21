<?php

  class TemplatingSystem {
    public $template = 'default.tpl';
    private $error = '';


    /**
     * checks if the file exists
     * @param boolean $template [The template name]
     */
    function __construct($template = false) {
      if (file_exists($template)) {
        if (pathinfo($template)[2] == 'tpl') {
          // To check the tamplate extension we check on the [2] position of the pathinfo()
          $this->template = $template;
        }
        else {
          $this->error = "Wrong extension it isn't tpl";
        }
      }

      else {
        $this->error = "File doesn't exists";
      }

    }
  }

?>
