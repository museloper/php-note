<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>반복문</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-5">
            <xmp>
                <?
                    $arr = array(2, 4, 6, 8);

                    foreach ($arr as $value) {
                        echo "변수 \$value의 현재값은 {$value}입니다. <br />";
                    }
                ?>
            </xmp>
        </div>
        <div class="col-xs-2">
            <!-- 공백 -->
        </div>
        <div class="col-xs-5">
            <?php
                $arr = array(2, 4, 6, 8);

                foreach ($arr as $value) {
                    echo "변수 \$value의 현재값은 {$value}입니다. <br />";
                }
            ?>
        </div>
    </div>
</div>
</body>
</html>