<?php
namespace Fuck;

class XNull{
    private $Contr = "Controller";
    private static $instance;

    private function __construct()
    {
        $this->autoload();
    }

    public static function run(){
        if (!(self::$instance instanceof self)){
            self::$instance = new static();
        }
        return self::$instance;
    }

    private function autoload(){
        $PATH_INFO = $_SERVER['PATH_INFO'];
        $PATH_INFO = trim($PATH_INFO,"/"); //匹配index.php / 后的参数
        if (empty($PATH_INFO)){
            $Cont = "Home";
            $file = "Index";
            $method = "SQL_one";
        }
        @$arr = explode("/",$PATH_INFO);
        if (empty($arr[0])){
            $Cont = "Home";
        }else{
            $Cont = trim($arr[0],"/");
        }
        if (empty($arr[1])){
            $file = "Index";
        }else{
            $file = trim($arr[1],"/");
        }
        if (empty($arr[2])){
            $method = "SQL_one";
        }else{
            $method = trim($arr[2],"/");
        }
        $this->includePHP();
        include_once __D__."/{$this->Contr}/{$Cont}/{$file}.php";
        $obj = new $file();
        $obj->$method();
    }

    private function includePHP(){
        include_once __D__."/App/smart/Smarty.class.php";
        include_once __D__."/App/mysql.class.php";
        include_once __D__."/App/upload.class.php";
        include_once __D__."/Controller/Controller.php";
    }
}



?>