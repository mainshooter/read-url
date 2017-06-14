<?php
  require_once 'databaseHandler.class.php';
  class order {


    /**
     * Get all orders from the db
     * @return [assoc array] [The result from the db]
     */
    public function getAllOrders() {
      $Db = new db();

      $sql = "SELECT * FROM `Order`";
      $input = array();

      return($Db->readData($sql, $input));
    }

    /**
     * Get all headers from the db
     * @return [assoc array] [The result from the db]
     */
    public function getOrderHeaders() {
      $Db = new db();

      $sql = "SELECT * FROM `Order` LIMIT 1";
      $input = array();

      return($Db->readData($sql, $input));
    }

    /**
     * Get the order details from one order by the orderID
     * @param  [string or int] $orderID [the ID from the order]
     * @return [assoc array]          [The result from the db]
     */
    public function orderDetails($orderID) {
      $Db = new db();

      $sql = "SELECT * FROM `Order` WHERE idOrder=:orderID";
      $input = array(
        "orderID" => $orderID
      );

      return($Db->readData($sql, $input));
    }

    /**
     * Get the order items headers from the db
     * @return [assoc array] [the result from the db]
     */
    public function getOrderItemHeaders() {
      $Db = new db();

      $sql = "SELECT * FROM order_item LIMIT 1";
      $input = array();

      return($Db->readData($sql, $input));
    }

    /**
     * Get all the order items from a order by orderID
     * @param  [string or int] $orderID [The ID from the order]
     * @return [assoc array]          [The result from the db]
     */
    public function getOrderItems($orderID) {
      $Db = new db();

      $sql = "SELECT * FROM order_item WHERE Order_idOrder=:orderID";
      $input = array(
        "orderID" => $orderID
      );

      return($Db->readData($sql, $input));
    }
  }


?>
