## 기타 연산자

### 문자열 연산자(string operator)

PHP 에서는 문자열 연산자 `.`를 사용하여 문자열을 연결할 수 있다.  
이 연산자는 얼핏 보기에 연산자가 아닌 것처럼 보이지만 양쪽에 위치한 두 문자열을 연결해 주는 역할을 한다. 

또한 `echo()` 함수에서는 쉼표 연산자 `,`를 이용하여 문자열을 연결할 수 있다.

```php
$str01 = "PHP 수업";
$str02 = "에 오신것을 환영합니다!";

echo "두 문자열을 합친 문자열은 '".($str01.$str02)."'입니다.<br />";
echo $str01, $str02;
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/operator/operator__string.php)

PHP 에서는 문자열 내에 변수의 이름을 포함시켜 해당 변수의 값으로 동적으로 문자열에 삽입할 수도 있다. 

<br />

### 배열 합집합 연산자(array union operator)

배열 합집합 연산자 `+`는 피연산자로 오는 두 배열의 합집합을 반환한다. 

```php
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
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/operator/operator__array-union.php)

어느 집합이 앞에 위치하는가에 따라 합집합 연산의 결과가 달라지는 것을 확인할 수 있다.