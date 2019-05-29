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

class Template
{
    protected $controller;

    function beforeRequest($controller)
    {
        $this->controller = $controller;
    }

    function afterRequest($return_value)
    {
        if ($_GET['app'] == 'html')
        {
            foreach($return_value as $k => $v)
            {
                $this->controller->assign($k, $v);
            }
            $this->controller->display();
        }
    }

}