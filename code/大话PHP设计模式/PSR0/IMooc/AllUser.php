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
// * Time: 11:43
//

namespace IMooc;


class AllUser implements \Iterator
{
    protected $ids;
    protected $data = array();
    protected $index;

    function __construct()
    {
        $db = Factory::getDatabase();

        $result = $db->query("select `id` from user");

        $this->ids = $result->fetch_all(MYSQLI_ASSOC);
    }

    function current()
    {
        $id = $this->ids[$this->index]['id'];
        return Factory::getUser($id);
    }

    function next()
    {
        $this->index ++;
    }

    // 查询迭代器是否有数据
    function valid()
    {
        return $this->index < count($this->ids);
    }

    // 将迭代器移动到开头
    function rewind()
    {
        $this->index = 0;
    }


    function key()
    {
        return $this->index;
    }
}