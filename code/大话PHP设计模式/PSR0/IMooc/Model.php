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
// * Time: 13:36
//

namespace IMooc;


class Model
{
    protected $observers = array();

    function __construct()
    {
        $name = strtolower(str_replace('App\Model\\', '', get_class($this)));
        if (!empty(Application::getInstance()->config['model'][$name]['observer']))
        {
            $observers = Application::getInstance()->config['model'][$name]['observer'];
            foreach($observers as $class)
            {
                $this->observers[] = new $class;
            }
        }

    }

    function notify($event)
    {
        foreach($this->observers as $observer)
        {
            $observer->update($event);
        }
    }

}