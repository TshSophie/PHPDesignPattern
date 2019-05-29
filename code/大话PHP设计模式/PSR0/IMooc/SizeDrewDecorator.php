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
// * Time: 14:02
//

namespace IMooc;


class SizeDrewDecorator implements DrawDecorator
{
    protected $size;

    function __construct($size = "20px")
    {
        $this->size = $size;
    }

    function beforeDrew()
    {
        echo "<div style='font-size:{$this->size}'>";
    }

    function afterDrew()
    {
        echo "</div>";
    }


}