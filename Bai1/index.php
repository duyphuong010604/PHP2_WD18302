<?php
echo "Lập trình PHP2";
$khoahoc = [
    "s1" => "Java",
    "s2" => "Python",
    "s3" => "JavaScript"
];



function get_khoahoc()
{
    global $khoahoc;
    return array_values($khoahoc);
}


function find_by_semester($semester)
{
    global $khoahoc;
    return (array_key_exists($semester, $khoahoc) ? $khoahoc[$semester] : "Hong co roi!");
}



$semeter = (!empty($_GET['khoahoc']) ? $_GET["khoahoc"] : " ");
$ten_khoahoc = find_by_semester($semeter);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1.1_VO DUY PHUONG</title>
</head>

<body>
    <h1>
        <?= $ten_khoahoc; ?>
    </h1>
    <div class="">
        <form action="">
            <label for="khoahoc">
                Các khóa học hiện có:
            </label>
            <select name="khoahoc" id="">
                <?
                foreach ($khoahoc as $key => $session):
                    ?>
                    <option value="<?= $key ?>">
                        <?= $session ?>
                    </option>
                <? endforeach ?>
            </select>
            <button type="submit">
                Gửi khóa học
            </button>
        </form>
    </div>
</body>

</html>