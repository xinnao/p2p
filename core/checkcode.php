<?php
class CCheckCodeFile
{
    private $mCheckCodeNum  = 4;
    private $mCheckCode   = '';
    private $mCheckImage  = '';
    private $mDisturbColor  = '';
    private $mCheckImageWidth = '50';
    private $mCheckImageHeight  = '18';
    private function OutFileHeader(){
        header ("Content-type: image/png");
    }
    private function CreateCheckCode(){
        //$this->mCheckCode = strtolower(strtoupper(substr(md5(rand()),0,$this->mCheckCodeNum)));
		$this->mCheckCode = strtolower(strtoupper(substr(rand(),0,$this->mCheckCodeNum)));
        return $this->mCheckCode;
    }
    private function CreateImage(){
        $this->mCheckImage = @imagecreate ($this->mCheckImageWidth,$this->mCheckImageHeight);
        imagecolorallocate ($this->mCheckImage, 250, 250, 250);
        return $this->mCheckImage;
    }
    private function SetDisturbColor(){
        for ($i=0;$i<=128;$i++){
            $this->mDisturbColor = imagecolorallocate ($this->mCheckImage, rand(0,255), rand(0,255), rand(0,255));
            imagesetpixel($this->mCheckImage,rand(2,128),rand(2,38),$this->mDisturbColor);
        }
    }
    public function SetCheckImageWH($width,$height){
        if($width==''||$height=='')return false;
        $this->mCheckImageWidth  = $width;
        $this->mCheckImageHeight = $height;
        return true;
    }
    private function WriteCheckCodeToImage(){
        for ($i=0;$i<=$this->mCheckCodeNum;$i++){
            $bg_color = imagecolorallocate ($this->mCheckImage, rand(0,255), rand(0,128), rand(0,255));
            $x = floor($this->mCheckImageWidth/$this->mCheckCodeNum)*$i;
            $y = rand(0,$this->mCheckImageHeight-15);
            imagechar ($this->mCheckImage, 5, $x, $y, $this->mCheckCode[$i], $bg_color);
        }
    }
    public function OutCheckImage(){
        $this ->OutFileHeader();
        $this ->CreateCheckCode();
         $_SESSION['checkcode']=strtolower($this->mCheckCode);
		//setcookie("checkcode", strtolower($this->mCheckCode), time()+60*60*4,"/");
        $this ->CreateImage();
        $this ->SetDisturbColor();
        $this ->WriteCheckCodeToImage();
        imagepng($this->mCheckImage);
        imagedestroy($this->mCheckImage);
    }
}
session_start();
$c_check_code_image = new CCheckCodeFile();
$c_check_code_image ->OutCheckImage();
?>