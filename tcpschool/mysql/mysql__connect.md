## MySQL 연결

### MySQLi와 PDO

PHP 7.0.0 이후 버전에서 MySQL 데이터베이스에 연결하기 위해 사용할 수 있는 API는 다음과 같다. 

1. MySQL improved extension (MySQLi)
2. PHP Data Objects (PDO)

<br />

### 서버와의 연결

```php
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
```