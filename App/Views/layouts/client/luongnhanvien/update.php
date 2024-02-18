<?php
    if(is_array($dm)){
        extract($dm);
    }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

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
                
            <form class="form-horizontal" action="index.php?act=updatedm" method="post">
            <div class="form-group row">
            <h5 class="text-center">Cập nhật loại sản phẩm</h5>
                <label for="id" class="col-sm-3 text-end control-label col-form-label">Mã loại</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"placeholder="Nhập mã....." name="id" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="tenloai" class="col-sm-3 text-end control-label col-form-label">Tên loại</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"placeholder="Nhập tên....." name="ten"required value="<?php if(isset($ten_loai)&&($ten_loai!="")) echo $ten_loai;?>">
                </div>
            </div>
            <br><br>
            <div class="text-center">
                
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                <input class="btn btn-outline-success" type="submit" name="capnhat" value="Cập nhật">
                
                
                <input class="btn btn-outline-danger"  type="reset" value="Nhập lại">
                <a href="index.php?act=listdm">
                    <input  class="btn btn-outline-info" type="button" value="Danh sách"></a>
            </div>
            <?php 
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
          
            ?>

        </form>
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
    
<di class="main-panel">
    </div>
    