# ArrayAccess（数组式访问）接口[ ¶](http://php.net/manual/zh/class.arrayaccess.php#class.arrayaccess)

(No version information available, might only be in Git)

## 简介[ ¶](http://php.net/manual/zh/class.arrayaccess.php#arrayaccess.intro)

提供像访问数组一样访问对象的能力的接口。

## 接口摘要[ ¶](http://php.net/manual/zh/class.arrayaccess.php#arrayaccess.synopsis)



**ArrayAccess** {

/* 方法 */

abstract public [offsetExists](http://php.net/manual/zh/arrayaccess.offsetexists.php) ( [mixed](http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed) `$offset` ) : boolean

abstract public [offsetGet](http://php.net/manual/zh/arrayaccess.offsetget.php) ( [mixed](http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed) `$offset` ) : [mixed](http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed)

abstract public [offsetSet](http://php.net/manual/zh/arrayaccess.offsetset.php) ( [mixed](http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed) `$offset` , [mixed](http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed) `$value` ) : void

abstract public [offsetUnset](http://php.net/manual/zh/arrayaccess.offsetunset.php) ( [mixed](http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed) `$offset` ) : void

}

**Example #1 Basic usage**

```
<?phpclass obj implements arrayaccess {    private $container = array();    public function __construct() {        $this->container = array(            "one"   => 1,            "two"   => 2,            "three" => 3,        );    }    public function offsetSet($offset, $value) {        if (is_null($offset)) {            $this->container[] = $value;        } else {            $this->container[$offset] = $value;        }    }    public function offsetExists($offset) {        return isset($this->container[$offset]);    }    public function offsetUnset($offset) {        unset($this->container[$offset]);    }    public function offsetGet($offset) {        return isset($this->container[$offset]) ? $this->container[$offset] : null;    }}$obj = new obj;var_dump(isset($obj["two"]));var_dump($obj["two"]);unset($obj["two"]);var_dump(isset($obj["two"]));$obj["two"] = "A value";var_dump($obj["two"]);$obj[] = 'Append 1';$obj[] = 'Append 2';$obj[] = 'Append 3';print_r($obj);?>
```

以上例程的输出类似于：

```
bool(true)
int(2)
bool(false)
string(7) "A value"
obj Object
(
    [container:obj:private] => Array
        (
            [one] => 1
            [three] => 3
            [two] => A value
            [0] => Append 1
            [1] => Append 2
            [2] => Append 3
        )

)
```

## Table of Contents[ ¶](http://php.net/manual/zh/class.arrayaccess.php#class.arrayaccess)

- [ArrayAccess::offsetExists](http://php.net/manual/zh/arrayaccess.offsetexists.php) — 检查一个偏移位置是否存在
- [ArrayAccess::offsetGet](http://php.net/manual/zh/arrayaccess.offsetget.php) — 获取一个偏移位置的值
- [ArrayAccess::offsetSet](http://php.net/manual/zh/arrayaccess.offsetset.php) — 设置一个偏移位置的值
- [ArrayAccess::offsetUnset](http://php.net/manual/zh/arrayaccess.offsetunset.php) — 复位一个偏移位置的值