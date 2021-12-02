## 연관 배열

> PHP 에서는 숫자뿐만 아니라 문자열도 배열 요소의 인덱스로 사용할 수 있다.  
> 만약 정수와 문자열 이외에 다른 타입의 값을 키값으로 사용하면, 내부적으로 정수와 문자열로 타입 변환이 이루어진다.

<br />

### 연관 배열의 참조

연관 배열의 각 요소를 참조하고 싶을 때는 배열의 이름과 함께 키(key)를 사용하면 된다.  
연관 배열에 특정 키값으로 값을 저장하는 방법은 다음과 같다.

```php
$배열이름["키"] = 값;
```

```php
$arr = array();

$arr["apple"] = 1000;
$arr["banana"] = 2000;
$arr["orange"] = 1500;
```

또한, 연관 배열을 생성하면서 동시에 배열 요소를 초기화할 수도 있다.  
이때는 키와 값 사이에 `=>` 를 넣어 주어 배열 요소에 저장될 키와 값을 지정할 수 있다.

```php
$배열이름 = array("키1" => 값1, "키2" => 값2, ...);
```

```php
$arr = array(
    "apple" => 1000,
    "banana" => 2000,
    "orange" => 1500
);

echo $arr["apple"].", ".$arr["banana"].", ".$arr["orange"];
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/array/array__associative1.php)

또한, 생성된 연관 배열에 새로운 요소를 추가할 수도 있다.

```php
$arr = array("apple" => 1000);

$arr["banana"] = 2000;
$arr["orange"] = 1500;
```

만약 해당 배열이 존재하지 않으면, 해당 이름으로 새로운 배열을 만든 후에 배열 요소를 추가한다.

```php
$arr["apple"] = 1000;
$arr["banana"] = 2000;
$arr["orange"] = 1500;

echo $arr["apple"].", ".$arr["banana"].", ".$arr["orange"];
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/array/array__associative2.php)

<br />

### 루프를 이용한 연관 배열로의 접근

연관 배열의 인덱스는 숫자가 아니므로, for 문을 사용하여 배열 요소에 접근할 수 없다.  
대신에 foreach 문이나 `each()` 함수를 사용하여 접근해야 한다.

foreach 문을 사용하면 연관 배열 요소의 키값과 요소의 값을 변수에 따로 저장하여 루프 내에서 사용할 수 있다.

```php
$arr = array(
    "apple" => 1000,
    "banana" => 2000,
    "orange" => 1500
);

foreach ($arr as $key => $value) {
    echo $key." : ".$value."<br />";
}
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/array/array__associative__loop.php)

`each()` 함수는 배열 커서(array cursor)가 현재 가리키고 있는 배열 요소를 반환하고, 다음 배열 요소를 가리키도록 한다.  
이 함수는 가리키는 요소의 다음 요소가 배열의 마지막 요소라면 더는 동작하지 않는다.

```php
$arr = array("apple" => 1000, "banana" => 2000, "orange" => 1500);

while ($element = each($arr)) {
    echo $element['key']." : ".$element['value']."<br />";
}
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/array/array__associative__each.php)
