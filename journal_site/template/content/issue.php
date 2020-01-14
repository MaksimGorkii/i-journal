<div class="title">Current Issues <?php if(isset($_GET['id'])){?><a href="index.php?item=issue" class="issue_back">&lt;&lt; back to issues</a><?php } ?></div>
<?php if(!isset($_GET['id'])){?>
<div class="text issue_item">
	<a href="upload/6.pdf" target="_blank"><img src="template/images/journal1_m.jpg"></a>
    <div class="issue_desc">
    	<strong>Issue #5(6), 2019</strong> <br><br>
        Date of publishing: <strong>01 DECEMBER 2019</strong><br>
        <a href="index.php?item=issue&id=6">view</a>
    </div>
</div>
<?php } else {?>
<div class="text issue_item">
	<img src="template/images/journal1_page1.jpg">
    <div class="issue_desc">
<strong>Issue #5(6), 2019</strong><br><br>
<strong>Journal Sections: </strong><br>
Shcherbakova O. Development of Positive Thinking of Students of Basic School as a Method for Forming Psychosocial Health.
<br><br>
Berezhna T. Health-Saving Technologiesin Educational Institutions of Ukraine.<br><br>
Danylenko H, Svetz A. Formation of the Professional Competence of Youth Through Professional Events in the System of Professional-Technical Schools.
<br><br>
Mykhailova I. Psychological Charactiristics of Anxiety and Depressive Disorders of Art-Diagnostics in Children When Choosing Therapeutic Tactics of Intervenrion.<br><br>
Bagatska N. Features of the Chromosomal Apparatus in Adolescents with Depressive Behavioral Disorders.
<br><br>
Matkovska T. Some Peculiarities in the Mental Health Status of Children with Non-Toxic Diffuse Goiter.<br><br>
<a href="upload/<?php echo $_GET['id'];?>.pdf" target="_blank" style="float:none; margin-top:20px; width:24px;">view</a>
    </div>
</div>
<?php } ?>