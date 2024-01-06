<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>

<body>
 <form action="">
    <select name="sinhvien">
        <?php foreach ($list_of_courses as $course_name): ?>
            <option value="<?= $course_name ?>">
                <?= $course_name ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Chọn sinh viên</button>
    </form>
</body>

</html>