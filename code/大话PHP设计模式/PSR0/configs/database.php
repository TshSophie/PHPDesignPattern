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
// * Date: 2019/2/17
// * Time: 11:04
//

$config = array(
  'master'=>array(
      'type'=>'MySQL',
      'host'=>'127.0.0.1',
      'user'=>'root',
      'password'=>'123456',
      'dbname'=>'test',
  ),
  'slave'=>array(
      'slave1'=>array(
          'type'=>'MySQL',
          'host'=>'127.0.0.1',
          'user'=>'root',
          'password'=>'123456',
          'dbname'=>'test',
      ),
  )
);

return $config;