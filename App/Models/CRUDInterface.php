<?php

namespace App\Models;

//Bảng thiết kế cho phương thức
interface CRUDInterface
{
    public function getData($query, $getAll = true);

    public function setQuery($sql);

    public function execute($options = array());

    public function loadAllRows($options = array());

    public function loadRow($option = array());

    public function loadRecord($option = array());

    public function getLastId();

    public function disconnect();
}
