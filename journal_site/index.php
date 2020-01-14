<?php
include "code/core.php"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Global Academics <?php echo $meta_t; ?></title> 
	<meta name="keywords" content=""> 
	<meta name="description" content=""> 
   	<link rel="stylesheet" type="text/css" href="template/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<center>
    <div id="content" align="center"> 
		<div class="header">
        	<a href="index.php" class="logo"></a>
            <div class="issn" style="display:none;">issn: 0000-0000</div>
            <div class="search_box">
            	<input type="text" class="search_field" placeholder="search..."></input>
                <a href="" onclick="return false;" class="search_bt"></a>
            </div>
        </div>
        <div class="menu">                                       
        	<a href="index.php?item=home" class="<?php echo $m1;?>">Home page</a>
            <a href="index.php?item=editors" class="<?php echo $m2;?>">Editorial team</a>
            <a href="index.php?item=instructions" class="<?php echo $m3;?>">Instructions for Authors and Conference Participants</a>
            <a href="index.php?item=issue" class="<?php echo $m4;?>">Current Issues and Conferences</a>
            <a href="index.php?item=archive" class="<?php echo $m5;?>">Archive</a>
            <a href="index.php?item=contacts" class="<?php echo $m6;?>">Contacts</a>
            <div class="social">
            	<a href="http://twitter.com" target="_blank" class="social_tw"></a>
                <a href="http://facebook.com" target="_blank" class="social_fb"></a>
                <a href="http://instagram.com" target="_blank" class="social_in"></a>
            </div>
        </div>
        
        <?php if($item=='home'){?>
            <div class="slider">
                <p>Open Access</p>
            </div>
            <div class="donate">
                <p>If you have the opportunity, we will be happy to accept a donation for the development of the journal.</p>
                <a href="" onclick="return false;">donate now </a>
            </div>
        <?php }else{ ?>
        	<div class="page_bg"></div>
        <?php } ?>
        
        <div class="content_box">
        	 <?php 
			 $path="template/content/$content.php";
			 if(file_exists($path)){include $path;}else{echo "<div class=title>Page is under construction</div>";}
			 ?>			
        </div>
        
        <div class="right_line">
        	<?php include "template/files/right_line.php";?>
        </div>
        
        <div class="footer">&copy; <?php echo date("Y");?> Global Academics - Open Access Publisher.</div>
        
    </div>
</center>    
</body>

</html>

