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
// * Time: 13:34
//

namespace IMooc;


class Register
{
    protected static $objects;

    // 将一个对象注册到一个全局树上
    static function set($alias,$object)
    {
        self::$objects[$alias] = $object;
    }


    static function get($name)
    {
        return self::$objects[$name];
    }


    function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}