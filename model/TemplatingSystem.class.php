<?php
  // require_once 'filehandler.class.php';

  class TemplatingSystem {
    public $template = 'default.tpl';
    private $templateLayout;

    public $canWeRun;
    private $error = '';


    /**
     * checks if the file exists
     * @param string $template [The template name]
     */
    function __construct($template = false) {
      if ($template) {
        if (file_exists($template)) {
          if (pathinfo($template)[2] == 'tpl') {
            // To check the template extension we check on the [2] position of the pathinfo()
            $this->template = $template;
            $this->canWeRun = true;
          }
          else {
            $this->error = "Wrong extension it isn't tpl";
            $this->canWeRun = false;
          }
        }

        else {
          $this->error = "File doesn't exists";
          $this->canWeRun = false;
        }
      }
    }

    /**
     * [readTemplate description]
     * @return [type] [description]
     */
    public function readTemplate() {
      $this->templateLayout = file_get_contents('view/template/' . $this->template);
    }


  }

?>
