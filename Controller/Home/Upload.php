<?php

class Upload extends Controller {
    public function upload_one(){
        $this->smart->assign("expTitle","任意文件上传");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用下面的表单进行上传文件");
        $this->smart->assign("action","/index.php/Home/Upload/upload_one");
        $res = $this->upload->upload('file','');
        $this->smart->assign("data",$res);
        $this->smart->display('upload.html');
    }

    public function upload_tow(){
        $this->smart->assign("expTitle","任意文件上传");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用下面的表单进行上传文件");
        $this->smart->assign("action","/index.php/Home/Upload/upload_tow");
        $res = $this->upload->upload('file','type');
        $this->smart->assign("data",$res);
        $this->smart->display('upload.html');
    }


    public function upload_three(){
        $this->smart->assign("expTitle","任意文件上传");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用下面的表单进行上传文件");
        $this->smart->assign("action","/index.php/Home/Upload/upload_three");
        $res = $this->upload->upload('file','white');
        $this->smart->assign("data",$res);
        $this->smart->display('upload.html');
    }

    public function upload_four(){
        $this->smart->assign("expTitle","任意文件上传");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用下面的表单进行上传文件");
        $this->smart->assign("action","/index.php/Home/Upload/upload_four");
        $res = $this->upload->upload('file','black');
        $this->smart->assign("data",$res);
        $this->smart->display('upload.html');
    }

    public function upload_five(){
        $this->smart->assign("expTitle","任意文件上传");
        $this->smart->assign("alt","你可以使用这个漏洞做出任何你想做的事情");
        $this->smart->assign("alt_1","请使用下面的表单进行上传文件");
        $this->smart->assign("action","/index.php/Home/Upload/upload_five");
        $res = $this->upload->upload('file','content');
        $this->smart->assign("data",$res);
        $this->smart->display('upload.html');
    }
}