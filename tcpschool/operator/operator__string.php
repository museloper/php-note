<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문자열 연산자</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-5">
            <xmp>
                <?
                    $str01 = "PHP 수업";
                    $str02 = "에 오신것을 환영합니다.";
                    
                    echo "두 문자열을 합친 문자열은 '".($str01.$str02)."' 입니다.<br />";
                    echo $str01, $str02;
                ?>
            </xmp>
        </div>
        <div class="col-xs-2">
            <!-- 공백 -->
        </div>
        <div class="col-xs-5">
            <?php
                $str01 = "PHP 수업";
                $str02 = "에 오신것을 환영합니다.";
                
                echo "두 문자열을 합친 문자열은 '".($str01.$str02)."' 입니다.<br />";
                echo $str01, $str02;
            ?>
        </div>
    </div>
</div>
</body>
</html>