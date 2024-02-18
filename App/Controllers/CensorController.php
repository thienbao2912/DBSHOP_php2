<?php
namespace App\Controllers;
use App\Models\Calendar;
use App\Auth\Auth;
class CensorController extends BaseController
{
    private $censorModel;
    private $auth;
    function __construct()
    {
        //kiểm tra đăng nhập bằng session isLogin
        $this->auth = new Auth();
        if (!$this->auth->isLogin()) {
            header("Location: " . BASE_URL . "login");
        }
        $this->censorModel = new Calendar();
    }
    function index()
    {
        $data = $this->censorModel->getAll();
        return $this->render('layouts.client.lichnhanvien-admin.list', compact('data'));
    }

    public function approve()
    {
        $id = $_POST['id'];
        $status = isset($_POST['status']) ? intval($_POST['status']) : 0;
        $this->censorModel->approve($id, $status);
        header("Location: " . BASE_URL . "list-censor");
    }

}