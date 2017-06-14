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

      include 'view/header.php';
      include 'view/allOrders.php';
      include 'view/footer.html';
    }

    /**
     * Get the details and order items from one order
     * @param  [array] $parameterArray [With the ID from the URL]
     */
    public function readOrder($parameterArray) {
      $Order = new order();

      $orderID = $parameterArray[0];

      $orderHeaders = $this->Order->getOrderHeaders();
      $orderDetails = $this->Order->orderDetails($orderID);
      $orderItemHeader = $this->Order->getOrderItemHeaders();
      $orderItems = $this->Order->getOrderItems($orderID);

      include 'view/header.php';
      include 'view/orderDetails.php';
      include 'view/footer.html';
    }

    public function delete() {
      $Order = new order();
      $Order->delete();
    }
  }


?>
