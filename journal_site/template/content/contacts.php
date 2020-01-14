<div class="title">contact Us</div>

<div class="contacts_title">Editorial Office</div>

<div class="text">
   	<div class="left_50">
    Global Academics<br>
    International Journal of Advance Researches 
    </div>
    <div class="left_50">
    Phone: +1-904-428-3807, +1-904-428-6275<br>
    E-mail: editor.globalacademics@gmail.com
    </div>
</div>

<div class="contacts_title">Leave a Message</div>
<div class="text">
<?php 
if(!isset($_GET['send'])){?>
	<form action="index.php?item=contacts&send=form" method="post" id="myform">
	<div class="cont_col1">
    	<label>Title :</label>
        <input type="text" name="name">
        <label>First Name :</label>
        <input type="text" name="">
        <label>Last Name :</label>
        <input type="text" name="">
        <label>E-mail: </label>
        <input type="text" name="">
    </div>
    <div class="cont_col2">
    	<label>Country:</label>
        <input type="text" name="">
        <label>University/Institution:</label>
        <input type="text" name="">
        <label>Query related to:</label>
        <input type="text" name="">
        <label>Anti Spam Code:</label>
        <input type="text" name="" placeholder="Qzx4Gh">
    </div>
    <label>Your question:</label>
    <textarea name=""></textarea>
    <input type="hidden" name="hide" value="1">
    <a href="index.php?item=contacts&send=form" class="send_bt">Send</a>
    </form>
    <?php }else{?>
    	<div class="mess">Thank you, your message has been sent.</div>
    <?php } ?>
</div>