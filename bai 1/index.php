<?php

$course = [

    'sinhvienpc01' => 'Lý Thiên Bảo',

    'sinhvienpc02' => 'Phạm Thị Khương Nhi',

    'sinhvienpc03' => ' Nguyễn Khải Hoàng'
];
//model

function get_courses()
{

    global $course;

    return array_values($course);
}
function find_by_sinhvien($sinhvien)
{

    global $course;

    return (array_key_exists($sinhvien, $course) ? $course[$sinhvien] : 'Sinh viên');
}
//controller

$list_of_courses = get_courses();

$sinhvien = (!empty($_GET['sinhvien']) ? $_GET['sinhvien'] : '');

$course_name = find_by_sinhvien($sinhvien);

$page_content = $course_name;

?>

<!--view-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?= $page_content; ?>

    <select name="courses">

        <?php foreach ($list_of_courses as $course_name): ?>

            <option>
                <?= $course_name ?>
            </option>

        <?php endforeach; ?>

    </select>
</body>

</html>