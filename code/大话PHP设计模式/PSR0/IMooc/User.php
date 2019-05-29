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
// * Time: 12:19
//

namespace IMooc;

class User
{
    public $id;
    public $name;
    public $mobile;
    public $regtime;

    protected $db;


    function __construct($id)
    {
        $this->db = new \IMooc\Database\MySQLi();
        $this->db->connect('localhost','root','123456','test');
        $res = $this->db->query("select * from user limit 1 ");
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->regtime = $data['regtime'];

    }

    function __destruct()
    {

        $this->db->query("update user set name = '{$this->name}',
                              mobile='{$this->mobile}',
                              regtime='{$this->regtime}' 
                              where id = '{$this->id}'");
//        $this->db->close();
    }


}




















