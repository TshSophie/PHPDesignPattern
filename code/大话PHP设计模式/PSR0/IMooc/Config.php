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
// * Date: 2019/2/17
// * Time: 10:53
//

namespace IMooc;


class Config implements \ArrayAccess
{
    protected $path;
    protected $config = array();

    function __construct($path)
    {
        $this->path = $path;
    }

    function offsetGet($offset)
    {
       if (empty($this->config[$offset]))
       {
           $file_path = $this->path.'/'.$offset.'.php';

           $config = require $file_path;

           $this->config[$offset] = $config;
       }

       return $this->config[$offset];
    }

    function offsetSet($offset, $value)
    {
        throw new \Exception("cannot write config file.");
    }

    function offsetExists($offset)
    {
        return isset($this->config[$offset]);
    }

    function offsetUnset($offset)
    {
        unset($this->config[$offset]);
    }


}