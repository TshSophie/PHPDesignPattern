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
namespace App\Decorator;

class Login
{
    function beforeRequest($controller)
    {
        session_start();
        if (empty($_SESSION['isLogin']))
        {
            header('Location: /login/index/');
            exit;
        }
    }

    function afterRequest($return_value)
    {

    }
}