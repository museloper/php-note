<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마법 상수</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <xmp>
                <?
                    function magicCons() {
                        echo "<br />LINE : ";
                        echo __LINE__;
                        
                        echo "<br />FILE :";
                        echo __FILE__;
                        
                        echo "<br />DIR : ";
                        echo __DIR__;
                        
                        echo "<br />FUNCTION : ";
                        echo __FUNCTION__;
                        
                        echo "<br />CLASS : ";
                        echo __CLASS__;
                        
                        echo "<br />METHOD : ";
                        echo __METHOD__;
                        
                        echo "<br />NAMESPACE : ";
                        echo __NAMESPACE__;
                    }
                    magicCons();
                ?>
            </xmp>
        </div>
        <div class="col-xs-0">
            <!-- 공백 -->
        </div>
        <div class="col-xs-6">
            <?php
                function magicCons() {
                    echo "<br />LINE : ";
                    echo __LINE__;
                    
                    echo "<br />FILE :";
                    echo __FILE__;
                    
                    echo "<br />DIR : ";
                    echo __DIR__;
                    
                    echo "<br />FUNCTION : ";
                    echo __FUNCTION__;
                    
                    echo "<br />CLASS : ";
                    echo __CLASS__;
                    
                    echo "<br />METHOD : ";
                    echo __METHOD__;
                    
                    echo "<br />NAMESPACE : ";
                    echo __NAMESPACE__;
                }
                magicCons();
            ?>
        </div>
    </div>
</div>
</body>
</html>