<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배열의 홀</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-5">
            <xmp>
                <?
                    $arr = array();

                    $arr[10] = "banana";
                    
                    var_dump($arr);
                    echo "<br />";
                    
                    var_dump($arr[0]);
                    echo "<br />";
                    var_dump($arr[10]);
                    echo "<br />";
                    
                    var_dump(isset($arr[0]));
                    echo "<br />";
                    var_dump(isset($arr[10]));
                ?>
            </xmp>
        </div>
        <div class="col-xs-2">
            <!-- 공백 -->
        </div>
        <div class="col-xs-5">
            <?php
                $arr = array();

                $arr[10] = "banana";
                
                var_dump($arr);
                echo "<br />";
                
                var_dump($arr[0]);
                echo "<br />";
                var_dump($arr[10]);
                echo "<br />";
                
                var_dump(isset($arr[0]));
                echo "<br />";
                var_dump(isset($arr[10]));
            ?>
        </div>
    </div>
</div>
</body>
</html>