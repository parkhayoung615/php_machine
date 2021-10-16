<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
    <?php
    // DB 설정
    $host = "localhost";
    $dbname = "machine";
    $charset = "utf8mb4";
    $user = "root";
    $pass = "";
    $price = "price";

    $number = $_GET['number'];

    echo "{$number}원을 투입하셨습니다 !!" . "<br />";
    echo "투입하신 {$number}원으로 살 수 있는 음료수의 리스트입니다 !" . "<br />";

    $option = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];

    $db = new PDO("mysql:host={$host}; dbname={$dbname}; charset={$charset}", $user, $pass, $option);
    $sql = "SELECT * FROM machine WHERE amount > 0 AND $number >= $price";
    $result = $db->query($sql);
    $list = $result->fetchAll();
    ?>
    <!-- 전처리 -->

    <!-- 조건문 -->
    <?php if ($list) : ?>
        <table>
            <tr>
                <th>번호</th>
                <th>음료수명</th>
                <th>잔여량</th>
                <th>가격</th>
            </tr>

            <?php foreach ($list as $item) : ?>
                <tr>
                    <td><?= $item->id ?></td>
                    <td><?= $item->name ?></td>
                    <td><?= $item->amount ?></td>
                    <td><?= $item->price ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <form action="end.php" method="get">
            <input type="number" min="1" max="10" name="selectMenu">
            <input type="submit" value="<?= $number ?>" name="inputNumber">
        </form>
    <?php else : ?>
        <h3>돈이 부족해요 ㅠ.ㅠ</h3>
        <h4>...( ＿ ＿)ノ <?=$number?>원이 반환되었습니다</h4>
        <a href="index.php">메인으로 돌아가기</a>
    <?php endif; ?>


    <body>

</html>