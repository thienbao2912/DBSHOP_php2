<?php

namespace App\Auth;

use PDO;
use App\Models\BaseModels;
use PHPMailer\PHPMailer\PHPMailer;
use App\Models\User;

class Auth extends BaseModels
{
    public function login($username, $password)
    {
        $sql = "SELECT * FROM user WHERE username = :username AND password = :password LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($user) {
            //lưu thông tin người dùng vào session
            $_SESSION['user'] = $user;
            $_SESSION['isLogin'] = true;
            return true;
        } else {
            // User not found or invalid credentials
            return false;
        }
    }

    public function logout()
    {
        // Xóa session
        unset($_SESSION['user']);
        session_unset();
        $_SESSION['isLogin'] = false;
        //chuyển hướng về trang login
        header("Location: " . BASE_URL . "/login");
        
    }
    // Kiểm tra xem người dùng đã đăng nhập chưa
    public function isLogin()
    {
        if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] === true) {
            return true;
        }
        return false;
    }

}
