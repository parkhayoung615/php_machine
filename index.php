<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자판기 프로그램</title>
</head>

<body>
        <h1>자판기 이용 안내</h1>
        <p>
            본 음료수 자판기는 돈을 투입하면<br />
            투입한 돈으로 살 수 있는 음료수의 리스트가 나오게 되고,<br />
            그 리스트에서 원하는 음료수를 선택 후<br />
            음료수와 거스름돈이 출력되는 방식의 자판기입니다 !
        </p>
        <h3>돈을 투입해주세요.</h3>
        <form action="list.php" method="get">
            <input type="number" min="1" name="number">
            <input type="submit" value="전송">
        </form>

</body>

</html>