<?php
namespace App\Models;
class Role extends BaseModels
{
    public function getAll()
    {
        $sql = "SELECT * FROM role";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}