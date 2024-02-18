@include('layouts.client.header')
<div class="main-panel">

    <style>
        .khung-input {
            border: 1px solid !important;
        }
    </style>

    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">

        <div class="">
            <br><br>
            <div class="row">
                <div class="container pt-5">

                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <h5 class="text-center mb-5">Cập nhật giờ làm</h5>
                            </div>
                            <form class="form-horizontal" action="{{route('submitEdit', [$data->id])}}" method="post"
                                  onsubmit="return validateForm()">
                                <div class="kh-all">
                                    <div>
                                        <div class="row mb10 kh-one">
                                            <label class="col-sm-3 text-end control-label col-form-label">Tài khoản</label>
                                            <div class="col-sm-6">
                                                <input style="padding-left:10px" class="form-control khung-input" type="email" name="email"
                                                       id="emailuser" placeholder="{{$_SESSION['user']['username']}}" readonly>
                                                <p style="color: red;" id="emailuser-err"></p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row mb10 kh-one">
                                                <label class="col-sm-3 text-end control-label col-form-label">Giờ bắt đầu</label>
                                                <div class="col-sm-6">
                                                    <input style="padding-left:10px" class="form-control khung-input" type="number" name="timeStart"
                                                           id="timeStart" value="{{$data->timeStart}}">
                                                    <p style="color: red;" id="aduser-err"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row mb10 kh-one">
                                                <label class="col-sm-3 text-end control-label col-form-label">Giờ kết thúc</label>
                                                <div class="col-sm-6">
                                                    <input style="padding-left:10px" class="form-control khung-input" type="number" name="timeEnd"
                                                           id="timeEnd" value="{{$data->timeEnd}}">
                                                    <p style="color: red;" id="aduser-err"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="status" id="status" value="0">
                                        <input type="hidden" name="idUser" id="idUser" value="{{$_SESSION['user']['id']}}">
                                    </div>

                                    <?php
                                    if (isset($_SESSION['errors'])) {
                                        foreach ($_SESSION['errors'] as $item) {
                                            echo "<p class='status'>$item</p>";
                                        }
                                    }
                                    ?>
                                    <div class="text-center">
                                        <input class="btn btn-outline-success" type="submit" class="mr5" name="themmoi"
                                               onclick="validateForm()" value="Cập nhat">
                                        <input class="btn btn-outline-danger" type="reset" class="mr5" value="NHẬP LẠI">
                                        <a href="{{route('list-calendar')}}"><input class="btn btn-outline-info" type="button"
                                                                                     value="DANH SÁCH"></a>
                                    </div>
                                <?php
                                if (isset($thongbao) && ($thongbao != "")) {
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
                    let tenuser = document.getElementById("tenuser").value;
                    let mkuser = document.getElementById("mkuser").value;
                    let emailuser = document.getElementById("emailuser").value;
                    let aduser = document.getElementById("aduser").value;
                    let phoneuser = document.getElementById("phoneuser").value;
                    let role = document.getElementById("role").value;
                    let text;

                    // Tên tài khoản
                    if (tenuser == "") {
                        text = "Tên tài khoản không được để trống";
                        document.getElementById("tenuser-err").innerHTML = text;
                        return false;
                    } else {
                        text = "";
                        document.getElementById("tenuser-err").innerHTML = text;
                    }

                    // Mật khẩu
                    if (mkuser == "") {
                        text = "Mật khẩu không được để trống";
                        document.getElementById("mkuser-err").innerHTML = text;
                        return false;
                    } else {
                        text = "";
                        document.getElementById("mkuser-err").innerHTML = text;
                    }

                    // Email
                    if (emailuser == "") {
                        text = "Email không được để trống";
                        document.getElementById("emailuser-err").innerHTML = text;
                        return false;
                    } else {
                        text = "";
                        document.getElementById("emailuser-err").innerHTML = text;
                    }

                    // Địa chỉ
                    if (aduser == "") {
                        text = "Địa chỉ không được để trống";
                        document.getElementById("aduser-err").innerHTML = text;
                        return false;
                    } else {
                        text = "";
                        document.getElementById("aduser-err").innerHTML = text;
                    }

                    // Số điện thoại
                    if (phoneuser == "") {
                        text = "Số điện thoại không được để trống";
                        document.getElementById("phoneuser-err").innerHTML = text;
                        return false;
                    } else {
                        text = "";
                        document.getElementById("phoneuser-err").innerHTML = text;
                    }

                    // Loại tài khoản
                    if (role == "") {
                        text = "Loại tài khoản không được để trống và chỉ được lựa chọn 1: Admin và 0: Khách hàng";
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