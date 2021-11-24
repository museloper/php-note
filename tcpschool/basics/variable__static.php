<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정적 변수</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-5">
            <xmp>
                <?
                    function counter() {
                        static $count = 0;
                        echo "함수 내부에서 호출한 static 변수 \$count의 값은 {$count}입니다. <br />";
                        $count++;
                    }
                    
                    counter();
                    counter();
                    counter();
                ?>
            </xmp>
        </div>
        <div class="col-xs-2">
            <!-- 공백 -->
        </div>
        <div class="col-xs-5">
            <?php
                function counter() {
                    static $count = 0;
                    echo "함수 내부에서 호출한 static 변수 \$count의 값은 {$count}입니다. <br />";
                    $count++;
                }
                
                counter();
                counter();
                counter();
            ?>
        </div>
    </div>
</div>
</body>
</html>