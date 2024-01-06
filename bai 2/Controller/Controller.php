<?
include '../Model/Model.php';
?>
<?
$list_of_courses = get_courses();
$sinhvien = (!empty($_GET['sinhvien'])) ? $_GET['sinhvien'] : '';
$courses_name = find_by_sinhvien($sinhvien);
?>
<?
include '../View/View.php';
?>