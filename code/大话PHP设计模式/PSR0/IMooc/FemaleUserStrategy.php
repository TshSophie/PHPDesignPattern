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
// * Time: 11:35
//

namespace IMooc;


class FemaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        echo "新款女装";
    }

    function showCategory()
    {
        echo "女装";
    }

}