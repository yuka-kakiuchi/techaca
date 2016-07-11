<?php
require_once('C:\xampp\php\includes\libs\Smarty.class.php');

 class MySmarty extends Smarty{
    public function __construct(){
        parent::__construct();
        $this->escape_html = true;

    }
}