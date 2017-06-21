<?php
  // require_once 'filehandler.class.php';

  class TemplatingSystem {
    public $template = 'default.tpl';
    public $path = 'view/template';

    private $templateLayout;

    private $weDidRun;
    // To check if we readed our template

    private $error = '';
    // To save our error's


    /**
     * checks if the file exists
     * @param string $template [The template name]
     */
    function __construct($template = false) {
      if ($template) {
        if (file_exists($this->path . $template)) {
          if (pathinfo($this->path . $template)['extension'] == 'tpl') {
            // To check the template extension we check on the [2] position of the pathinfo()
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

    /**
     * [readTemplate read the template]
     */
    public function readTemplate() {
      $this->templateLayout = file_get_contents($this->path . $this->template);
        $this->weDidRun = true;
      return($this->templateLayout);
    }


    /**
     * Sets the template data to something
     * @param [string] $patteren    [What we want to replace between {}
     * @param [string] $replacement [The string we want to replace it with]
     */
    public function setTemplateData($patteren, $replacement) {
        if (!$this->weDidRun) {
          $this->readTemplate();
        }
          $this->templateLayout = preg_replace('#\{' . $patteren . '\}#si', $replacement, $this->templateLayout);
    }

    /**
     * Returns the template with the data we set with it
     * @return [string] [errors or the template layout]
     */
    public function parseTemplate() {
      if ($this->error == '') {
        // If there are no error's
        return($this->templateLayout);
      }
      else {
        return($this->error);
      }
    }


  }

?>
