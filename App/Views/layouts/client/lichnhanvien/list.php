<form class="form-horizontal" action="{{route('submitAdd')}}" method="post"
      onsubmit="return validateForm()" enctype="multipart/form-data">
    <div class="kh-all">
        <div>
            <div class="row mb10 kh-one">
                <label class="col-sm-3 text-end control-label col-form-label">Tài khoản</label>
                <div class="col-sm-6">
                    <input class="form-control khung-input" type="email" name="email"
                           id="emailuser" placeholder="{{$_SESSION['user']['username']}}" readonly>
                    <p style="color: red;" id="emailuser-err"></p>
                </div>
            </div>
            <div>
                <div class="row mb10 kh-one">
                    <label class="col-sm-3 text-end control-label col-form-label">Giờ bắt đầu</label>
                    <div class="col-sm-6">
                        <input class="form-control khung-input" type="number" name="timeStart"
                               id="timeStart" value="{{$data->timeStart}}">
                        <p style="color: red;" id="aduser-err"></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="row mb10 kh-one">
                    <label class="col-sm-3 text-end control-label col-form-label">Giờ kết thúc</label>
                    <div class="col-sm-6">
                        <input class="form-control khung-input" type="number" name="timeEnd"
                               id="timeEnd" value="{{$data->timeEnd}}">
                        <p style="color: red;" id="aduser-err"></p>
                    </div>
                </div>
            </div>
            <input type="hidden" name="status" id="status" value="0">
            <input type="hidden" name="idUser" id="idUser" value="{{$_SESSION['user']['id']}}">
        </div>


        <div class="text-center">
            <input class="btn btn-outline-success" type="submit" class="mr5" name="themmoi"
                   onclick="validateForm()" value="THÊM MỚI">
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