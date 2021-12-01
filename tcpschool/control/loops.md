## 반복문

> 반복문이란 프로그램 내에서 같은 명령을 일정 횟수만큼 반복하여 수행하도록 제어하는 명령문이다.

<br />

### `for` 문

for 문은 **초기식**, **조건식**, **증감식**을 모두 포함하고 있는 반복문이다.

```php
for (초기식; 조건식; 증감식) {
    // 조건식의 결과가 참인 동안 반복적으로 실행하고자 하는 명령문
}
```

```php
for ($i = 0; $i < 5; $i++) {
    echo "{$i} <br />";
}
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/control/loops1.php)

<br />

### `foreach` 문

foreach 문은 일반적인 for 문과는 전혀 다른 형태의 반복문이다.  
foreach 문은 배열의 모든 요소를 손쉽게 순회할 수 있도록 해준다. 

이 반복문은 루프마다 배열의 각 요소를 지정된 변수에 대입한다.  
이렇게 대입받은 변수를 이용하면 루프 안에서 배열의 각 요소에 순차적으로 접근할 수 있다.  
따라서 foreach 문은 **정확히 배열의 길이(length)만큼 반복**된다.

```php
foreach (배열 as 값을저장할변수) {
    // 실행하고자 하는 명령문
}
```

```php
$arr = array(2, 4, 6, 8);

foreach ($arr as $value) {
    echo "변수 \$value의 현재값은 {$value}입니다. <br />";
}
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/control/loops2.php)

<br />

다음 예제는 배열의 값뿐만 아니라 키값도 저장하여 활용하는 예제이다.

```php
$arr = array(
    "둘" => 2,
    "넷" => 4,
    "여섯" => 6,
    "여덟" => 8,
);

foreach ($arr as $key => $value) {
    echo "배열 \$arr 에서 키값 '{$key}'에 대한 값은 {$value}입니다. <br />";
}
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/control/loops3.php)