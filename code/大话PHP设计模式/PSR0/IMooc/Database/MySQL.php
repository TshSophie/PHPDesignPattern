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

class MySQL implements IDatabase{

    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysql_connect($host,$user,$passwd,$dbname);
        mysql_select_db($dbname,$conn);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $res = mysql_query($sql,$this->conn);
        return $res;
    }

    function close()
    {
        mysql_close($this->conn);
    }
}
