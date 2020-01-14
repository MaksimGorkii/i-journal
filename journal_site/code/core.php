<?php
if(isset($_GET['item'])){$item=$_GET['item'];}
if(isset($_GET['sub'])){$sub=$_GET['sub'];}

if(!$item){$item='home';}
$content=$item; 

if($item=='home'){$content='index'; $m1='active';}
if($item=='editors'){ $m2='active';}
if($item=='instructions'){ $m3='active';}
if($item=='issue'){ $m4='active'; }
if($item=='archive'){ $m5='active';}
if($item=='contacts'){ $m6='active';}
?>