## 변수

> 변수(variable)란 데이터(data)를 저장하기 위해 프로그램에 의해 이름을 할당받은 메모리 공간이다.

<br />

### 변수의 선언

PHP 에서는 `$` 기호를 사용하여 변수를 선언한다.

```php
$변수이름 = 초깃값;

# 변수를 선언할 때 타입을 명시하지 않는다.
# 변수의 타입은 해당 변수에 대입하는 값에 따라 자동으로 결정되기 때문이다.
```

<br />

### 변수 이름의 생성 규칙

변수의 이름은 그 변수가 가지는 데이터의 의미를 잘 나타내도록 작성하는 것이 좋다.  
PHP 에서는 이러한 변수의 이름을 작성할 때 반드시 지켜야 할 규칙이 있다.

```
1. 변수의 이름은 영문 대소문자, 숫자, 언더스코어(_)로만 구성한다.
2. 변수의 이름은 숫자와의 구분을 빠르게 하기 위해 숫자로는 시작할 수 없다.
3. 변수의 이름에 공백이 포함될 수 없다.
4. 변수의 이름으로 PHP에서 미리 정의한 $this는 사용할 수 없다.
5. 변수의 이름은 대소문자를 구분한다.
```

<br />

### 문자열 내에서 변수 사용

작성한 변수의 이름을 문자열 내에서 사용하면 보통은 해당 변수에 저장된 값으로 변환된다.  
하지만 변수의 이름 **바로 뒤에** 다른 문자가 오게 되면, 변수의 이름을 정확하게 인식하지 못하는 문제가 발생한다.  
그래서 문자열 내에 변수의 이름을 사용할 때는 `{}`로 변수의 이름을 감싸서, 어디까지가 변수의 이름인지 명확히 해줘야 한다.

```php
$var = 10;

echo "$var";    // 10
echo "{$var}";  // 10

echo "변수 \$var에 저장된 값은 $var입니다.";    // 변수 $var에 저장된 값은 .
echo "변수 \$var에 저장된 값은 {$var}입니다.";  // 변수 $var에 저장된 값은 10입니다.
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/basics/variable__in__string.php)

<br />

### 변수의 초기화 

PHP 에서는 반드시 변수의 선언과 동시에 그 값을 초기화할 필요가 없다.  
초기화되지 않은 변수는 해당 변수가 참조되거나 사용되는 위치에 따라 다음과 같은 기본값으로 자동 초기화된다.

|타입|기본값|
|:---:|:---:|
|불리언(boolean)|FALSE|
|정수(integer)|0|
|실수(float)|0.0|
|문자열(string)|""|

<br />

```php
// 선언되지 않은 변수의 기본 값
var_dump($var);

// 초기화되지 않은 불리언(boolean) 타입 변수의 기본 값
echo $bool ? "true" : "false";

// 초기화되지 않은 정수(integer) 타입 변수의 기본 값
$int += 10;
var_dump($int);

// 초기화되지 않은 실수(float) 타입 변수의 기본 값
$flt += 3.14;
var_dump($flt);

// 초기화되지 않은 문자열(string) 타입 변수의 기본 값
$str .= "프로그래밍";
var_dump($str);
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/basics/variable__initialization.php)

<br />

### 변수의 종류

PHP 에서 변수는 스크립트 내 어느 곳에서나 선언할 수 있다.  

변수는 유효 범위가 존재하는데 이를 `variable scope`라 한다.  
이는 변수가 선언되어 사용될 수 있는 범위를 의미하며 변수의 유효 범위에 따라 변수를 다음과 같이 구분할 수 있다. 

```
1. 지역 변수(local variable)
2. 전역 변수(global variable)
3. 정적 변수(static variable)
```

<br />

### 지역 변수

함수 내에서 선언된 변수는 오직 함수 내부에서만 접근할 수 있다.  
또한, 함수 내부에서 선언된 변수는 함수의 호출이 종료되면 메모리에서 제거된다.

이렇게 함수 내부에서 선언된 변수를 지역 변수(local variable)라고 한다. 

```php
function varFunc() {
    $var = 10;
    echo "함수 내부에서 호출한 지역 변수 \$var의 값은 {$var}입니다. <br/>";
}

varFunc();

echo "함수 밖에서 호출한 지역 변수 \$var의 값은 {$var}입니다.";
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/basics/variable__local.php)

함수 밖에서 함수 내부의 지역 변수 `var`를 참조하려고 한다.  
하지만 함수의 호출이 종료되었으므로, 함수 내부에서 선언된 모든 지역 변수들은 네모리에서 이미 제거되었다.  
따라서 함수 밖에서 지역 변수를 참조하려고 하면 아무런 값도 얻을 수 없다.

<br />

### 전역 변수

함수 밖에서 선언된 변수는 함수 밖에서만 **바로 접근**할 수 있다.  
함수 밖에서 선언된 변수를 함수 내부에서 접근하고자 할 때는 `global` 이라는 키워드를 함께 사용해야 한다. 

이렇게 함수 밖에서 선언된 변수를 전역 변수(global variable)라고 한다. 

<br />

> `global`

```php
$var = 10;

function varFunc() {
    echo "함수 내부에서 호출한 전역 변수 \$var의 값은 {$var}입니다. <br />";

    global $var; # 함수 내에서 사용할 전역 변수를 명시함
    echo "함수 내부에서 호출한 전역 변수 \$var의 값은 {$var}입니다. <br />";
}

varFunc();

echo "함수 밖에서 호출한 전역 변수 \$var의 값은 {$var}입니다.";
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/basics/variable__global1.php)

위의 예제에서 맨 처음 호출한 `echo` 함수는 아무런 값도 출력하지 못한다.  
하지만 사용할 전역변수를 `global` 키워드로 명시하고 나서 다시 호출한 `echo` 함수는 정확한 전역 변수의 값을 출력한다.

<br />

> `$GLOBALS['$var']`

```php
$var = 10;

function varFunc() {
    echo "함수 내부에서 호출한 전역 변수 \$var의 값은 {$var}입니다. <br />";
    echo "함수 내부에서 호출한 전역 변수 \$var의 값은 {$GLOBALS['var']}입니다. <br />";
}

varFunc();

echo "함수 밖에서 호출한 전역 변수 \$var의 값은 {$var}입니다.";
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/basics/variable__global2.php)

PHP 에서 모든 전역 변수는 `$GLOBALS` 배열에 저장된다.  
이 배열에 인덱스로 변수의 이름을 사용하면, 해당 전역 변수의 값에 접근할 수 있다.  
이 배열은 함수 내부에서도 접근할 수 있으며, 이 배열을 통해 전역 변수의 값을 **바로** 변경할 수도 있다.

<br />

### 정적 변수(static variable)

정적 변수(static variable)란 함수 내부에서 `static` 키워드로 선언한 변수를 의미한다.

함수 내부에서 선언된 정적 변수는 함수의 호출이 종료되더라도 메모리상에서 지워지지 않는다.  
하지만 지역 변수처럼 해당 **함수 내부에서만 접근**할 수 있다.

```php
function counter() {
    static $count = 0;
    echo "함수 내부에서 호출한 static 변수 \$count의 값은 {$count}입니다. <br />";
    $count++;
}

counter();
counter();
counter();
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/basics/variable__static.php)

위의 예제에서 정적 변수인 `$count`는 함수의 호출이 종료된 후에도 계속해서 그 값을 유지하고 있다. 