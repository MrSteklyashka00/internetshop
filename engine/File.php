<?php
namespace app\emgine;

class File{
    protected $file = null;
    public function __construct($upFile=null)
    {
      $this->file=$upFile;
    }

    public function hasFile(){
        if($this->file !== null){
            if(isset($this->file['name']))
                if($this->file['name']!=='')
                    return true;
        }
        return false;
    }

    public function upCorrectly(){
        if($this->file !== null)
            if($this->file['error']=== UPLOAD_ERR_OK)
                return true;
            return false;

    }
    public function isImage(){
        if($this->file !== null){
            $imageInfo=getimagesize($this->file['tmp_name']);
            if($imageInfo === false)
                return false;
            else return true;
        }
        return false;
    }

    public function getFileName(){
         if($this->file !== null)
            return $this->file['name'];
        return '';
    }

    public function save($name,$dir){
        $upDir = ROOT . $dir;
        if(!is_dir($upDir))
            mkdir($upDir, 0755, true);

        $upPath = $upDir.$name;
        return move_uploaded_file($this->file['tmp_name'],$upPath);
    }


}