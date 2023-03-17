<?php
class MySQLHandler implements DbHandler
{
   private $_table;
   private $_handler;
   public function __construct($table)
   {
      $this->_table = $table;
      $this->connect();
   }
   private function connect()
   {
      try {
         $handler = mysqli_connect(__HOST__, __USER__, __PASS__, __DB__, __PORT__);
         if ($handler) {
            $this->_handler = $handler;
         }
      } catch (Exception $e) {
         die("There is a problem now please re-connect again later");
      }
   }

   public function get_data_paginated($fields = array(), $start = 0)
   {
      $table = $this->_table;
      if (empty($fields)) {
         $sql = "select * from $table";
      } else {
         $sql = "select ";
         foreach ($fields as $field) {
            $sql .= "$field ,";
         }
         $sql .= "from $table";
         $sql = str_replace(",from", "from", $sql);
      }
      $sql .= " limit $start ," . __RECORDS_PER_PAGE__;
      return $this->get_results($sql);
   }

   public function get_record_by_id($id)
   {
      $table = $this->_table;
      $sql = "select * from $table where `id`='$id'";
      return $this->get_results($sql);
   }
   private function get_results($sql)
   {
      $this->debug($sql);
      try {
         $_handler_results = mysqli_query($this->_handler, $sql);
         //echo $_handler_results->num_rows;
         $_arr_results = array();
         if ($_handler_results) {
            while ($row = mysqli_fetch_array($_handler_results, MYSQLI_ASSOC)) {
               $_arr_results[] = array_change_key_case($row);
            }
            return $_arr_results;
         } else {
            return false;
         }
      } catch (Exception $e) {
         die($e->getMessage());

         //die("there is a problem now please re-fresh again later");
      }
   }
   public function get_no_data_in_db()
   {
      $sql = "SELECT COUNT(*) as count FROM `$this->_table`";
      $_handler_results = mysqli_query($this->_handler, $sql);
      $row = mysqli_fetch_array($_handler_results);
      return $row[0];
   }
   public function disconnect()
   {
      if ($this->_handler)
         mysqli_close($this->_handler);
   }
   private function debug($sql)
   {
      if (__Debug__Mode__ === 1)
         echo "<h5>Sent Query: </h5>" . $sql . "<br/> <br/>";
   }
}
