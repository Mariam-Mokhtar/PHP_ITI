<?php
interface DbHandler {
    public function get_data_paginated($fields = array(), $start = 0);
    public function disconnect();   
    public function get_record_by_id($id);
    public function get_no_data_in_db();
}