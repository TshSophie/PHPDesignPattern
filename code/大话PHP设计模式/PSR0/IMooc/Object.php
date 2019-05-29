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
// * Time: 11:30
//

namespace IMooc;

class Object{

    protected $array = array();

    function __set($name, $value)
    {
        var_dump(__METHOD__);
        $this->array[$name]=$value;
    }

    function __get($name)
    {
        var_dump(__METHOD__);
        return $this->array[$name];
    }

    function __call($name, $arguments)
    {
       var_dump($name,$arguments);
       return "magic function \n";
    }

    // 注意该方法也要声明为静态方法

    static function __callStatic($name, $arguments)
    {
        var_dump($name,$arguments);
        return "magic function \n";
    }

    function __toString()
    {
       return  __CLASS__;
    }

    function __invoke($param)
    {
      var_dump($param);
      return "";
    }

}
