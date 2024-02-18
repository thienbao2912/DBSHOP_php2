<?php
namespace App\Controllers;
use eftec\bladeone\BladeOne;
class BaseController{
    public function __construct()
    {
        session_start(); // Bắt đầu session
    }
    protected function render($viewFile, $data = []){
        $viewDir = "./app/views";
        $storageDir = "./storage";
        $blade = new BladeOne($viewDir,$storageDir, BladeOne::MODE_DEBUG);
        echo $blade->run($viewFile, $data);
    }
}

?>