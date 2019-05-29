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


$config = array(
    'user' => array(
        'observer' => array(
            'App\Observer\UserAdd1',
            //'App\Observer\UserAdd2',
            'App\Observer\UserAdd3',
            'App\Observer\UserAdd4',
        ),
    ),
);
return $config;