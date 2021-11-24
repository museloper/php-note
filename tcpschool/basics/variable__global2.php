<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>전역 변수</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-5">
            <xmp>
                <?
                    $var = 10;

                    function varFunc() {
                        echo "함수 내부에서 호출한 전역 변수 \$var의 값은 {$var}입니다. <br />";
                        echo "함수 내부에서 호출한 전역 변수 \$var의 값은 {$GLOBALS['var']}입니다. <br />";
                    }
                    
                    varFunc();
                    
                    echo "함수 밖에서 호출한 전역 변수 \$var의 값은 {$var}입니다.";
                ?>
            </xmp>
        </div>
        <div class="col-xs-2">
            <!-- 공백 -->
        </div>
        <div class="col-xs-5">
            <?php
                $var = 10;

                function varFunc() {
                    echo "함수 내부에서 호출한 전역 변수 \$var의 값은 {$var}입니다. <br />";
                    echo "함수 내부에서 호출한 전역 변수 \$var의 값은 {$GLOBALS['var']}입니다. <br />";
                }
                
                varFunc();
                
                echo "함수 밖에서 호출한 전역 변수 \$var의 값은 {$var}입니다.";
            ?>
        </div>
    </div>
</div>
</body>
</html>