<?
function get_courses()
{
    // global $courses;
    include 'Data.php';
    return array_values($courses);
}

/**
 * @param string $sinhvien
 * 
 * Hàm này kiểm tra coi có cái khóa học gì đó hong
 * 
 * @return string
 */
function find_by_sinhvien($sinhvien)
{
    // global $courses;
    include 'Data.php';
    return array_key_exists($sinhvien, $courses) ? $courses[$sinhvien] : "Invalid course";
}
?>