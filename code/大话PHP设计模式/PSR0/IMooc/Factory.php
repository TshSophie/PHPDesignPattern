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
// * Time: 13:13
//

namespace IMooc;


use IMooc\Database\MySQLi;


class Factory
{
    static function createDatabase()
    {
        $db = DataBase::getInstance();

        Register::set('db1',$db);

        return $db;
    }

//    static function getDatabase($dbname = 'test')
//    {
//        $db = new MySQLi();
//
//        $db->connect('localhost', 'root', '123456', $dbname);
//
//        return $db;
//    }

    public static function getDatabase( $id = 'master' )
    {
        $key = 'database_'.$id;
        if( $id == 'slave' )
        {
            $slaves = Application::getInstance(__DIR__.'/..')->config['database']['slave'];
            $db_configs = [array_rand($slaves)];
        }
        else
        {
            $db_configs  = Application::getInstance(__DIR__.'/..')->config['database'][$id];
        }

        // 从全局注册树上获取数据库对象
        $db = Register::get($key);
        if(!$db)
        {
            $db = new MySQLi();
            $db->connect($db_configs['host'],$db_configs['user'],$db_configs['password'],$db_configs['dbname']);
            Register::set($key, $db);
        }

        return $db;
    }


    static function getUser($id)
    {
        $key = 'user_'.$id; // 全局树上对象的key
        $user = Register::get($key);
        if (!$user)
        {
            $user = new User($id);
            Register::set($key,$user);
        }

        return $user;
    }


}