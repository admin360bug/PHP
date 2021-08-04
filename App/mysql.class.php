<?php
namespace Null\mysql;

class mysql{
    public function link(){
        return new \mysqli('127.0.0.1','root','root','kepp');
    }
}