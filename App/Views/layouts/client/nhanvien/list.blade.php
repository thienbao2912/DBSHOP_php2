@include('layouts.client.header')
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
                                <h5 class="text-center mb-5">DANH SÁCH NHÂN VIÊN</h5>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <th></th>
                                            <th>ID nhân viên</th>
                                            <th>Tên đăng nhập</th>
                                            <th>Chức vụ</th>
                                            <th>Email</th>
                                            <th>Điện thoại</th>
                                            <th>Email</th>
                                            <th>Địa chỉ</th>
                                            <th></th>
                                        </tr>
                                        @foreach($data as $item)
                                            <tr>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->username}}</td>
                                                <td>
                                                    @if($item->roleID == 1)
                                                        <p style="color: green">Quản lý</p>
                                                    @else
                                                        <p style="color: red">Nhân viên</p>
                                                    @endif
                                                </td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->phone}}</td>
                                                <td>{{$item->address}}</td>
                                                <td>

                                                    <a href="{{route('edit-user',[$item->id])}}"><input type="button"
                                                                                class="btn btn-outline-success"
                                                                                value="Sửa">
                                                    </a>
                                                    <a onclick="confirm('Bạn có chắc chắn muốn xóa?')" href="{{route('delete-user',[$item->id])}}"><input type="button"
                                                                                class="btn btn-outline-danger"
                                                                                value="Xóa"> </a></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <a href="{{route('add-user')}}"><input type="button" class="btn btn-outline-success" value="Nhập thêm"></a>
                                </div>
                            </div>
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
    <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
    <script>
        $(document).ready(function () {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
