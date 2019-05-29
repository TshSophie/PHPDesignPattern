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
// * Date: 2019/2/14
// * Time: 10:53
//

namespace IMooc\Database;

use IMooc\IDatabase;

class PDO implements IDatabase{


    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        $this->conn = new \PDO("mysql:host=$host;dbname=$dbname",$user,$passwd);
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }

    function close()
    {
        unset($this->conn);
    }
}