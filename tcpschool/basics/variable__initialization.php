<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>변수의 초기화</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-5">
            <xmp>
                <?
                // 선언되지 않은 변수의 기본 값
                var_dump($var);
                echo "<br />";

                // 초기화되지 않은 불리언(boolean) 타입 변수의 기본 값
                echo $bool ? "true" : "false";
                echo "<br />";

                // 초기화되지 않은 정수(integer) 타입 변수의 기본 값
                $int += 10;
                var_dump($int);
                echo "<br />";

                // 초기화되지 않은 실수(float) 타입 변수의 기본 값
                $flt += 3.14;
                var_dump($flt);
                echo "<br />";

                // 초기화되지 않은 문자열(string) 타입 변수의 기본 값
                $str .= "프로그래밍";
                var_dump($str);
                ?>
            </xmp>
        </div>
        <div class="col-xs-2">
            <!-- 공백 -->
        </div>
        <div class="col-xs-5">
            <?php
            // 선언되지 않은 변수의 기본 값
            var_dump($var);
            echo "<br />";

            // 초기화되지 않은 불리언(boolean) 타입 변수의 기본 값
            echo $bool ? "true" : "false";
            echo "<br />";

            // 초기화되지 않은 정수(integer) 타입 변수의 기본 값
            $int += 10;
            var_dump($int);
            echo "<br />";

            // 초기화되지 않은 실수(float) 타입 변수의 기본 값
            $flt += 3.14;
            var_dump($flt);
            echo "<br />";

            // 초기화되지 않은 문자열(string) 타입 변수의 기본 값
            $str .= "프로그래밍";
            var_dump($str);
            ?>
        </div>
    </div>
</div>
</body>
</html>