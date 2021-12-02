## 배열

> PHP 에서 배열(array)은 맵(map)으로 이루어진, 순서가 있는 집합을 의미한다.  
맵(map)은 한 쌍의 키(key)와 값(value)으로 이루어져 있다.  
이 때 배열을 구성하는 각각의 맵을 배열 요소(array element)라고 한다.  
배열은 데이터를 많이 다뤄야 하는 경우 사용할 수 있는 가장 기본적인 **자료 구조**이다.

<br />

### 1차원 배열

1차원 배열은 가장 기본적인 배열로 다음과 같은 문법에 따라 선언된다. 

```php
$배열이름 = array();
```

PHP 에서는 `array()` 라는 함수를 이용해 배열을 생성한다.  
배열 이름은 배열을 선언한 후에 해당 배열에 접근하기 위해 사용한다. 

<br />

### 배열 오소의 참조 

PHP 에서는 배열 요소에 접근하기 위해 인덱스(index)를 사용한다.  
대부분의 다른 프로그래밍 언어와 마찬가지로 0부터 시작하는 숫자 인덱스를 지원한다. 

배열의 각 요소를 참고하고 싶을 때는 `[]` 연산자를 사용한다.

```php
$배열이름[인덱스]
```

PHP 에서는 인덱스로 숫자뿐만 아니라 문자열을 사용할 수도 있다. 

인덱스로 문자열을 사용하는 배열을 **연관 배열(associative array)** 이라고 한다.  

<br />

### 배열 요소의 추가

PHP 에서는 인덱스를 이용하여 배열에 요소를 추가할 수 있다.

다음 예제는 배열을 생성하고, 인덱스를 이용하여 배열 요소를 추가하는 예제이다.

```php
$arr = array();

$arr[0] = "apple";
$arr[1] = "banana";
$arr[2] = "orange";
```

혹은, 배열 요소의 인덱스를 생략하고 배열 요소를 추가할 수 있다.

```php
$arr = array();

$arr[] = "apple";
$arr[] = "banana";
$arr[] = "orange";
```

위와 같은 경우에는 인덱스가 0부터 시작하여 1씩 증가하며 **순서대로** 저장된다.

또한, 배열을 생성하면서 동시에 배열 요소를 초기화할 수 있다.

```php
$배열이름 = array(배열요소1, 배열요소2, ...);
```

이 방법을 사용하면 초기화 리스트에 따라 각각의 배열 요소가 **순서대로** 추가된 배열이 생성된다.

<br />

### 배열의 홀(hole)

PHP 에서는 배열의 **특정 인덱스에만** 배열 요소를 추가할 수 있다.

```php
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
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/array/array__hole.php)

위의 예제에서 배열 요소가 존재하는 인덱스는 10 뿐이며, 나머지 인덱스에는 배열 요소가 존재하지 않는다.  
이렇게 인덱스에 대응하는 배열 요소가 없는 부분을 배열의 홀(hole)이라고 한다.  
PHP 에서 이러한 배열의 홀(hole)을 참조하게 되면, **초기화되지 않은 변수를 참조**할 때처럼 `NULL` 을 반환한다.

추가로 `isset()` 함수는 인수로 전달받은 변수가 초기화되어 있는지를 확인한다.

<br />

### 루프를 이용한 배열로의 접근

for 문을 사용하면 배열의 인덱스를 이용하여 더욱 쉽고 간단하게 배열 요소에 접근할 수 있다.

```php
$arr = array("apple", "banana", "orange");

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[i]."<br />";
}
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/array/array__loop.php)

위의 예제에서 `count()` 함수는 배열의 모든 요소의 개수를 반환하는 함수이다.

**하지만** 앞서 살펴본 홀(hole)을 가지는 배열에서는 for 문을 사용하면 모든 배열 요소에 접근할 수 없다.  
따라서 PHP 에서는 특별한 반복문인 foreach 문을 제공하여 for 문보다 간편하게 배열 요소에 접근할 수 있도록 해준다.

```php
$arr = array();

$arr[2] = "apple";
$arr[3] = "banana";
$arr[4] = "orange";

for ($i = 0; $i < count($arr); $i++) {
    echo "\$arr[{$i}] : ".$arr[$i]."<br>";
}

echo "<br />";

foreach ($arr as $element) {
    echo $element."<br />";
}
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/array/array__foreach.php)

위의 예제에서 알 수 있듯이 `count()` 함수는 배열 요소의 개수를 계산할 때 배열의 홀(hole)을 포함하지 않는다.  
따라서 홀을 가지는 배열에서는 정확한 배열의 길이를 구할 수 없다.  
하지만 foreach 문을 사용하면 에제외 같이 홀이 아닌 배열 요소에만 정확히 접근할 수 있다.