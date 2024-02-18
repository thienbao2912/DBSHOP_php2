@include('layouts.client.header')
<?php
  if (isset($_SESSION['error'])) {
    echo "<h1 class='status'>Tài khoản mật khẩu không chính xác!</h1>";
  } if (isset($_SESSION[''])) {
    echo "<h1 class='status'>không được để trống!</h1>";
  }
if (isset($_SESSION['success'])) {
  echo "<h1 class='status'>{$_SESSION['success']}</h1>";
}

?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Đăng nhập</h2>
            <form action="{{route('submitLogin')}}" method="post">
              <div class="form-group">
                <label for="username">Tên người dùng</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Tên người dùng">
              </div>
              <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
              </div>
              <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </form>
            <a href="{{route('forgot-password')}}">Quên mật khẩu</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
    