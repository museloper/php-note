## 조건문 

> 조건문이란 프로그램 내에서 주어진 조건식의 결과에 따라 별도의 명령을 수행하도록 제어하는 명령문이다.

<br />

### `if`

if 문은 조건식의 결과가 참(true)이면 주어진 명령문을 실행하며, 거짓(false)이면 아무것도 실행하지 않는다. 

```php
if (조건식) {
    // 조건식의 결과가 참일 때 실행하고자 하는 명령문
}
```

```php
$num01 = 10;
$num02 = 20;

if ($num01 == $num02) {
    echo "{$num01}과 {$num02}은 같은 수입니다.";
}

if ($num01 < $num02) {
    echo "{$num01}은 {$num02}보다 작은 수입니다.";
}

if ($num01 > $num02) {
    echo "{$num01}은 {$num02}보다 큰 수입니다.";
}
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/control/conditionals1.php)

<br />

### `else`

if 문과 같이 사용할 수 있는 else 문은 if 문의 조건식 결과가 거짓(false)일 때 주어진 명령문을 실행한다.

```php
if (조건식) {
    // 조건식의 결과가 참일 때 실행하고자 하는 명령문
} else {
    // 조건식의 결과가 거짓일 때 실행하고자 하는 명령문
}
```

```php
$num01 = 20;
$num02 = 20;

if ($num01 == $num02) {
    echo "{$num01}과 {$num02}은 같은 수입니다.";
} else {
    if ($num01 < $num02)
        echo "{$num01}은 {$num02}보다 작은 수입니다.";
    else 
        echo "{$num01}은 {$num02}보다 큰 수입니다.";
}
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/control/conditionals2.php)

<br />

### `elseif`

elseif 문은 if 문처럼 조건식을 설정할 수 있으므로, 중첩된 if 문을 좀 더 간결하게 표현할 수 있다.  
elseif 문은 else 문과 달리 여러 번 사용할 수 있어서 다양한 조건을 설정할 수 있다.

```php
if (조건식1) {
    // 조건식1의 결과가 참일 때 실행하고자 하는 명령문
} elseif (조건식2) {
    // 조건식2의 결과가 참일 때 실행하고자 하는 명령문
} else {
    // 조건식1의 결과도 거짓이고, 조건식2의 결과도 거짓일 때 실행하고자 하는 명령문
}
```

```php
$num01 = 30;
$num02 = 20;

if ($num01 == $num02) 
    echo "{$num01}과 {$num02}은 같은 수입니다.";
elseif ($num01 < $num02) 
    echo "{$num01}은 {$num02}보다 작은 수입니다.";
else
    echo "{$num01}은 {$num02}보다 큰 수입니다.";
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/control/conditionals3.php)

