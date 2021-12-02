<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>제목</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-5">
            <xmp>
                <?
                    $arr = array(
                        "apple" => 1000,
                        "banana" => 2000,
                        "orange" => 1500
                    );
                    
                    foreach ($arr as $key => $value) {
                        echo $key." : ".$value."<br />";
                    }
                ?>
            </xmp>
        </div>
        <div class="col-xs-2">
            <!-- 공백 -->
        </div>
        <div class="col-xs-5">
            <?php
                $arr = array(
                    "apple" => 1000,
                    "banana" => 2000,
                    "orange" => 1500
                );
                
                foreach ($arr as $key => $value) {
                    echo $key." : ".$value."<br />";
                }
            ?>
        </div>
    </div>
</div>
</body>
</html>