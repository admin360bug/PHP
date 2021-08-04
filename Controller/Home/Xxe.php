<?php

class Xxe extends Controller{
    public function xxe_one(){
        $xml = file_get_contents("php://input");
        $xml = simplexml_load_string($xml);
        $this->smart->assign("expTitle","XXE漏洞");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用POST传入XML格式数据进行测试漏洞,程序会解析name标签");
        $this->smart->assign("data",$xml->name);
        $this->smart->display("xxe.html");
    }


    public function xxe_tow(){
        $xml = file_get_contents("php://input");
        $xml = simplexml_load_string($xml);
        $this->smart->assign("expTitle","XXE漏洞");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用POST传入XML格式数据进行测试漏洞");
        $this->smart->assign("data","成功解析XML数据");
        $this->smart->display("xxe.html");
    }
}