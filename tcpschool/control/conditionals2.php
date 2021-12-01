<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>조건문</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-5">
            <xmp>
                <?
                    $num01 = 20;
                    $num02 = 20;
                    
                    if ($num01 == $num02) {
                        echo "{$num01}과 {$num02}은 같은 수입니다.";
                    } else {
                        if ($num01 < $num02)
                            echo "{$num01}은 {$num02}보다 작은 수입니다.";
                        else 
                            echo "{$num01}은 {$num02}보다 큰 수입니다.";
                    }
                ?>
            </xmp>
        </div>
        <div class="col-xs-2">
            <!-- 공백 -->
        </div>
        <div class="col-xs-5">
            <?php
                $num01 = 20;
                $num02 = 20;
                
                if ($num01 == $num02) {
                    echo "{$num01}과 {$num02}은 같은 수입니다.";
                } else {
                    if ($num01 < $num02)
                        echo "{$num01}은 {$num02}보다 작은 수입니다.";
                    else 
                        echo "{$num01}은 {$num02}보다 큰 수입니다.";
                }
            ?>
        </div>
    </div>
</div>
</body>
</html>