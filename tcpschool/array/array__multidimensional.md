## 다차원 배열

> 다차원 배열은 2차원 이상의 배열을 의미하며, 배열 요소로 또 다른 배열을 사용한다.

<br />

### 2차원 배열 

2차원 배열이란 배열 요소로 또 다른 1차원 배열을 사용하는 배열을 의미한다.

2차원 배열은 다음과 같은 문법에 따라 선언된다.

```php
$배열이름 = array(
    array(),
    array(),
    ...
);
```

2차원 배열은 1차원 배열과 같이 `array()` 함수를 사용하여 선언한다.  
1차원 배열과 다른 점은 `array()` 함수를 한 번 더 사용하여, 배열 요소에 또 다른 1차원 배열을 생성한다는 점이다.

2차원 배열은 행과 열을 가진 행렬과 같은 모양으로 구성된다.  
1차원 배열의 갯수만큼 행의 수가 늘어나고, 열의 수는 각 1차원 배열의 배열 요소 개수로 정해진다.

<br />

### 2차원 배열 오소 입력

2차원 배열도 배열 요소에 접근하기 위해서는 인덱스를 사용해야 한다.  
2차원 배열에 속한 요소에 접근할 때는 `[]` 연산자를 두 번 사용하면 된다.

```php
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
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/array/array__two-dimensional.php)

1차원 배열과 마찬가지로 2차원 배열으 생성하면서 동시에 배열 요소를 초기화할 수도 있다.

```php
$배열이름 = array(
    array(배열요소00, 배열요소01, ...),
    array(배열요소10, 배열요소11, ...),
    ...
);
```

다음 예제는 앞선 예제와 같은 2차원 배열을 생성과 동시에 초기화하는 예제이다.

```php
$arr = array(
    array("apple", "korea", 1000),
    array("banana", "philippines", 2000),
    array("orange", "us", 1500)
);
```

<br />

### 루프를 이용한 2차원 배열로의 접근

2차원 배열도 1차원 배열과 마찬가지로 for 문에 배열의 인덱스를 이용하여 배열 요소에 접근할 수 있다.  
하지만 2차원 배열에서는 1차원 배열과는 달리 행과 열에 대해 for 문을 2번 사용해야 한다.

```php
$arr = array(
    array("apple", "korea", 1000),
    array("banana", "philippines", 2000),
    array("orange", "us", 1500)
);

for ($row = 0; $row < count($arr); $row++) {
    for ($column = 0; $column < count($arr[$row]); $column++) {
        echo $arr[$row][$column].", ";
    }

    echo "<br />";
}
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/array/array__two-dimensional__loop.php)