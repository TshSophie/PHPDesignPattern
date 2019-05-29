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
// * Time: 10:53
//
//
//use Test3\Test3;
//
//Test3::test();
//
//Test4::test();
//

// 自动载入
spl_autoload_register('autoload1');
spl_autoload_register('autoload2');

Test4::test();

Test3::test();


function autoload1($class)
{
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
}


function autoload2($class)
{
    require __DIR__.'/'.str_replace('\\','/',$class).'.php';
}