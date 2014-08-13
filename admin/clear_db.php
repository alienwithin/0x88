<?php
/************************/
/*                      */
/*Dezended By Martian   */
/*munir.skilledsoft.com */
/*                      */
/*                      */
/************************/

include( "include/inc.header.php" );
$message = "";
if ( @( $_POST['action'] == "clear" ) )
{
    $sql = "DELETE FROM tp_logs";
    mysql_query( $sql );
    $sql = "DELETE FROM tp_stats";
    mysql_query( $sql );
    $sql = "UPDATE tp_hits SET total = 0";
    mysql_query( $sql );
    $message = "Statistics is refined";
}
echo "\r\n\r\n\r\n<br>\r\n\r\n\r\n\r\n<table cellpadding=0 cellspacing=0 width='600' border=1 align=center bordercolor=\"#7AA0B8\" bordercolorlight=black bordercolordark=white>\r\n\r\n<form method=\"post\">\r\n\r\n<input type=\"Hidden\" name=\"action\" value=\"clear\">\r\n\r\n\t<tr>\r\n\r\n\t\t<td align=\"center\" class=\"pagetitle\" bgcolor=\"#103056\"><b>Clearing the statistics</b></td>\r\n\r\n\t</tr>\r\n\r\n\t<tr>\r\n\r\n\t\t<td align=\"center\" class=\"pagetitle3\" bgcolor=\"#7AA0B8\">\r\n\r\n\t\t\t<br>\r\n\r\n\t\t\t<input type=\"submit\" value=\"clean\" class=button1 onmouseover=\"this.style.backgroundColor = 'black'\" onmouseout=\"this.style.backgroundColor = '#4B4B4B'\">\r\n\r\n\t\t\t<br><br>\r\n\r\n\t\t</td>\r\n\r\n\t</tr>\r\n\r\n</form>\r\n\r\n</table>\r\n\r\n\r\n\r\n<br>\r\n\r\n\r\n\r\n";
if ( $message != "" )
{
    echo "\r\n<table cellpadding=0 cellspacing=0 width='600' border=1 align=center bordercolor='#7AA0B8' bordercolorlight=black bordercolordark=white>\r\n\r\n\t<tr><td align=center class=pagetitle bgcolor=#F9FBFB><font color=#186C1D><b>";
    echo $message;
    echo "</b></font></td></tr>\r\n\r\n</table>\r\n\r\n";
}
echo "\r\n\r\n\r\n<br>\r\n</td></tr><tr><td align=\"center\" class=\"pagetitle\" bgcolor=\"#000000\"><a href=\"http://munir.skilledsoft.com\"><font color=\"snow\">Recoded By by&nbsp;<b>Alienwithin</b>&nbsp; || Original Coder's(ICQ 92777755)</a></font></td></tr></table></body></html>";
?>
