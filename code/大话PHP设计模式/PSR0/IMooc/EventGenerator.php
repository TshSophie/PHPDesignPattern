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
// * Date: 2019/2/15
// * Time: 12:36
//

namespace IMooc;


abstract class EventGenerator
{
    private $observers = array();

    function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }


    // 逐个通知所有观察者
    function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update();
        }
    }
}