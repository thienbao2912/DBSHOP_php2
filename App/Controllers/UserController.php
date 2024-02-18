<?php
namespace App\Controllers;
use App\Models\Calendar;
use App\Auth\Auth;
use App\Models\User;
use App\Models\Role;
class UserController extends BaseController
{
    private $userModel;
    private $auth;
    private $role;
    function __construct()
    {
        //kiểm tra đăng nhập bằng session isLogin
        $this->auth = new Auth();
        if (!$this->auth->isLogin()) {
            header("Location: " . BASE_URL . "login");
        }
        $this->userModel = new User();
        $this->role = new Role();
    }
    function index()
    {
        $data = $this->userModel->getAll();
        return $this->render('layouts.client.nhanvien.list', compact('data'));
    }
    function add()
    {
        $role = $this->role->getAll();
        return $this->render('layouts.client.nhanvien.add', compact('role'));
    }
    function store()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $roleID = $_POST['roleID'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        //validate dữ liệu
        $errors = $this->validate($_POST);
        if (count($errors) > 0) {
            $_SESSION['errors'] = $errors;
            header("Location: " . BASE_URL . "add-user");
            die;
        }
        $this->userModel->addUser($username, $password, $email, $roleID, $phone, $address);
        //xóa session errors
        unset($_SESSION['errors']);
        header("Location: " . BASE_URL . "list-user");
    }
    function edit($id)
    {
        $data = $this->userModel->getUserById($id);
        return $this->render('layouts.client.nhanvien.update', compact('data'));
    }
    function update($id)
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $roleID = $_POST['roleID'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        //validate dữ liệu
        $errors = $this->validate($_POST);
        if (count($errors) > 0) {
            $_SESSION['errors'] = $errors;
            header("Location: " . BASE_URL . "edit-user/$id");
            die;
        }
        $this->userModel->updateUser($id, $username, $password, $email, $roleID, $phone, $address);
        //xóa session errors
        unset($_SESSION['errors']);
        header("Location: " . BASE_URL . "list-user");
    }
    function delete($id)
    {
        $this->userModel->deleteUser($id);
        header("Location: " . BASE_URL . "list-user");
    }
    //hàm validate dữ liệu
    function validate($data)
    {
        $errors = [];
        if (empty($data['username']) || $data['username'] == '') {
            $errors['username'] = "Username không được để trống";
        }
        if (empty($data['password']) || $data['password'] == '') {
            $errors['password'] = "Password không được để trống";
        }
        if (empty($data['email']) || $data['email'] == '') {
            $errors['email'] = "Email không được để trống";
        }
        if (empty($data['phone']) || $data['phone'] == '') {
            $errors['phone'] = "Phone không được để trống";
        }
        if (empty($data['address']) || $data['address'] == '') {
            $errors['address'] = "Address không được để trống";
        }
        return $errors;
    }
}
