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
// * Time: 11:04
//

$config = array(
    'home'=>array(
        'decorator'=>array(
            'App\Decorator\Login',
            'App\Decorator\Template',
            'App\Decorator\Json',
        ),
    ),
    'default'=>'hello world',
);

return $config;