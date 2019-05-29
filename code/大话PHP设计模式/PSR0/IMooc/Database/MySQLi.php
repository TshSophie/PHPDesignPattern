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

class MySQLi implements IDatabase{

    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysqli_connect($host,$user,$passwd,$dbname);
        $this->conn = $conn;

    }

    function query($sql)
    {
        $res = mysqli_query($this->conn,$sql);

        return $res;
    }

    function close()
    {
        mysqli_close($this->conn);
    }
}