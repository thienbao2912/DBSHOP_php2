<div class="main-panel">

<style>
.khung-input{
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
                    <h5 class="text-center mb-5">Thêm mới tài khoản</h5>
            </div>
                <form class="form-horizontal" action="index.php?act=addtk" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">           
                    <div class="kh-all">
                        <div>
                            <div class="row mb10 kh-one">
                            <label class="col-sm-3 text-end control-label col-form-label">Tên tài khoản</label>   
                            <div class="col-sm-6">
                                <input class="form-control khung-input" type="text" name="ten" id="tenuser">
                                <p style="color: red;" id="tenuser-err"></p>
                                </div>
                            </div>
                            <div class="row mb10 kh-one">
                            <label class="col-sm-3 text-end control-label col-form-label">Mật khẩu</label> 
                            <div class="col-sm-6">
                                <input class="form-control khung-input" type="text" name="pass" id="mkuser">
                                <p style="color: red;" id="mkuser-err"></p>
                                </div>

                            </div>
                            <div class="row mb10 kh-one">
                            <label class="col-sm-3 text-end control-label col-form-label">Email</label> 
                            <div class="col-sm-6">
                                <input class="form-control khung-input" type="email" name="email" id="emailuser">
                                <p style="color: red;" id="emailuser-err"></p>
                            </div>
                    </div>
                        <div>
                            <div class="row mb10 kh-one">
                            <label class="col-sm-3 text-end control-label col-form-label">Địa chỉ</label>
                            <div class="col-sm-6">
                                <input class="form-control khung-input" type="text" name="diachi" id="aduser">
                                <p style="color: red;" id="aduser-err"></p>
                            </div>
                            </div>

                            <div class="row mb10 kh-one">
                            <label class="col-sm-3 text-end control-label col-form-label">Số điện thoại</label> 
                            <div class="col-sm-6">
                                <input class="form-control khung-input" type="number" name="sodienthoai" id="phoneuser">
                                <p style="color: red;" id="phoneuser-err"></p>
                            </div>
                            </div>

                            <div class="row mb10 kh-one">
                            <label class="col-sm-3 text-end control-label col-form-label">Loại Tài khoản(1:Admin 0:Khách)</label> 
                            <div class="col-sm-6">
                                <select class="form-select khung-input" type="number" name="role" id="role">
                                    <option value="0">0</option>
                                    <option value="1">1</option>

                                </select>
                                <p style="color: red;" id="role-err"></p>
                                <p style="color: red;" id="role-err2"></p>
                            </div>
                        </div>
                        </div>

                    </div>
                    
                    
                    <div class="text-center" >
                        <input class="btn btn-outline-success" type="submit" class="mr5" name="themmoi" onclick="validateForm()" value="THÊM MỚI">
                        <input class="btn btn-outline-danger" type="reset" class="mr5" value="NHẬP LẠI">
                        <a href="index.php?act=dskh"><input class="btn btn-outline-info" type="button" value="DANH SÁCH"></a>    
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
        }else{
            text = "";
            document.getElementById("tenuser-err").innerHTML = text;
        }
        
        // Mật khẩu
        if (mkuser == "") {
            text = "Mật khẩu không được để trống";
            document.getElementById("mkuser-err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("mkuser-err").innerHTML = text;
        }

        // Email
        if (emailuser == "") {
            text = "Email không được để trống";
            document.getElementById("emailuser-err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("emailuser-err").innerHTML = text;
        }

        // Địa chỉ
        if (aduser == "") {
            text = "Địa chỉ không được để trống";
            document.getElementById("aduser-err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("aduser-err").innerHTML = text;
        }

        // Số điện thoại
        if (phoneuser == "") {
            text = "Số điện thoại không được để trống";
            document.getElementById("phoneuser-err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("phoneuser-err").innerHTML = text;
        }

        // Loại tài khoản
        if (role == "") {
            text = "Loại tài khoản không được để trống và chỉ được lựa chọn 1: Admin và 0: Khách hàng";
            document.getElementById("role-err").innerHTML = text;
            return false;
        }else{
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