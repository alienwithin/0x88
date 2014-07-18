<?
header("content-type: application/hta");
$szFile="mod/ok/xhta.hta";
$hFile=fopen($szFile, "r");
$szHTML=fread($hFile,filesize($szFile));
fclose($hFile);
echo($szHTML);
?>