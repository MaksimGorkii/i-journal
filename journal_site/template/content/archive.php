<div class="title">Archive <?php if(isset($_GET['id'])){?><a href="index.php?item=archive" class="issue_back">&lt;&lt; back to issues</a><?php } ?></div>
<?php if(!isset($_GET['id'])){?>

<div class="text issue_item">
	<a href="upload/5.pdf" target="_blank"><img src="template/images/journal1_m.jpg"></a>
    <div class="issue_desc">
    	<strong>Issue #4(5), 2019</strong> <br><br>
        Date of publishing: <strong>01 SEPTEMBER 2019</strong><br>
        <a href="index.php?item=archive&id=5">view</a>
    </div>
</div>


<div class="text issue_item">
	<a href="upload/4.pdf" target="_blank"><img src="template/images/journal1_m.jpg"></a>
    <div class="issue_desc">
    	<strong>Issue #3(4), 2019</strong> <br><br>
        Date of publishing: <strong>01 JUNE 2019</strong><br>
        <a href="index.php?item=archive&id=4">view</a>
    </div>
</div>

<div class="text issue_item">
	<a href="upload/3.pdf" target="_blank"><img src="template/images/journal1_m.jpg"></a>
    <div class="issue_desc">
    	<strong>Issue #2(3), 2019</strong> <br><br>
        Date of publishing: <strong>01 APRIL 2019</strong><br>
        <a href="index.php?item=archive&id=3">view</a>
    </div>
</div>

<div class="text issue_item">
	<a href="upload/2.pdf" target="_blank"><img src="template/images/journal1_m.jpg"></a>
    <div class="issue_desc">
    	<strong>Issue #1(2), 2019</strong> <br><br>
        Date of publishing: <strong>01 MARCH 2019</strong><br>
        <a href="index.php?item=archive&id=2">view</a>
    </div>
</div>


<div class="text issue_item">
	<a href="upload/1.pdf" target="_blank"><img src="template/images/journal1_m.jpg"></a>
    <div class="issue_desc">
    	<strong>Issue #1(1), 2018</strong> <br><br>
        Date of publishing: <strong>01 DECEMBER 2018</strong><br>
        <a href="index.php?item=archive&id=1">view</a>
    </div>
</div>



<?php } else {?>
<div class="text issue_item">
	<img src="template/images/journal1_page1.jpg">
    <div class="issue_desc">
    
<?php if($_GET['id']=='1'){?>
	<strong>Issue #1(1), 2018</strong><br><br>
<strong>Journal Sections: </strong><br>
Safonov Yu. M., Borshch V. I. Intellectual Leader and His Role in the Modern
Management System.
<br><br>
Bun V. Methodology for the study of electoral choice in transitional societies: the
construction of integrative models.
<br><br>
Vdovychyn I. Liberal Idea in the Ukrainian Political Thought of the 20-30s of the
Twentieth Century.
<br><br>
Steblianko I.O., Yerak A.V. Influence of Environmental Responsibility of Modern Business
on the Economy of a Country.
<br><br>
Markina І., Syomych M., Aksyuk Y. Main Directions of Marketing Activities Improvement
of Grain Processing Enterprises in the Conditions of Globalization. 
<br><br>
Topuzov O.V., Puzikov D.O. Forecasting of General Secondary Education’s Content
Development.
<br><br>
Moskaleva L.Yu., Bohdan Khmelnitsky B. Teachers’ Scientific Research Work as a Basis
for Formation of a Tutor Training System in a Higher Educational Institution.
<br><br>
Nazarenko H. Information and Communication Space for the Development of Professional
Compenency of Teachers in Pre-Educational Institutions.
<br><br>
Berezhna T, Yezhova O, Biesiedina A. Experience of health schools in Ukraine and
Eastern Europe.
<br><br>
Taranik-Tkachuk K. The narrative model of the English novel of the eighteenth century (based on the work of Henry Fielding «The History of Tom Jones, a Foundling»).
<br><br>
Oleksandrovich M. Yu., Stepanovich G.G. Innovating Direction of Human Capital Management System in the Publisging Industry.

<?php }else if($_GET['id']=='2'){?>
	<strong>Issue #1(2), 2019</strong><br><br>
<strong>Journal Sections: </strong><br>
Potereiko O. O. I. Governments as a Significant Component of the Virtual Country. 
<br><br>
Serzhanov V.V., Kostovyat H.I. Actual Problems and Developments of the Electronic Government in Ukraine. 
<br><br>
Masina L. O. Financial-Economic Monitoring in the System of Strategic Control. 
<br><br>
Markina І., Syomych M., Ovcharuk O. Improvement of Information Support for Anti-Crisis Management of Agri-Food Enterprises. 
<br><br>
Melnyk Yu. M. Methodological Aspects of Strategic Regulation of Economic Dynamics in the Industrial Sector of the National Economy.
<br><br>
Morshchavka Yu. Socio-Economic Aspects of Coordination of the Activities of Segmental Components in the Publishing Industry.
<?php }else if($_GET['id']=='3'){?>
	<strong>Issue #2(3), 2019</strong><br><br>
<strong>Journal Sections: </strong><br>
Safonov Yu. M., Borshch V. I., Dymenko R. Professionalization of the Manageral Capital in the Healthcare Field
<br><br>
Shtuler I.Yu. Institutional Preconditions Forming Competitiveness Model of the National Economy
<br><br>
Berezhna T. Willingness of the Teachers to Introduce Health Care Technologies in the Context of the Ideas of the �New Ukrainian School�.
<br><br>
Danylenko G.M., Letyago A.V., Savelieva L.M. Characteristics of Extracurricular Activities and Their Influence on Professional Readiness of Student Youth.
<br><br>
Dynnik V.A. Characteristics of Pubertal Development in Modern Girls in Ukraine.

<?php }else if($_GET['id']=='4'){?>
	<strong>Issue #3(4), 2019</strong><br><br>
<strong>Journal Sections: </strong><br>
Uhryn L. National Identity under Conditions of Multiculturalism of Modern Societies.
<br><br>
Safonov Yu. M., Borshch V. I. Strategic Model of Managing Healthcare Facilities.
<br><br>
Berezhna T., Vaschenko O. Analysis of the Results of the Study of Formation of Health-Saving Environment of Institutions of General Secondary Education of Ukraine.
<br><br>
Klokar N., Goncharenko N., Dymenko R. Supervision as a Democratic Component of the New Ukrainian School Management: Basic Principals.
<br><br>
Safonov Yu. M., Mykhailovska O.V. Formation of Modern Directions of Strategic Development of the Publishing and Printing Industry of kraine.
<br><br>
Barna M., Vynogradova O., Drokina N. Inbound Marketing Strategy for Tourism Enterprises.
<br><br>
Sheremet O. Determinants of Strategic Benchmarks of Food Industry Entities in Market Environment.

<?php }else if($_GET['id']=='5'){?>
	<strong>Issue #4(5), 2019</strong><br><br>
<strong>Journal Sections: </strong><br>
Avdiivska O., Danylenko H., Shcherbakova O. Creating An Enabling Learning Environment in the Conditions of Intensification of Educational Activities.
<br><br>
Shkurapet N.I. The Role of School Medicine in the Formation of Health-Preserving Educational Environment as the Main Factor Affecting the Health of Modern Schoolchildren.<br><br>
Danylenko G.N., Mikhanovskaya N.G. Approaches to Diagnostics of Consequences of Home Violence about Children.<br><br>
Danylenko G.N., Kostenko T.P., Romanova N.G., Turchina S.I. Different Difficult Circumstances and Physical Development of a Child.<br><br>
Kyrylova O., Kyrylova Y. Psychological Characteristics of Boys with Delayed Puberty and System of Their Psychological Support.
<br><br>
Akhnazaryants E.L., Bessonova I.N., Bogmat L.F., Nikonova V.V., Nosova E.M. Value of Monitoring of Physical Development in the Presence of Arterial Hypertension.



<?php }?>
<br><br>
<a href="upload/<?php echo $_GET['id'];?>.pdf" target="_blank" style="float:none; margin-top:20px; width:24px;">view</a>
    </div>
</div>
<?php } ?>