<?php

class Controller{
    public function __construct()
    {
        $this->upload = new Null\upload\upload();
        $this->smart = new Smarty();
        $this->smart->template_dir = __D__."/public/";
        $this->smart->assign("UI_CSS","/public/UI/semantic.css");
        $this->smart->assign("UI_JS", "/public/UI/semantic.js");
        $this->smart->assign("UI_JQ", "/public/UI/jq.js");

        $this->smart->assign("index_css","/public/css/index.css");
        $this->smart->assign("prism_css","/public/css/prism.css");
        $this->smart->assign("logo_img","/public/img/logo.png");
        $this->smart->assign("index_js","/public/js/index.js");
        $this->smart->assign("jq_js","/public/js/jquery.min.js");

        $this->smart->assign("star_app","/public/star/app.js");
        $this->smart->assign("star_css","/public/star/app.min.css");
        $this->smart->assign("star_krhrpeyDEQknQgyhxrvn","/public/star/krhrpeyDEQknQgyhxrvn.js");
        $this->smart->assign("star_sNuMVECHBxUzZGrbnpKK","/public/star/sNuMVECHBxUzZGrbnpKK.js");
    }
}


?>