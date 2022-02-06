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
                    $host = "localhost";
                    $user = "";
                    $password = "";
                    $db = "";

                    $conn = new mysqli($host, $user, $password, $db);

                    if(!$conn) {
                        echo "connection failed".$conn -> connect_error;
                    } else {
                        echo "connected to MySQL <br />";
                    }

                    $sql = "SELECT * FROM user_info";

                    $result = mysqli_query($conn, $sql);

                    while($info = mysqli_fetch_array($result)) {
                        echo "".$info['user_id']."<br />";
                        echo "".$info['user_pw']."<br />";
                    }

                ?>
            </xmp>
        </div>
        <div class="col-xs-2">
            <!-- 공백 -->
        </div>
        <div class="col-xs-5">
            <?php
                $host = "localhost";
                $user = "flyingcat";
                $password = "w311047w";
                $db = "fusionsoft";

                $conn = new mysqli($host, $user, $password, $db);

                if(!$conn) {
                    echo "connection failed".$conn -> connect_error;
                } else {
                    echo "connected to MySQL <br />";
                }

                $sql = "SELECT * FROM user_info";

                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($result)) {
                    echo "".$row['user_id']."<br />";
                    echo "".$row['user_pw']."<br />";
                }

            ?>
        </div>
    </div>
</div>
</body>
</html>