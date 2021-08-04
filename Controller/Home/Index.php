<?php

class Index extends Controller{
    public function SQL_one(){
        $this->smart->assign("expTitle","常规的SQL注入漏洞");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入id变量来进行测试漏洞");
        if(empty($_REQUEST['id'])){
            $sql = "select * from sql_user where Id = 1";
        }else{
            $sql = "select * from sql_user where Id = {$_REQUEST['id']}";
        }
        $mysql = new Null\mysql\mysql();
        $res = $mysql->link()->query($sql);
        $this->smart->assign("data",$res->fetch_assoc());
        $this->smart->assign("sql","$sql");
        $this->smart->display('index.html');
    }
    public function SQL_tow(){
        $this->smart->assign("expTitle","盲注型的SQL注入");
        $this->smart->assign("alt","这是一个盲注,可能会限制你想做的东西");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入Username 与 Password 变量来进行测试漏洞");
        if(empty($_REQUEST['Username'])){
            $sql = "select * from sql_user where Username = 'Pass' and Password = 'OPP!'";
        }else{
            $sql = "select * from sql_user where Username = '{$_REQUEST['Username']}' and Password = '{$_REQUEST['Password']}'";
        }
        $mysql = new Null\mysql\mysql();
        $res = $mysql->link()->query($sql);
        if (count($res->fetch_assoc()) < 1){
            $this->smart->assign("code","登录失败.....");
        }else{
            $this->smart->assign("code","login ok,success.....");
        }
        $this->smart->assign("sql","$sql");
        $this->smart->display('SQL2.html');
    }


    public function SQL_three(){
        $this->smart->assign("expTitle","盲注型的SQL注入");
        $this->smart->assign("alt","这是一个盲注,可能会限制你想做的东西");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入 id 变量来进行测试漏洞");
        if(empty($_REQUEST['id'])){
            $sql = "select * from sql_user where id = '1'";
        }else{
            $sql = "select * from sql_user where id = '{$_REQUEST['id']}'";
        }
        $mysql = new Null\mysql\mysql();
        $res = $mysql->link()->query($sql);
        $this->smart->assign("sql","$sql");
        $this->smart->display('SQL3.html');
    }

    public function SQL_four(){
        $this->smart->assign("expTitle","limit的SQL注入漏洞");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入limit变量来进行测试漏洞");
        if(empty($_REQUEST['limit'])){
            $sql = "select * from sql_user where Id = 1 limit 0,1";
        }else{
            $sql = "select * from sql_user where Id = '1' limit {$_REQUEST['limit']}";
        }
        $mysql = new Null\mysql\mysql();
        $res = $mysql->link()->query($sql);
        $array = $res->fetch_assoc();
        if($res){
            $this->smart->assign("data",$array);
        }else{
            var_dump($mysql->link()->error);
            exit;
        }
        $this->smart->assign("sql","$sql");
        $this->smart->display('index.html');
    }

    public function SQL_five(){
        $this->smart->assign("expTitle","order的SQL注入漏洞");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入order变量来进行测试漏洞");
        if(empty($_REQUEST['order'])){
            $sql = "select * from sql_user where Id = 1 order by id";
        }else{
            $sql = "select * from sql_user where Id = '1' order by {$_REQUEST['order']}";
        }
        $mysql = new Null\mysql\mysql();
        $res = $mysql->link()->query($sql);
        $this->smart->assign("data",$res->fetch_assoc());
        $this->smart->assign("sql","$sql");
        $this->smart->display('index.html');
    }

    public function SQL_six(){
        $this->smart->assign("expTitle","使用union 进行shell 的SQL注入漏洞");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入id变量来进行测试漏洞");
        if(empty($_REQUEST['id'])){
            $sql = "select * from sql_user where Id = 1";
        }else{
            if (preg_match("/file|union/",$_REQUEST['id'])){
                $sql = "select * from sql_user where Id = {$_REQUEST['id']}";
            }
        }
        $mysql = new Null\mysql\mysql();
        $res = $mysql->link()->query($sql);
        $this->smart->assign("data",$res->fetch_assoc());
        $this->smart->assign("sql","$sql");
        $this->smart->display('index.html');
    }

    public function SQL_seven(){
        $this->smart->assign("expTitle","使用order进行shell的SQL注入漏洞");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入order变量来进行测试漏洞");
        if(empty($_REQUEST['order'])){
            $sql = "select * from sql_user where Id = 1 order by id";
        }else{
            if(preg_match("/file/",$_REQUEST['order'])){
                $sql = "select * from sql_user where Id = '1' order by {$_REQUEST['order']}";
            }
        }
        $mysql = new Null\mysql\mysql();
        $res = $mysql->link()->query($sql);
        $this->smart->assign("data",$res->fetch_assoc());
        $this->smart->assign("sql","$sql");
        $this->smart->display('index.html');
    }

    public function SQL_eit(){
        $this->smart->assign("expTitle","使用limit进行shell的SQL注入漏洞");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入limit变量来进行测试漏洞");
        if(empty($_REQUEST['limit'])){
            $sql = "select * from sql_user where Id = 1 limit 0,1";
        }else{
            if(preg_match("/file/",$_REQUEST['limit'])){
                $sql = "select * from sql_user where Id = '1' limit {$_REQUEST['limit']}";
            }
        }
        $mysql = new Null\mysql\mysql();
        $res = $mysql->link()->query($sql);
        $this->smart->assign("data",$res->fetch_assoc());
        $this->smart->assign("sql","$sql");
        $this->smart->display('index.html');
    }

    public function SQL_nine(){
        $this->smart->assign("expTitle","使用union进行读取文件的SQL注入漏洞");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入id变量来进行测试漏洞");
        if(empty($_REQUEST['id'])){
            $sql = "select * from sql_user where Id = 1";
        }else{
            if(preg_match("/load_file/",$_REQUEST['id'])){
                $sql = "select * from sql_user where Id = '{$_REQUEST['id']}'";
            }
        }
        $mysql = new Null\mysql\mysql();
        $res = $mysql->link()->query($sql);
        $this->smart->assign("data",$res->fetch_assoc());
        $this->smart->assign("sql","$sql");
        $this->smart->display('index.html');
    }
}