<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>루프를 이용한 배열로의 접근</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-5">
            <xmp>
                <?
                    $arr = array("apple", "banana", "orange");

                    for ($i = 0; $i < count($arr); $i++) {
                        echo $arr[i]."<br />";
                    }
                ?>
            </xmp>
        </div>
        <div class="col-xs-2">
            <!-- 공백 -->
        </div>
        <div class="col-xs-5">
            <?php
                $arr = array("apple", "banana", "orange");

                for ($i = 0; $i < count($arr); $i++) {
                    echo $arr[$i]."<br />";
                }
            ?>
        </div>
    </div>
</div>
</body>
</html>