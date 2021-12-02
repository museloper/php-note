<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>연관 배열</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-5">
            <xmp>
                <?
                    $arr["apple"] = 1000;
                    $arr["banana"] = 2000;
                    $arr["orange"] = 1500;
                    
                    echo $arr["apple"].", ".$arr["banana"].", ".$arr["orange"];
                ?>
            </xmp>
        </div>
        <div class="col-xs-2">
            <!-- 공백 -->
        </div>
        <div class="col-xs-5">
            <?php
                $arr["apple"] = 1000;
                $arr["banana"] = 2000;
                $arr["orange"] = 1500;
                
                echo $arr["apple"].", ".$arr["banana"].", ".$arr["orange"];
            ?>
        </div>
    </div>
</div>
</body>
</html>