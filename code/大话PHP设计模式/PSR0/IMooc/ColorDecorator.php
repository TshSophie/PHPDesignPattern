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
// * Time: 13:56
//

namespace IMooc;


class ColorDecorator implements DrawDecorator
{
    protected $color;

    function __construct($color = "red")
    {
        $this->color = $color;
    }

    function beforeDrew()
    {
        echo "<div style='color:{$this->color}'>";
    }

    function afterDrew()
    {
        echo "</div>";
    }

}