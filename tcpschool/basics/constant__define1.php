<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>define() 함수</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-5">
            <xmp>
                <?
                    define("PHP", "PHP 수업에 잘 오셨습니다! <br />"); 
                    echo PHP;
                    echo php;
                    
                    define("PHP", "<br />PHP 수업에 잘 오셨습니다!", true);
                    echo php;
                    echo Php;
                ?>
            </xmp>
        </div>
        <div class="col-xs-2">
            <!-- 공백 -->
        </div>
        <div class="col-xs-5">
            <?php
                define("PHP", "PHP 수업에 잘 오셨습니다! <br />"); 
                echo PHP;
                echo php;
                
                define("PHP", "<br />PHP 수업에 잘 오셨습니다!", true);
                echo php;
                echo Php;
            ?>
        </div>
    </div>
</div>
</body>
</html>