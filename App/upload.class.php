<?php
namespace Null\upload;

class upload{

    public $msg;

    public function upload($name,$case){
        switch ($case){
            case 'type':
                if($this->Mime($_FILES[$name]['type'])){
                    if(move_uploaded_file($_FILES[$name]['tmp_name'],__D__.'/uploads/'.$_FILES[$name]['name'])){
                        return __D__.'/uploads/'.$_FILES[$name]['name'];
                    }
                }else{
                    return $this->msg;
                }
                break;
            case 'white':
                if ($this->white($_FILES[$name]['name']) != 'jpg'){
                    return '只允许上传jpg!';
                }
                if(move_uploaded_file($_FILES[$name]['tmp_name'],__D__.'/uploads/'.$_FILES[$name]['name'])){
                    return __D__.'/uploads/'.$_FILES[$name]['name'];
                }
                break;
            case 'black':
                if (!in_array($this->white($_FILES[$name]['name']),['php','aspx','asp','jsp'])){
                    if(move_uploaded_file($_FILES[$name]['tmp_name'],__D__.'/uploads/'.$_FILES[$name]['name'])){
                        return __D__.'/uploads/'.$_FILES[$name]['name'];
                    }
                }
                return '文件后缀不正确,不允许上传php aspx asp jsp';
            case 'content':
                $type = $this->getImagetype($_FILES[$name]['tmp_name']);
                if ($type == 'jpg' ||$type == 'gif'|| $type == 'bmp' || $type == 'png'){
                    if(move_uploaded_file($_FILES[$name]['tmp_name'],__D__.'/uploads/'.$_FILES[$name]['name'])){
                        return __D__.'/uploads/'.$_FILES[$name]['name'];
                    }
                }
                return $this->msg;
            default:
                if(move_uploaded_file($_FILES[$name]['tmp_name'],__D__.'/uploads/'.$_FILES[$name]['name'])){
                    return __D__.'/uploads/'.$_FILES[$name]['name'];
                }
                return $_FILES[$name]['error'];
        }
    }

    public function Mime($type){
        if($type == 'image/gif' || $type == 'image/jpeg' || $type == 'image/pjpeg'){
            return true;
        }
        $this->msg = 'error!type不正确.';
        return false;
    }


    public function white($filename){
        $ext = pathinfo($filename,PATHINFO_EXTENSION);
        return $ext;
    }

    public function getImagetype($filename)
    {
        $file = fopen($filename, 'rb');
        $bin  = fread($file, 2); //只读2字节
        fclose($file);
        $strInfo  = @unpack('C2chars', $bin);
        $typeCode = intval($strInfo['chars1'].$strInfo['chars2']);
        // dd($typeCode);
        $fileType = '';
        switch ($typeCode) {
            case 255216:
                $fileType = 'jpg';
                break;
            case 7173:
                $fileType = 'gif';
                break;
            case 6677:
                $fileType = 'bmp';
                break;
            case 13780:
                $fileType = 'png';
                break;
            default:
                $this->msg = '只能上传图片类型格式';
        }
        return $fileType;
    }


}

?>