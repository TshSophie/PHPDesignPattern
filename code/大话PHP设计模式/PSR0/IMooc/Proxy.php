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
// * Date: 2019/2/16
// * Time: 12:52
//

namespace IMooc;


class Proxy implements IUserProxy
{
    function getUserName($id)
    {
        $db = Factory::getDatabase('test');
        $db->query("select name from  user where id = 1 limit 1");
    }

    function setUserName($id, $name)
    {
        $db = Factory::getDatabase('master');
        $db->query("update user name = 'lili' where id = 1 limit 1");
    }

}