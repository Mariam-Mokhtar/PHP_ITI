<?php

class counter implements counter_interface
{
    private $_count;
    private $_sessionKey;
    public function __construct()
    {
        $this->_count = $this->get_count();
        $this->_sessionKey=_session_key_counter_;
    }
    public function get_count()
    {
        if (file_exists(_counter_file_)) {
            return intVal(file_get_contents(_counter_file_));
        } else {
            return 0;
        }
    }
    private function increment()
    {
        if (!isset($_SESSION[$this->_sessionKey])) {
            $this->_count++;
            $_SESSION[$this->_sessionKey]=true;
            return true;
        }
        else{
            return false;
        }
    }
    private function update_counter()
    {
        $fs=fopen(_counter_file_,"w+");
        fwrite($fs,$this->_count);
        fclose($fs);
    } 
    public function increment_and_update_counter()
    {
        if($this->increment()){
            $this->update_counter();
        }
    }
}
