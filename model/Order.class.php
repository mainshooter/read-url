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
  }


?>
