<!DOCTYPE html>
<html dir="ltr" lang="en">



<div class="main-content">



<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class=" page-wrapper">
   
    <div class="">
      <br><br>
        <div class="row">
            <div class="container pt-5">

                <div class="card">
                    <div class="card-body">
                    <div class="form-group row">
                        <h5 class="text-center mb-5">DANH SÁCH LƯƠNG</h5>
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                <tr>
                    <th></th>
                    <th>Mã Nhân viên</th>
                    <th>Mã Chức vụ</th>
                    <th>Lương tháng</th>
                    <th></th>
                </tr>
                <?php 
                    // foreach($listdanhmuc as $danhmuc){
                    //     extract($danhmuc);
                    //     $suadm = "index.php?act=suadm&id=".$id;
                    //     $xoadm = "index.php?act=xoadm&id=".$id;

                        // echo '<tr>
                        //         <td><input type="checkbox" name="" id=""></td>
                        //         <td>'.$id.'</td>
                        //         <td>'.$ten.'</td>
                               
                        //         <td><a href="'.$suadm.'"><input type="button" class="btn btn-outline-success" value="Sửa"></a> 
                        //         <a href="'.$xoadm.'"><input type="button" class="btn btn-outline-danger" value="Xóa"> </a></td>
                        //     </tr>';
                    // }
                ?>
                <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>1</td>
                                <td>1</td>
                               <td>5.000đ</td>
                                <td><a href="'.$suadm.'"><input type="button" class="btn btn-outline-success" value="Sửa"></a> 
                                <a href="'.$xoadm.'"><input type="button" class="btn btn-outline-danger" value="Xóa"> </a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>2</td>
                                <td>2</td>
                               <td>2.000đ</td>
                                <td><a href="'.$suadm.'"><input type="button" class="btn btn-outline-success" value="Sửa"></a> 
                                <a href="'.$xoadm.'"><input type="button" class="btn btn-outline-danger" value="Xóa"> </a></td>
                            </tr>
                            
            </table>
                        </div>
                        </div>
                        <td colspan="5">
                         
                          <a href="index.php?act=adddm"><input type="button" class="btn btn-outline-success" value="Nhập thêm"></a>
                    </td>
                         

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




