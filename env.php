<?php
const BASE_URL = "http://localhost/ASM_PHP2/";
const DBHOST = "localhost";
const DBCHARSET = "utf8";
const DBNAME = "asmphp2";
const DBUSER = "root";
const DBPASS = "mysql";
const SMTP_HOST="smtp.gmail.com";
const SMTP_PORT=587;
const SMTP_USERNAME="baoltpc07117@fpt.edu.vn";
const SMTP_PASSWORD="caxnyhuuzvknwuqn";


function route($url, $params = NULL)
{
    $url = BASE_URL . $url;

    if (!empty($params)) {
        $url .= '/' . implode('/', $params);
    }

    return $url;
}
function asset($path) {
    // Định nghĩa đường dẫn tới thư mục public
    $publicDirectory = '/ASM_PHP2/public';

    // Trả về đường dẫn hoàn chỉnh tới tài nguyên
    return rtrim($publicDirectory, '/') . '/' . ltrim($path, '/');
}

