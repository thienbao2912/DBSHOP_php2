<?php
require_once './Model/Model.php';

class UserController
{
    private $userModel;

    public function __construct($db)
    {
        $this->userModel = new UserModel($db);
    }

    public function getUsers()
    {
        $users = $this->userModel->getUsers();
        return $users;
    }
}
?>