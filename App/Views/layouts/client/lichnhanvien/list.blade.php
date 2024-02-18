@include('layouts.client.header')

<div class="main-content">
    <?php
    if (isset($_GET['status'])) {
        $status = $_GET['status'];
        if ($status === 'success') {
            echo "<h1 class='status'>Đăng nhập thành công!</h1>";
        } elseif ($status === 'failed') {
            echo "<h1 class='status'>Đăng nhập thất bại!</h1>";
        } elseif ($status === 'invalid') {
            echo "<h1 class='status'>Dữ liệu không hợp lệ!</h1>";
        }
    }
    ?>


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
                                <h5 class="text-center mb-5">DANH SÁCH LỊCH LÀM CỦA <?= $_SESSION['user']['username'] ?></h5>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <th>ID</th>
                                            <th>giờ bắt đầu</th>
                                            <th>giờ kết thúc</th>
                                            <th>trạng thái</th>
                                            <th></th>
                                        </tr>
                                        @foreach($data as $item)
                                        <tr>
                                            <td>{{$item->calendarWork_id}}</td>
                                            <td>{{$item->timeStart}}</td>
                                            <td>{{$item->timeEnd}}</td>
                                            <td>
                                                @if($item->status == 1)
                                                <p style="color: green">Đã duyệt</p>
                                                @else
                                                <p style="color: red">Chưa duyệt</p>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('edit-calendar',[$item -> calendarWork_id])}}"><input type="button" class="btn btn-outline-success" value="Sửa"> </a>
                                                <a onclick="confirm('Bạn có chắc chắn muốn xóa?')" href="{{route('delete-calendar',[$item -> calendarWork_id])}}"><input type="button" class="btn btn-outline-danger" value="Xóa"> </a></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    <a href="{{route('add-calendar')}}"><input type="button" class="btn btn-outline-success" value="Nhập thêm"></a>

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


</div>
@include('layouts.client.footer')