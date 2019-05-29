# Iterator（迭代器）接口[ ¶](http://php.net/manual/zh/class.iterator.php#class.iterator)

(No version information available, might only be in Git)

## 简介[ ¶](http://php.net/manual/zh/class.iterator.php#iterator.intro)

可在内部迭代自己的外部迭代器或类的接口。

## 接口摘要[ ¶](http://php.net/manual/zh/class.iterator.php#iterator.synopsis)



**Iterator** extends **Traversable** {

/* 方法 */

abstract public [current](http://php.net/manual/zh/iterator.current.php) ( void ) : [mixed](http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed)

abstract public [key](http://php.net/manual/zh/iterator.key.php) ( void ) : scalar

abstract public [next](http://php.net/manual/zh/iterator.next.php) ( void ) : void

abstract public [rewind](http://php.net/manual/zh/iterator.rewind.php) ( void ) : void

abstract public [valid](http://php.net/manual/zh/iterator.valid.php) ( void ) : bool

}

## 预定义迭代器[ ¶](http://php.net/manual/zh/class.iterator.php#iterator.iterators)

PHP 已经提供了一些用于日常任务的迭代器。 详细列表参见 [SPL 迭代器](http://php.net/manual/zh/spl.iterators.php)。

## 范例[ ¶](http://php.net/manual/zh/class.iterator.php#iterator.examples)

**Example #1 基本用法**

这个例子展示了使用 [foreach](http://php.net/manual/zh/control-structures.foreach.php) 时，迭代器方法的调用顺序。

```php
<?php
class myIterator implements Iterator {
    private $position = 0;
    private $array = array(
        "firstelement",
        "secondelement",
        "lastelement",
    );  

    public function __construct() {
        $this->position = 0;
    }

    function rewind() {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    function current() {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    function key() {
        var_dump(__METHOD__);
        return $this->position;
    }

    function next() {
        var_dump(__METHOD__);
        ++$this->position;
    }

    function valid() {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }
}

$it = new myIterator;

foreach($it as $key => $value) {
    var_dump($key, $value);
    echo "\n";
}
?>
```

以上例程的输出类似于：

```
string(18) "myIterator::rewind"
string(17) "myIterator::valid"
string(19) "myIterator::current"
string(15) "myIterator::key"
int(0)
string(12) "firstelement"

string(16) "myIterator::next"
string(17) "myIterator::valid"
string(19) "myIterator::current"
string(15) "myIterator::key"
int(1)
string(13) "secondelement"

string(16) "myIterator::next"
string(17) "myIterator::valid"
string(19) "myIterator::current"
string(15) "myIterator::key"
int(2)
string(11) "lastelement"

string(16) "myIterator::next"
string(17) "myIterator::valid"
```

## Table of Contents[ ¶](http://php.net/manual/zh/class.iterator.php#class.iterator)

- [Iterator::current](http://php.net/manual/zh/iterator.current.php) — 返回当前元素
- [Iterator::key](http://php.net/manual/zh/iterator.key.php) — 返回当前元素的键
- [Iterator::next](http://php.net/manual/zh/iterator.next.php) — 向前移动到下一个元素
- [Iterator::rewind](http://php.net/manual/zh/iterator.rewind.php) — 返回到迭代器的第一个元素
- [Iterator::valid](http://php.net/manual/zh/iterator.valid.php) — 检查当前位置是否有效