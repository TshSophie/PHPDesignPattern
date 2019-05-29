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
// * Date: 2019/2/21
// * Time: 12:08
//
namespace App\Decorator;

class Json
{
    function beforeRequest($controller)
    {

    }

    function afterRequest($return_value)
    {
        if ($_GET['app'] == 'json')
        {
            echo json_encode($return_value);
        }
    }
}