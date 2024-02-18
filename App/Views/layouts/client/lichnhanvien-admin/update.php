<?php
if (is_array($taikhoan)) {
    extract($taikhoan);
}
?>
<style>
.khung-input{
    border: 1px solid !important;
}
</style>
<div class="main-panel">

    <!-- Page wrapper  -->
    <!-- ============================================================== -->


    <div class="">
        <br><br>
        <div class="row">
            <div class="container pt-5">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-center">CẬP NHẬT TÀI KHOẢN</h5>
                    </div>
                    <div class="row formcontent">

                        <form class="form-horizontal" action="index.php?act=updatetk" onsubmit="return validateForm();"
                            method="post">
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Username</label>
                                <div class="col-sm-6">

                                    <input class="form-control khung-input" type="text" name="ten" id="tenuser" value="<?php if (isset($ten))
                                        echo $ten; ?>">
                                    <p style="color: red;" id="tenuser-err"></p>
                                </div>
                            </div>

                            <!-- <div class="row mb kh-one"> -->
                            <!-- <strong>Password</strong> -->
                            <input hidden type="text" name="pass" id="mkuser" value="<?php if (isset($pass))
                                echo $pass; ?>">
                            <!-- <p style="color: red;" id="mkuser-err"></p> -->
                            <!-- </div> -->
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Email</label>
                                <div class="col-sm-6">

                                    <input class="form-control khung-input" type="email" name="email" id="email" value="<?php if (isset($email))
                                        echo $email; ?>">
                                    <p style="color: red;" id="email-err"></p>
                                </div>
                            </div>
                            <div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-end control-label col-form-label">Địa chỉ</label>
                                    <div class="col-sm-6">

                                        <input class="form-control khung-input" type="text" name="diachi" id="aduser" value="<?php if (isset($diachi))
                                            echo $diachi; ?>">
                                        <p style="color: red;" id="aduser-err"></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-end control-label col-form-label">Số điện thoại</label>
                                    <div class="col-sm-6">

                                        <input class="form-control khung-input" type="text" name="sodienthoai" id="phoneuser" value="<?php if (isset($sodienthoai))
                                            echo $sodienthoai; ?>">
                                        <p style="color: red;" id="phoneuser-err"></p>
                                    </div>
                                </div>

                                <div class="form-group  row">
                                    <label class="col-sm-3 text-end control-label col-form-label">Loại Tài khoản(1:Admin
                                        0:Khách)</label>
                                    <div class="col-sm-6">

                                        <input class="form-control khung-input" type="number" name="role" id="role" value="<?php if (isset($role))
                                                echo $role; ?>">
                                        <p style="color: red;" id="role-err"></p>
                                    </div>
                                </div>
                                <div class="text-center ">
                                    <input  type="hidden" name="id" value="<?php if (isset($id) && ($id > 0))
                                        echo $id; ?>">
                                    <input class="btn btn-outline-success" type="submit" class="mr5"
                                        onclick="validateForm()" value="Cập nhật" name="capnhat">
                                    <input class="btn btn-outline-danger" type="reset" value="Nhập lại">
                                </div>
                        </form>
                        <h2 class="thongbao">
                            <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function validateForm() {
        let tenuser = document.getElementById("tenuser").value;
        let mkuser = document.getElementById("mkuser").value;
        let email = document.getElementById("email").value;
        let aduser = document.getElementById("aduser").value;
        let phoneuser = document.getElementById("phoneuser").value;
        let role = document.getElementById("role").value;
        let text;

        // Tên tài khoản
        if (tenuser == "") {
            text = "không được để trống";
            document.getElementById("tenuser-err").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("tenuser-err").innerHTML = text;
        }

        // Mật khẩu
        if (mkuser == "") {
            text = "không được để trống";
            document.getElementById("mkuser-err").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("mkuser-err").innerHTML = text;
        }

        // Email
        if (email == "") {
            text = "không được để trống";
            document.getElementById("email-err").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("email-err").innerHTML = text;
        }

        // Địa chỉ
        if (aduser == "") {
            text = "không được để trống";
            document.getElementById("aduser-err").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("aduser-err").innerHTML = text;
        }

        // Số điện thoại
        if (phoneuser == "") {
            text = "không được để trống";
            document.getElementById("phoneuser-err").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("phoneuser-err").innerHTML = text;
        }

        // Loại tài khoản
        if (role == "" || role > 2) {
            text = "không được để trống và chỉ được lựa chọn 1: Admin và 0: Khách hàng";
            document.getElementById("role-err").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("role-err").innerHTML = text;
        }

        // if (role !== 1 || role !== 0) {
        //     text = "Loại tài khoản chỉ được lựa chọn 1: Admin và 0: Khách hàng";
        //     document.getElementById("role-err2").innerHTML = text;  
        // }else{
        //     text = "";
        //     document.getElementById("role-err2").innerHTML = text;
        // }
    }
</script>