<?php

namespace App\Models;

use PDO;
use App\Models\CRUDInterface;
class User extends BaseModels
{
    public function getAll()
    {
        $sql = "SELECT * FROM user";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getUserById($id)
    {
        $sql = "SELECT * FROM user WHERE id = $id";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function addUser($username, $password, $email, $roleID, $phone, $address)
    {
        $sql = "INSERT INTO user (username, password, email, roleID, phone, address) VALUES (?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$username, $password, $email, $roleID, $phone, $address]);
    }
    public function updateUser($id, $username, $password, $email, $roleID, $phone, $address)
    {
        $sql = "UPDATE user SET username = ?, password = ?, email = ?, roleID = ?, phone = ?, address = ? WHERE id = $id";
        $this->setQuery($sql);
        return $this->execute([$username, $password, $email, $roleID, $phone, $address]);
    }
    public function deleteUser($id)
    {
        $sql = "DELETE FROM user WHERE id = $id";
        $this->setQuery($sql);
        return $this->execute();
    }
    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $this->setQuery($sql);
        return $this->loadRow();
    }

}