<?php

namespace App\Controllers;

use App\Auth\Auth;
use App\Models\User;
use PHPMailer\PHPMailer\PHPMailer;
use Phroute\Phroute\RouteCollector;

class AuthController extends BaseController
{
    protected $auth;
    protected $user;

    public function __construct()
    {
        $this->auth = new Auth();
        $this->user = new User();
    }
    public function index()
    {
        return $this->render('layouts.client.login');
    }
    public function login()
    {
        // Lấy dữ liệu từ biến $_POST
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        if (!empty($username) && !empty($password)) {
            // Thực hiện đăng nhập
            $result = $this->auth->login($username, $password);
            //lấy thông tin người dùng bằng session
            $user = $_SESSION['user'];
            if ($result) {
                if ($user['roleID'] == 1) {
                    header("Location: ".BASE_URL."list-calendar?status=success");
                }
                if ($user['roleID'] == 2) {
                    header("Location: ".BASE_URL."list-calendar?status=success");
                }
            } else {
                $_SESSION['error'] = "Tài khoản hoặc mật khẩu không đúng";
                header("Location: ".BASE_URL."login");
            }
        } else {
            // Dữ liệu không hợp lệ
            return "Không được để trống";
        }
    }

    public function logout()
    {
        // Thực hiện đăng xuất
        $this->auth->logout();
        
        // Ví dụ: session_destroy(); redirect, vv.
    }
    public function forGotPassword() {
        $email = $_POST['email'] ?? '';
        if (empty($email)) {
            // Nếu email không được gửi, bạn có thể thông báo lỗi cho người dùng
            echo 'Email không được gửi';
            return;
        }
        $username = $_POST['username'] ?? '';
        if (empty($username)) {
            // Nếu email không được gửi, bạn có thể thông báo lỗi cho người dùng
            echo 'Username không được gửi';
            return;
        }
        // Kiểm tra xem email có tồn tại trong cơ sở dữ liệu hay không
        $user = $this->user->getUserByEmail($email);
        if (!$user) {
            // Nếu không tìm thấy người dùng với địa chỉ email này, bạn có thể thông báo lỗi cho người dùng
            echo 'Email không tồn tại trong hệ thống';
            return;
        }

        // Gửi email chứa mật khẩu
        if (
            $user->email === $email &&
            $user->username === $username
        ){
            $this->sendPasswordEmail($user->email, $user->password);

        }else{
            echo 'Email hoặc username không đúng';
        }
    }

    // Hàm để gửi email chứa mật khẩu
    private function sendPasswordEmail($email, $password) {
        $mail = new PHPMailer();

        // Cấu hình thông tin SMTP từ tệp .env
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->Port = SMTP_PORT;
        $mail->Username = SMTP_USERNAME;
        $mail->Password =SMTP_PASSWORD;
        $mail->SMTPSecure = 'tls'; // Hoặc ssl nếu cần
        $mail->SMTPAuth = true;

        // Thiết lập thông tin email
        $mail->setFrom(SMTP_USERNAME, SMTP_USERNAME);
        $mail->addAddress($email);
        $mail->Subject = 'Your Password';
        $mail->Body = 'Mật khẩu của bạn là: ' . $password;

        // Gửi email
        $mail->send();
        if (!$mail->send()) {
            echo 'Gửi email thất bại: ' . $mail->ErrorInfo;
        } else {
            $_SESSION['success'] = "Gửi email thành công!";
            echo 'Gửi email thành công!';
        }

        header("Location: ".BASE_URL."login");
    }
    public function forgot() {
        return $this->render('layouts.client.forgot-password');
    }
}
