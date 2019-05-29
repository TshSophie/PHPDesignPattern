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
// * Time: 11:33
//

namespace App\Controller\Home;



use IMooc\DataBase;

class Index{

    static function test()
    {
        echo __METHOD__;

    }

    static function test_spl()
    {

        // 栈结构
        $stack = new \SplStack();
        $stack->push("data1\n");
        $stack->push("data2\t");

        echo $stack->pop();
        echo $stack->pop();

        // 队列结构
        $queue = new \SplQueue();
        $queue->enqueue("data3\t");
        $queue->enqueue("data4\n");

        echo $queue->dequeue();
        echo $queue->dequeue();

        // 堆
        $heap = new \SplMinHeap();
        $heap->insert("data5\t");
        $heap->insert("data6\n");

        echo $heap->extract();
        echo $heap->extract();

        // 固定长度的数组
        $array = new \SplFixedArray(10);
        $array[0] = 123;
        $array[9] = 1234;
        var_dump($array);


    }

    static function link_option()
    {
        $db = DataBase::getInstance();
//        $db->where("id = 1");
//        $db->where("name=2");
//        $db->order("id desc");
//        $db->limit(10);

        $db->where("id = 1")
            ->where("name = 2")
            ->order("id desc")
            ->limit(10);
    }
}