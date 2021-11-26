## 상수

> 상수(constant)란 변수와 마찬가지로 데이터를 저장할 수 있는 메모리 공간을 의미한다.  
> 변수와 달리 상수는 한 번 선언되면, 스크립트가 실행되는 동안 그 데이터를 변경하거나 해제(undefined)할 수 없다. 

<br />

### `define()` 함수

PHP 에서는 `define()` 함수를 사용하여 상수를 선언할 수 있다.

이 함수는 첫 번째 인수로 상수의 이름을 전달 받고, 두 번째 인수로 값을 전달 받는다.  
세 번째 인수는 상수의 이름이 대소문자를 구분하는가를 설정하며, 기본 값은 `false`로 대소문자를 구분한다.

```php
# define(상수이름, 상수값, 대소문자구분여부)

define("PHP", "PHP 수업에 잘 오셨습니다! <br />"); 
echo PHP;
echo php;

define("PHP", "<br />PHP 수업에 잘 오셨습니다!", true);
echo php;
echo Php;
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/basics/constant__define1.php)

이렇게 선언된 상수는 스크립트 어디에서라도 참조할 수 있다.  
단, 해당 상수가 선언되기 이전의 스크립트 영역에서는 해당 상수를 참조할 수 없다. 

```php
function defFunc() {
    echo PHP;
    define("PHP", "<br />PHP 수업에 잘 오셨습니다!");
    echo PHP;
}

defFunc();
echo PHP;
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/basics/constant__define2.php)

위의 예제에서 상수가 선언되기 전의 영역에서 호출한 `echo()` 함수는 해당 상수의 값을 참조하지 못한다.  
또한, 함수 내부에서 선언된 상수가 함수의 호출이 종료된 후에도 사용할 수 있음을 보여준다.

<br />

### 마법 상수(magic constants)

PHP 에서는 어떤 스크립트에서도 사용할 수 있는 미리 정의된 다양한 상수를 제공한다. 

다음 예제는 PHP 에서 미리 정의된 모든 상수를 출력해주는 예제이다. 

```php
echo "<pre>";
print_r(get_defined_constants(true));
echo "</pre>";
```

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/basics/constant__print-magic-constants1.php)

<br />

위와 같이 미리 정의된 상수 이외에도 어디에 사용하느냐에 따라 용도가 변경되는 8개의 마법 상수를 제공한다.  
이러한 마법 상수(magic constants)는 대소문자를 구분하지 않는다.

|상수 이름|<center>설명</center>|
|:---:|:---|
|`__LINE__`|파일의 현재 줄 번호를 반환한다.|
|`__FILE__`|파일의 전체 경로와 이름을 반환한다. <br />include 내부에서 사용할 경우 include된 파일명을 반환한다.|
|`__DIR__`|파일의 디렉토리를 반환한다. <br />포함한 파일 안에서 사용할 경우 포함된 파일의 디렉토리를 반환한다.|
|`__FUNCTION__`|함수의 이름을 반환한다.|
|`__CLASS__`|클래스의 이름을 반환한다. 클래스 이름은 대소문자를 구분한다.|
|`__METHOD__`|클래스의 메소드 이름을 반환한다.|
|`__NAMESPACE__`|현재 네임스페이스의 이름을 반환한다.|

[예제 보기](http://php.flyingcat.pe.kr/tcpschool/basics/constant__print-magic-constants2.php)