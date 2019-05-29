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
// * Time: 13:35
//
namespace App\Model;

use IMooc\Factory;

class User extends \IMooc\Model
{
    function getInfo($id)
    {
        return Factory::getDatabase('slave')->query("select * from user where id =$id limit 1")->fetch_assoc();
    }

    function create($user)
    {
        //insert to database
        $userid = 1;
        $this->notify($user);
        return $userid;
    }
}