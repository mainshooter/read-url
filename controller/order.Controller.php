<?php
  require_once 'model/Order.class.php';
  require_once 'model/HtmlGenerator.class.php';

  class orderController {
    private $Order;
    private $HtmlGenerator;

    function __construct() {
      $this->Order = new Order();
      $this->HtmlGenerator = new HtmlGenerator();
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
      $orderHeaders = ['orderID', 'Klant email', 'Order status', 'Betaal status'];

      include 'view/header.php';
      include 'view/allOrders.php';
      include 'view/footer.html';
    }

    /**
     * Get the details and order items from one order
     * @param  [array] $parameterArray [With the ID from the URL]
     */
    public function read($parameterArray) {
      $Order = new order();

      $orderID = $parameterArray[0];

      $orderHeaders = ['orderID', 'Klant email', 'Order status', 'Betaal status'];
      $orderDetails = $this->Order->orderDetails($orderID);
      $orderItemHeader = ['Product', 'Prijs', 'Aantal'];
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
