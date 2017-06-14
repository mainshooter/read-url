<?php
  require_once 'model/Order.class.php';

  class orderController {
    private $Order;

    function __construct() {
      $this->Order = new Order();
    }


    public function default() {
      $this->displayAllOrders();
    }

    /**
     * Displays all the orders we have
     * @return [type] [description]
     */
    public function displayAllOrders() {
      $orders = $this->Order->getAllOrders();
      $orderHeaders = $this->Order->getOrderHeaders();

      include 'view/header.html';
      include 'view/allOrders.php';
      include 'view/footer.html';
    }

    public function readOrder($parameterArray) {
      $Order = new order();
      $Order->read($parameterArray[0]);
    }

    public function delete() {
      $Order = new order();
      $Order->delete();
    }
  }


?>
