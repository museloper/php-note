<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문자열 내에서 변수 사용</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-5">
            <xmp>
                <?
                    $var = 10;

                    echo "$var";    // 10
                    echo "<br />";

                    echo "{$var}";  // 10
                    echo "<br />";
                    
                    echo "변수 \$var에 저장된 값은 $var입니다.";    // 변수 $var에 저장된 값은 .
                    echo "<br />";

                    echo "변수 \$var에 저장된 값은 {$var}입니다.";  // 변수 $var에 저장된 값은 10입니다.
                    echo "<br />";
                ?>
            </xmp>
        </div>
        <div class="col-xs-2">
            <!-- 공백 -->
        </div>
        <div class="col-xs-5">
            <?php
                $var = 10;

                echo "$var";    // 10
                echo "<br />";

                echo "{$var}";  // 10
                echo "<br />";
                
                echo "변수 \$var에 저장된 값은 $var입니다.";    // 변수 $var에 저장된 값은 .
                echo "<br />";

                echo "변수 \$var에 저장된 값은 {$var}입니다.";  // 변수 $var에 저장된 값은 10입니다.
                echo "<br />";
            ?>
        </div>
    </div>
</div>
</body>
</html>