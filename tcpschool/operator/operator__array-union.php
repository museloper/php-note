<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배열 합집합 연산자</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <xmp>
                <?
                    $arr01 = array("first" => "PHP", "second" => "MySQL");
                    $arr02 = array("first" => "HTML",  "second" => "CSS", "third" => "JavaScript");
                    
                    $result01 = $arr01 + $arr02;
                    var_dump($result01);
                    
                    echo "<br />";
                    
                    $result02 = $arr02 + $arr01;
                    var_dump($result02);
                    
                    echo "<br />";
                    
                    $arr03 = array("PHP", "MySQL");
                    $arr04 = array("HTML", "CSS", "JavaScript");
                    
                    $result03 = $arr03 + $arr04;
                    var_dump($result03);
                    
                    echo "<br />";
                    
                    $result04 = $arr04 + $arr03;
                    var_dump($result04);
                ?>
            </xmp>
        </div>
        <div class="col-xs-6">
            <?php
                $arr01 = array("first" => "PHP", "second" => "MySQL");
                $arr02 = array("first" => "HTML",  "second" => "CSS", "third" => "JavaScript");
                
                $result01 = $arr01 + $arr02;
                var_dump($result01);
                
                echo "<br />";
                
                $result02 = $arr02 + $arr01;
                var_dump($result02);
                
                echo "<br />";
                
                $arr03 = array("PHP", "MySQL");
                $arr04 = array("HTML", "CSS", "JavaScript");
                
                $result03 = $arr03 + $arr04;
                var_dump($result03);
                
                echo "<br />";
                
                $result04 = $arr04 + $arr03;
                var_dump($result04);
            ?>
        </div>
    </div>
</div>
</body>
</html>