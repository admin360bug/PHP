<?php

class Xss extends Controller{
    public function xss_one(){
        $this->smart->assign("expTitle","反射型XSS");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入xss变量来进行测试漏洞");
        if(empty($_REQUEST['xss'])){
            $this->smart->assign("data","这里是你的输入!");
        }else{
            $this->smart->assign("data",$_REQUEST['xss']);
        }
        $this->smart->display('xss.html');
    }


    public function xss_tow(){
        $this->smart->assign("expTitle","反射型XSS");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入xss变量来进行测试漏洞");
        if(empty($_REQUEST['xss'])){
            $this->smart->assign("data","这里是你的输入!");
        }else{
            $str = "<script>alert('{$_REQUEST['xss']}');</script>";
            $this->smart->assign("data","$str");
        }
        $this->smart->display('xss.html');
    }

    public function xss_tow_2(){
        $this->smart->assign("expTitle","反射型XSS");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入xss变量来进行测试漏洞");
        if(empty($_REQUEST['xss'])){
            $this->smart->assign("data","无知的少年，你猜我过滤了什么?");
        }else{
            $r = str_replace("<","",$_REQUEST['xss']);
            $r = str_replace(">","",$r);
            $r = str_replace("/","",$r);
            $str = "<script>alert('{$r}');</script>";
            $this->smart->assign("data","$str");
        }
        $this->smart->display('xss.html');
    }

    public function xss_three(){
        $this->smart->assign("expTitle","反射型XSS");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入xss变量来进行测试漏洞");
        if(empty($_REQUEST['xss'])){
            $this->smart->assign("data","这里是你的输入!");
        }else{
            $str = "<img src=\"{$_REQUEST['xss']}\">";
            $this->smart->assign("data","$str");
        }
        $this->smart->display('xss.html');
    }


    public function xss_four(){
        $this->smart->assign("expTitle","反射型XSS");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入xss变量来进行测试漏洞");
        if(empty($_REQUEST['xss'])){
            $this->smart->assign("data","这里是你的输入!");
        }else{
            $str = "这个是一篇文档<script>  console.log('使用换行符吧');  //{$_REQUEST['xss']} </script>";
            $this->smart->assign("data","$str");
        }
        $this->smart->display('xss.html');
    }


    public function xss_five(){
        $this->smart->assign("expTitle","反射型XSS");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入xss变量来进行测试漏洞");
        if(empty($_REQUEST['xss'])){
            $this->smart->assign("data","无知的少年，你猜我过滤了什么?");
        }else{
            $r = str_replace("<","",$_REQUEST['xss']);
            $r = str_replace("java","jv",$r);
            $r = str_replace("script","sipt",$r);
            $r = str_replace(">","",$r);
            $r = str_replace("/","",$r);
            $r = str_replace("'","",$r);
            $r = str_replace("\"","",$r);
            $r = str_replace("java","jav",$r);
            $r = str_replace("script","sipt",$r);
            $str = "<a href=\"{$r}\">click</a>";
            $this->smart->assign("data","$str");
        }
        $this->smart->display('xss.html');
    }


    public function xss_six(){
        $this->smart->assign("expTitle","反射型XSS");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入xss变量来进行测试漏洞");
        if(empty($_REQUEST['xss'])){
            $this->smart->assign("data","这里是你的输入 x!");
        }else{
            if (preg_match("/(\w)=('|\"|\w)/",$_REQUEST['xss'])){
                $str = "试图危险操作.";
                $this->smart->assign("data","$str");
            }else{
                $str = "<img src=\"{$_REQUEST['xss']}\">";
                $this->smart->assign("data","$str");
            }
        }
        $this->smart->display('xss.html');
    }



    public function xss_seven(){
        $this->smart->assign("expTitle","反射型XSS");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入xss变量来进行测试漏洞");
        if(empty($_REQUEST['xss'])){
            $this->smart->assign("data","这里是你的输入 x!");
        }else{
            if (preg_match("/onerror=.*('|\"|>|/|<|`).*/",$_REQUEST['xss'])){
                $str = "试图危险操作.";
                $this->smart->assign("data","$str");
            }else{
                $str = "<img src=\"{$_REQUEST['xss']}\">";
                $this->smart->assign("data","$str");
            }
        }
        $this->smart->display('xss.html');
    }


    public function xss_eit(){
        $this->smart->assign("expTitle","反射型XSS");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用GET POST COOKIE 中的一个方式传入xss变量来进行测试漏洞");
        if(empty($_REQUEST['xss'])){
            $this->smart->assign("data","这里是你的输入 x!");
        }else{
            $r = str_replace("<","",$_REQUEST['xss']);
            $r = str_replace(">","",$r);
            $str = "<code id='code'></code><script>var a=document.getElementById('code').innerHTML=\"PHP代码如下:{$r}\"</script>";
            $this->smart->assign("data","$str");
        }
        $this->smart->display('xss.html');
    }

    public function xss_nine(){
        $this->smart->assign("expTitle","反射型XSS");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请自己查看Js来进行测试漏洞");
        $str = "<code id='code'></code><script>var hash = unescape(location.hash);document.getElementById('code').innerHTML=\"PHP代码如下:\"+hash;document.getElementById('code').title=hash</script>";
        $this->smart->assign("data","$str");

        $this->smart->display('xss.html');
    }

    public function xss_ten(){
        $this->smart->assign("expTitle","反射型XSS");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请自己查看Js来进行测试漏洞");
        $str = "<code id='code'><? echo 'xxxxxx' ?></code><script>var url=unescape(location.href);var allargs = url.split(\"?\")[1];if(allargs !=null && allargs.indexOf('&')>0){var arg = allargs.split('&');for(var i=0;i<arg.length;i++){var argx = arg[i].split('=')[1];eval('var a=\"'+argx+'\";');}}</script>";
        $this->smart->assign("data","$str");

        $this->smart->display('xss.html');
    }

    public function xss_eleven(){
        $this->smart->assign("expTitle","反射型XSS");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请自己查看Js来进行测试漏洞");
        $str = "<iframe src='http://www.f4ckweb.top/' id='if'></iframe><script>function test(test){if(test.indexOf('javascript:')){return ''}else{return unescape(test)}}var ifx = document.getElementById('if');if(location.href.indexOf('?') > 0){ifx.src=test(location.href.split('?')[1].split('=')[1])}</script>";
        $this->smart->assign("data","$str");

        $this->smart->display('xss.html');
    }
}