<?php
//
// *`______```__``__`````______``
// */\``==`\`/\`\_\`\```/\``==`\`
// *\`\``_-/`\`\``__`\``\`\``_-/`
// *`\`\_\````\`\_\`\_\``\`\_\```
// *``\/_/`````\/_/\/_/```\/_/```
// *`````````````````````````````
// * Created by PhpStorm.
// * User: Sophie
// * Date: 2019/2/13
// * Time: 12:17
//

namespace IMooc;

use IMooc\Database\MySQLi;

interface IDatabase
{
    function connect($host,$user,$passwd,$dbname);

    function query($sql);

    function close();
}


// 链式操作
class DataBase
{
    // 静态属性
    protected static $db;

    // 单例模式 需要把构造方法屏蔽掉，不让用户直接去创建对象
    private function __construct()
    {

    }

    // 静态方法
    static function getInstance()
    {
        if (self::$db)
        {
            return self::$db;
        }
        else
        {
            return self::$db = new self();
        }

    }



    function where($where)
    {
        return $this;
    }

    function order($order)
    {
        return $this;
    }

    function limit()
    {
        return $this;
    }
}