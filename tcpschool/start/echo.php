<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>echo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-5">
            <xmp>
                <?
                echo '문자열을 출력한다. <br />';
                echo '인수를 전달할 때 괄호를 사용할 수 있다. <br />';
                echo 'echo() 함수의 키워드는 대소문자 구분이 없다. <br />';
                echo '첫 번째 인수,', ' 두 번째 인수';
                // echo ('첫 번째 인수,', ' 두 번째 인수'); // 오류 발생
                ?>
            </xmp>
        </div>
        <div class="col-xs-2">
            <!-- 공백 -->
        </div>
        <div class="col-xs-5">
            <?php
            echo '문자열을 출력한다. <br />';
            echo '인수를 전달할 때 괄호를 사용할 수 있다. <br />';
            echo 'echo() 함수의 키워드는 대소문자 구분이 없다. <br />';
            echo '첫 번째 인수,', ' 두 번째 인수';
            // echo ('첫 번째 인수,', ' 두 번째 인수'); // 오류 발생
            ?>
        </div>
    </div>
</div>
</body>
</html>