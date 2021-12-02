<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2차원 배열</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-5">
            <xmp>
                <?
                    $arr = array(
                        array(),
                        array(),
                        array()
                    );
                    
                    $arr[0][0] = "apple";
                    $arr[0][1] = "korea";
                    $arr[0][2] = 1000;
                    
                    $arr[1][0] = "banana";
                    $arr[1][1] = "philippines";
                    $arr[1][2] = 2000;
                    
                    $arr[2][0] = "orange";
                    $arr[2][1] = "us";
                    $arr[2][2] = 1500;
                    
                    echo $arr[0][0].", ".$arr[0][1].", ".$arr[0][2]."<br />";
                    echo $arr[1][0].", ".$arr[1][1].", ".$arr[1][2]."<br />";
                    echo $arr[2][0].", ".$arr[2][1].", ".$arr[2][2];
                ?>
            </xmp>
        </div>
        <div class="col-xs-2">
            <!-- 공백 -->
        </div>
        <div class="col-xs-5">
            <?php
                $arr = array(
                    array(),
                    array(),
                    array()
                );
                
                $arr[0][0] = "apple";
                $arr[0][1] = "korea";
                $arr[0][2] = 1000;
                
                $arr[1][0] = "banana";
                $arr[1][1] = "philippines";
                $arr[1][2] = 2000;
                
                $arr[2][0] = "orange";
                $arr[2][1] = "us";
                $arr[2][2] = 1500;
                
                echo $arr[0][0].", ".$arr[0][1].", ".$arr[0][2]."<br />";
                echo $arr[1][0].", ".$arr[1][1].", ".$arr[1][2]."<br />";
                echo $arr[2][0].", ".$arr[2][1].", ".$arr[2][2];
            ?>
        </div>
    </div>
</div>
</body>
</html>