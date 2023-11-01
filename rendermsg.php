<?php

session_start();
if(isset($_SESSION['hire'])){
$h = $_SESSION['hire'];
$msghire = "Dear $h->hname,

You are hiring $h->wname for $h->proff on $h->date from $h->time 

worker contact number $h->contact "; 

$msgworker = "Dear $h->wname,

You are hire $h->hname for $h->proff on $h->date from $h->time 

contact number $h->mob 

Address : $h->floor|$h->hno, $h->street, $h->land, $h->local,  $h->pin"; 

$hire = $h->mob;
$worker = $h->contact;
}

?>
