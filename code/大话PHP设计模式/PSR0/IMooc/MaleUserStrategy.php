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
// * Time: 11:37
//

namespace IMooc;


class MaleUserStrategy implements UserStrategy
{
     function showAd()
     {
        echo "IPhone";
     }

     function showCategory()
     {
         echo "奥迪";
     }
}