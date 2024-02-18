<?php
namespace App\Controllers;
use App\Models\Calendar;
use App\Auth\Auth;
class CalendarController extends BaseController
{
    private $calendarModel;
    private $auth;
    function __construct()
    {
        //kiểm tra đăng nhập bằng session isLogin
        $this->auth = new Auth();
        if (!$this->auth->isLogin()) {
            header("Location: ".BASE_URL."login");
        }
        $this->calendarModel = new Calendar();
    }
    function index()
    {
        $data = $this->calendarModel->getUsersWithCalendar($_SESSION['user']['id']);
        return $this->render('layouts.client.lichnhanvien.list', compact('data'));
    }
    function add()
    {
        return $this->render('layouts.client.lichnhanvien.add');
    }
    function store()
    {
        $idUser = $_POST['idUser'];
        $status = $_POST['status'];
        $timeStart = $_POST['timeStart'];
        $timeEnd = $_POST['timeEnd'];
        $errors = $this->validate($_POST);
        if (count($errors) > 0) {
            $_SESSION['errors'] = $errors;
            header("Location: ".BASE_URL."add-calendar");
            die;
        }
        $this->calendarModel->insert($idUser, $status, $timeStart, $timeEnd);
        //xóa session errors
        unset($_SESSION['errors']);
        header("Location: ".BASE_URL."list-calendar");
    }
    function edit($id)
    {
        $data = $this->calendarModel->findById($id);
        return $this->render('layouts.client.lichnhanvien.update', compact('data'));
    }
    function update($id)
    {
        $timeStart = $_POST['timeStart'];
        $timeEnd = $_POST['timeEnd'];
        $status = $_POST['status'];
        $idUser = $_POST['idUser'];
        $errors = $this->validate($_POST);
        //sử dụng validate để kiểm tra dữ liệu
        if (count($errors) > 0) {
            $_SESSION['errors'] = $errors;
            header("Location: ".BASE_URL."edit-calendar/$id");
            die;
        }
        $this->calendarModel->update($id, $timeStart, $timeEnd, $status, $idUser);
        //xóa session errors
        unset($_SESSION['errors']);
        header("Location: ".BASE_URL."list-calendar");
    }
    function delete($id)
    {
        $this->calendarModel->delete($id);
        header("Location: ".BASE_URL."list-calendar");
    }
    //validate dữ liệu và lưu vào session
    function validate($data)
    {
        $errors = [];
        if (empty($data['timeStart'])  || $data['timeStart'] == '') {
            $errors['timeStart'] = "Thời gian bắt đầu không được để trống";
        }
        if (empty($data['timeEnd'])  || $data['timeEnd'] == '') {
            $errors['timeEnd'] = "Thời gian kết thúc không được để trống";
        }
        return $errors;
    }

}