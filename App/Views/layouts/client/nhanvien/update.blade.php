@include('layouts.client.header')
<div class="main-panel">

    <style>
        .khung-input{
            border: 1px solid !important;
        }
    </style>

    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <?php
        if (isset($_SESSION['errors'])) {
            foreach ($_SESSION['errors'] as $item) {
                echo "<p class='status'>$item</p>";
            }
        }
        ?>
        <div class="">
            <br><br>
            <div class="row">
                <div class="container pt-5">

                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <h5 class="text-center mb-5">Cập nhật tài khoản</h5>
                            </div>
                            <form class="form-horizontal" action="{{route("submitEditUser", [$data->id])}}" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
                                <div class="kh-all">
                                    <div>
                                        <div class="row mb10 kh-one">
                                            <label class="col-sm-3 text-end control-label col-form-label">Tên tài khoản</label>
                                            <div class="col-sm-6">
                                                <input style="padding-left:10px" class="form-control khung-input" type="text" value="{{$data->username}}" name="username" id="username">
                                                <p style="color: red;" id="username-err"></p>
                                            </div>
                                        </div>
                                        <div class="row mb10 kh-one">
                                            <label class="col-sm-3 text-end control-label col-form-label">Mật khẩu</label>
                                            <div class="col-sm-6">
                                                <input style="padding-left:10px" class="form-control khung-input" type="text" value="{{$data->password}}" name="password" id="password">
                                                <p style="color: red;" id="password-err"></p>
                                            </div>

                                        </div>
                                        <div class="row mb10 kh-one">
                                            <label class="col-sm-3 text-end control-label col-form-label">Email</label>
                                            <div class="col-sm-6">
                                                <input style="padding-left:10px" class="form-control khung-input" value="{{$data->email}}" type="email" name="email" id="email">
                                                <p style="color: red;" id="email-err"></p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row mb10 kh-one">
                                                <label class="col-sm-3 text-end control-label col-form-label">Địa chỉ</label>
                                                <div class="col-sm-6">
                                                    <input style="padding-left:10px" class="form-control khung-input" value="{{$data->address}}" type="text" name="address" id="address">
                                                    <p style="color: red;" id="address-err"></p>
                                                </div>
                                            </div>

                                            <div class="row mb10 kh-one">
                                                <label class="col-sm-3 text-end control-label col-form-label">Số điện thoại</label>
                                                <div class="col-sm-6">
                                                    <input style="padding-left:10px" class="form-control khung-input" value="{{$data->phone}}" type="text" name="phone" id="phone">
                                                    <p style="color: red;" id="phone-err"></p>
                                                </div>
                                            </div>

                                            <div class="row mb10 kh-one">
                                                <label class="col-sm-3 text-end control-label col-form-label">Loại Tài khoản</label>
                                                <div class="col-sm-6">
                                                    <select style="padding-left:10px" class="form-select khung-input" type="number" name="roleID" id="roleID">
                                                        <option style="padding-left:10px" {{$data->roleID == 1 ? "selected" : ""}} value="1">Quản Lý</option>
                                                        <option style="padding-left:10px" {{$data->roleID == 2 ? "selected" : ""}} value="2">Nhân Viên</option>
                                                    </select>
                                                    <p style="color: red;" id="roleID-err"></p>
                                                    <p style="color: red;" id="roleID-err2"></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="text-center" >
                                        <input class="btn btn-outline-success" type="submit" class="mr5" name="themmoi" onclick="validateForm()" value="CẬP NHẬT">
                                        <input class="btn btn-outline-danger" type="reset" class="mr5" value="NHẬP LẠI">
                                        <a href="{{Route("list-user")}}"><input class="btn btn-outline-info" type="button" value="DANH SÁCH"></a>
                                    </div>
                                <?php
                                if(isset($thongbao) &&($thongbao != "")){
                                    echo $thongbao;
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function validateForm() {
                    let username = document.getElementById("username").value;
                    let password = document.getElementById("password").value;
                    let email = document.getElementById("email").value;
                    let address = document.getElementById("address").value;
                    let phone = document.getElementById("phone").value;
                    let roleID = document.getElementById("roleID").value;
                    let text;

                    // Tên tài khoản
                    if (username == "") {
                        text = "Tên tài khoản không được để trống";
                        document.getElementById("username-err").innerHTML = text;
                        return false;
                    }else{
                        text = "";
                        document.getElementById("username-err").innerHTML = text;
                    }

                    // Mật khẩu
                    if (password == "") {
                        text = "Mật khẩu không được để trống";
                        document.getElementById("password-err").innerHTML = text;
                        return false;
                    }else{
                        text = "";
                        document.getElementById("password-err").innerHTML = text;
                    }

                    // Email
                    if (email == "") {
                        text = "Email không được để trống";
                        document.getElementById("email-err").innerHTML = text;
                        return false;
                    }else{
                        text = "";
                        document.getElementById("email-err").innerHTML = text;
                    }

                    // Địa chỉ
                    if (address == "") {
                        text = "Địa chỉ không được để trống";
                        document.getElementById("address-err").innerHTML = text;
                        return false;
                    }else{
                        text = "";
                        document.getElementById("address-err").innerHTML = text;
                    }

                    // Số điện thoại
                    if (phone == "") {
                        text = "Số điện thoại không được để trống";
                        document.getElementById("phone-err").innerHTML = text;
                        return false;
                    }else{
                        text = "";
                        document.getElementById("phone-err").innerHTML = text;
                    }

                    // Loại tài khoản
                    if (roleID == "") {
                        text = "Loại tài khoản không được để trống và chỉ được lựa chọn 1: Admin và 0: Khách hàng";
                        document.getElementById("roleID-err").innerHTML = text;
                        return false;
                    }else{
                        text = "";
                        document.getElementById("roleID-err").innerHTML = text;
                    }

                    // if (roleID !== 1 || roleID !== 0) {
                    //     text = "Loại tài khoản chỉ được lựa chọn 1: Admin và 0: Khách hàng";
                    //     document.getElementById("roleID-err2").innerHTML = text;
                    // }else{
                    //     text = "";
                    //     document.getElementById("roleID-err2").innerHTML = text;
                    // }
                }
            </script>
            