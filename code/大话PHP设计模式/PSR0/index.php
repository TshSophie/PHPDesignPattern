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
// * Time: 11:29
//

// 定义项目根目录常量
define('BASEDIR',__DIR__);

// 引入自动载入函数
include BASEDIR.'/IMooc/Loader.php';

// 使用自动类载入函数注册自动载入函数
spl_autoload_register('\\IMooc\\Loader::autoload');

// 1、SPL
// \App\Controller\Home\Index::test_spl();

// 2、链式操作
\App\Controller\Home\Index::link_option();

// 3、魔术方法

//$obj = new IMooc\Object();

// 为不存在的对象属性赋值 自动调用__set()
//$obj->title = 'hello';

//输出不存在的对象属性 自动调用__get()
//echo $obj->title;

// 调用不存在的方法 自动调用__callt()
//echo $obj->test("test",123);

// 调用不存在的静态方法 自动调用__callStatic()
//IMooc\Object::test("hello",12345);

// 输出对象  自动调用__toString()
//echo $obj;

// 把对象当函数执行  自动调用__invoke()
//echo $obj("test1");

// 工厂模式
// 使用工厂模式的一个好处，当类名发生变更时不需要去一个一个去找使用了该类的地方
// 只需要在工厂类中修改类名即可

//$db = new IMooc\DataBase();
//$db = IMooc\Factory::createDatabase();


// 单例模式 无论调用多少次都只会创建一个对象连接一次数据库
//$db = IMooc\DataBase::getInstance();
//$db = IMooc\DataBase::getInstance();
//$db = IMooc\DataBase::getInstance();
//$db = IMooc\DataBase::getInstance();
//$db = IMooc\DataBase::getInstance();
//
//var_dump($db);

// 注册树模式 注意一般注册对象会放在项目初始化的位置
//$db = IMooc\Factory::createDatabase();
//
//$db1 = \IMooc\Register::get('db1');
//
//var_dump($db1);


// 适配器模式
//$db = new IMooc\Database\MySQLi();
//$db->connect('localhost','root','123456','test');
//$res = $db->query("show tables");
//$db->close();
//var_dump($res);


// 策略模式
//class Page{
//
//    /**
//     * @var
//     */
//    protected $strategy;
//    function index()
//    {
//        echo "AD\n";
//        $this->strategy->showAd();
//        echo "category:";
//        $this->strategy->showCategory();
//        echo "<br/>";
//
//    }
//
//    function setStrategy(\IMooc\UserStrategy $strategy)
//    {
//        $this->strategy = $strategy;
//    }
//}
//
//
//$page = new Page();
//if (isset($_GET['female']))
//{
//    $strategy = new \IMooc\FemaleUserStrategy();
//}
//else
//{
//    $strategy = new IMooc\MaleUserStrategy();
//}
//
//$page->setStrategy($strategy);
//
//$page->index();


// 数据对象映射模式

class Page
{
    function index()
    {
        $user = IMooc\Factory::getUser(1);
        $user->name = 'sophie';
        $this->test();
        echo "ok";
    }

    function test()
    {
        $user = IMooc\Factory::getUser(1);
        $user->mobile = '13567890989';
    }
}

//
//$page = new Page();
//$page->index();


// 观察者模式
class Event extends \IMooc\EventGenerator
{
    function trigger()
    {
        echo "Event<br/>";

        $this->notify();
    }

}

class Observer1 implements \IMooc\Observer
{
    function update($event_info = null)
    {
        echo "逻辑1<br/>";
    }
}


class Observer2 implements \IMooc\Observer
{
    function update($event_info = null)
    {
        echo "逻辑2<br/>";
    }
}

//$event = new Event();
//
//// 增加观察者
//$event->addObserver(new Observer1());
//$event->addObserver(new Observer2());
//
//$event->trigger();


// 原型模式
// 构建一个原型对象
//$prototype = new \IMooc\Canvas();
//$prototype->init();

//----------------------------------
// 克隆对象
//$canvas1 = clone $prototype;
//$canvas1->rect(3,6,4,12);
//$canvas1->draw();
//
//echo "=====================<br/>\n";
//
//$canvas2 = clone $prototype;
//$canvas2->rect(3,6,5,18);
//
//$canvas2->draw();


// 装饰器模式

// 传统方式--直接继承父类
//class Canvas2 extends \IMooc\Canvas{
//
//    function draw()
//    {
//        echo "<div style='color:red'>";
//        parent::draw();
//        echo "</div>";
//    }
//}
//
//
//$canvas1 = new \IMooc\Canvas();
//$canvas1->init();
//
//// 添加颜色装饰器
//$canvas1->addDecorator(new \IMooc\ColorDecorator('orange'));
//
//$canvas1->addDecorator(new \IMooc\SizeDrewDecorator('25px'));
//$canvas1->rect(3,6,4,12);
//
//$canvas1->draw();


// 迭代器模式
//$users = new \IMooc\AllUser();
//foreach ($users as $user)
//{
//    var_dump($user);
////    $user->mobile = rand(10000,90000);
//}


// 代理模式
// 使用代理模式进行主从数据库复制
//$proxy = new \IMooc\Proxy();
//$proxy->getUserName($id);
//$proxy->setUserName($id,$proxy);

//
//$config = new \IMooc\Config(__DIR__.'./configs');
//var_dump($config['controller']);


$db = IMooc\Factory::getDatabase();

$ret = $db->query('select * from user');

var_dump($ret);

























