<?php
  // require_once 'filehandler.class.php';

  class TemplatingSystem {
    public $template = 'default.tpl';
    public $templateLayout;

    public $canWeRun;
    private $error = '';


    /**
     * checks if the file exists
     * @param string $template [The template name]
     */
    function __construct($template = false) {
      if ($template) {
        if (file_exists('view/template/' . $template)) {
          if (pathinfo('view/template/' . $template)['extension'] == 'tpl') {
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
     * [readTemplate read the template]
     */
    public function readTemplate() {
      $this->templateLayout = file_get_contents('view/template/' . $this->template);
      return($this->templateLayout);
    }


    /**
     * Sets the template data to something
     * @param [string] $patteren    [What we want to replace between {}
     * @param [string] $replacement [The string we want to replace it with]
     */
    public function setTemplateData($patteren, $replacement) {
        if (!$this->canWeRun) {
          $this->readTemplate();
        }
          $this->templateLayout = preg_replace('#\{' . $patteren . '\}#si', $replacement, $this->templateLayout);
    }


  }

?>
