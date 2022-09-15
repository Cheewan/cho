<?php
include("../res/x5engine.php");
$nameList = array("3nf","eg5","scc","egu","gd4","nve","yjx","uku","vun","nhl");
$charList = array("Y","V","J","X","W","2","P","E","6","7");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
