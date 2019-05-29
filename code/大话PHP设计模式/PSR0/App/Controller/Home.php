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
// * Time: 12:05
//

use IMooc\Controller;
use IMooc\Factory;

class Home extends Controller
{

    function index()
    {
        $model = Factory::getModel('User');

        $userid = $model->create(array('name'=>'sophie','mobile'=>'13456345678'));

        return array('userid'=>$userid,'name'=>'sophie');
    }

    function index2()
    {
        echo "index2";
    }
}