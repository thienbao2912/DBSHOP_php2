<!DOCTYPE html>
<html dir="ltr" lang="en">



<div class="main-content">



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
                        <h5 class="text-center mb-5">DANH SÁCH TÀI KHOẢN</h5>
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                <tr>
                    <th></th>
                    <th>ID khách hàng</th>
                    <th>Tên đăng nhập</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Vai trò</th>
                    <th></th>
                </tr>
                <?php 
                    // foreach($listtaikhoan as $khachhang){
                    //     extract($khachhang);
                    //     $suatk = "index.php?act=suatk&id=".$id;
                    //     $xoatk = "index.php?act=xoatk&id=".$id;

                    //     echo '<tr>
                    //             <td><input type="checkbox" name="" id=""></td>
                    //             <td>'.$id.'</td>
                    //             <td>'.$ten.'</td>
                    //             <td>'.$email.'</td>
                    //             <td>'.$diachi.'</td>
                    //             <td>'.$sodienthoai.'</td>
                    //             <td>'.($role == 1 ? 'Admin' : 'Khác hàng').'</td>
                                
                    //             <td>
                    //             <a href="'.$xoatk.'"><input type="button" class="btn btn-outline-danger" value="Xóa"> </a>
                    //             <a href="'.$suatk.'"><input type="button" class="btn btn-success" value="Sửa"> </a></td>
                    //         </tr>';
                    // }
                ?>
                <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>1</td>
                                <td>Bảo</td>
                                <td>thienbaoct12@gmail.com</td>
                                <td>quận nhất</td>
                                <td>0706899951</td>
                                <td>1</td>
                                
                                <td>
                                <a href="'.$suatk.'"><input type="button" class="btn btn-outline-success" value="Sửa"> </a>
                                <a href="'.$xoatk.'"><input type="button" class="btn btn-outline-danger" value="Xóa"> </a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>2</td>
                                <td>Nhi</td>
                                <td>khuongnhict@gmail.com</td>
                                <td>quận nhì</td>
                                <td>093999999</td>
                                <td>0</td>
                                
                                <td>
                                <a href="'.$suatk.'"><input type="button" class="btn btn-outline-success" value="Sửa"> </a>
                                <a href="'.$xoatk.'"><input type="button" class="btn btn-outline-danger" value="Xóa"> </a></td>
                            </tr>

            </table>
            <a href="index.php?act=adddm"><input type="button" class="btn btn-outline-success" value="Nhập thêm"></a>

                        </div>
                        </div>
                        <!-- <td colspan="5">
                         <input  type="button" class="btn btn-outline-success" value="Chọn tất cả">
                          <input type="button" class="btn btn-outline-warning" value="Bỏ chọn tất cả">
                          <input type="button" class="btn btn-outline-danger" value="Xóa các mục đã chọn">
                          <a href="index.php?act=adddm"><input type="button" class="btn btn-outline-primary" value="Nhập thêm"></a>
                    </td> -->
                         

                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->


    
   </div>
   
   <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>




