<?php
  require_once 'model/Order.class.php';

  class orderController {
    public function default() {
      echo "Default";
    }

    public function read($parameters) {
      $Order = new order();
      $Order->read($parameters);
    }

    public function delete() {
      $Order = new order();
      $Order->delete();
    }
  }


?>
