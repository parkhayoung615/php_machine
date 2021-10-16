<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // DB 설정

    $inputNumber = $_GET['inputNumber'];
    $selectMenu = $_GET['selectMenu'];


    if ($selectMenu == 1) {
        selecter("밀크커피", 400);
    } else if ($selectMenu == 2) {
        selecter("생수", 500);
    } else if ($selectMenu == 3) {
        selecter("캔커피", 600);
    } else if ($selectMenu == 4) {
        selecter("오렌지 쥬스", 700);
    } else if ($selectMenu == 5) {
        selecter("환타", 800);
    } else if ($selectMenu == 6) {
        selecter("보리차", 1200);
    } else if ($selectMenu == 7) {
        selecter("포카리스웨트", 1500);
    } else if ($selectMenu == 8) {
        selecter("콜라", 1500);
    } else if ($selectMenu == 9) {
        selecter("사이다", 1500);
    } else if ($selectMenu == 10) {
        selecter("민초우유", 1800);
    } else {
        echo "잘못 입력하셨습니다 ╯︿╰";
    }


    function selecter($value, $selectMenu)  // 메뉴 이름, 메뉴 가격
    {
        global $inputNumber;
        $change = $inputNumber - $selectMenu;

        if ($change >= 0) {
            echo "( *^-^)ρ {$value}가 나왔습니다!" . "<br/>";
            echo "(っ °Д °;)っ 거스름돈 {$change}원도 챙겨가세요!";

            $host = "localhost";
            $dbname = "machine";
            $charset = "utf8mb4";
            $user = "root";
            $pass = "";

            $option = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];
            $db = new PDO("mysql:host={$host}; dbname={$dbname}; charset={$charset}", $user, $pass, $option);

            $sql = "UPDATE machine SET amount = amount-1 WHERE name = '{$value}'";
            $db->exec($sql);
            echo "<a href='index.php'>메인으로 돌아가기</a>";
        } else {
            echo "잘못 입력하신 것 같아요... ㅠ.ㅠ";
            echo "<h4>...( ＿ ＿)ノ {$inputNumber}원이 반환되었습니다</h4><br/>
            <a href='index.php'>메인으로 돌아가기</a>";
        }
    }

    ?>
</body>

</html>