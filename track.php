<?php
class config{
    public $logged, $logid;
    function set($logged,$logid){
        $this->$logged = $logged;
        $this->$logid = $logid;
    }
}

class hire{
    public $pin, $local, $mob, $contact, $land,  $street,  $floor, $hno, $time, $date, $hname,  $uid, $wid, $aid, $hid, $wname, $proff, $base_p, $wnum;
    function set(){
        $hid = "";
        $aid = "";
        $wid = "";
       $uid  = "";
       $wname = "";
         $hname = "";
       $date = "";
       $time = "";
       $hno  = "";
      $floor = "";
     $street = "";
       $land = "";
       $mob  = "";
     $local  = "";
       $pin  = "";
       $contact ="";
       $wnum = "";
    }
}

class search{
  public $proff, $pin, $area;
  public function __construct() {
    $proff = "";
    $pin = "";
    $area = "";
  }
  // function set($proff, $pin){
  //   $this->proff = $proff;
  //   $this->pin = $pin;
  // }
}
?>