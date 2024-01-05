<?php
include "../Method/data.php";
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
        Đang chọn khóa học:
        <?= $ten_khoahoc; ?>
        -
        <?= $quy ?>
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