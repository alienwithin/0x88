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
if ( isset( $_POST['Old'], $_POST['New'], $_POST['Re'] ) )
{
    $sql = sql_placeholder( "SELECT * FROM tp_users WHERE id = ?", $_SESSION['UserID'] );
    $r = mysql_query( $sql );
    $UserInfo = mysql_fetch_array( $r );
    if ( md5( $_POST['Old'] ) != $UserInfo['password'] )
    {
        $message = "Неверен текущий пароль";
    }
    else if ( $_POST['New'] != $_POST['Re'] )
    {
        $message = "Пароль подтвержден неверно";
    }
    else
    {
        $sql = sql_placeholder( "UPDATE tp_users SET password = ? WHERE id = ? and password = ?", md5( $_POST['New'] ), $_SESSION['UserID'], md5( $_POST['Old'] ) );
        $r = mysql_query( $sql );
        $message = "Пароль успешно сменен";
        $_POST['Old'] = "";
        $_POST['New'] = "";
        $_POST['Re'] = "";
    }
}
echo "\r\n\r\r\n<br>\r\r\n<table cellpadding=0 cellspacing=0 width='600' border=1 align=center bordercolor=\"#7AA0B8\" bordercolorlight=black bordercolordark=white>\r\r\n<form method=\"post\">\r\r\n    <tr>\r\r\n\t\t<td align=\"center\" class=\"pagetitle\" colspan=\"5\" bgcolor=\"#103056\"><b>Смена пароля</b></td>\r\r\n\t</tr>\r\r\n\t<tr>\r\r\n\t\t<td align=\"center\" class=\"pagetitle2\">Старый пароль:</td>\r\r\n\t\t<td align=\"center\" class=\"pagetitle2\">Новый пароль:</td>\r\r\n\t\t<td align=\"center\" class=\"pagetitle2\">Повторите:</td>\r\r\n\t\t<td align=\"center\" class=\"pagetitle2\">&nbsp;</td>\r\r\n\t</tr>\r\r\n\t<tr>\r\r\n\t\t<td align=\"center\"><input type=\"password\" size=\"20\" name=\"Old\" class=inputbox3 value=\"";
echo $_POST['Old'];
echo "\"></td>\r\r\n\t\t<td align=\"center\"><input type=\"password\" size=\"20\" name=\"New\" class=inputbox3 value=\"";
echo $_POST['New'];
echo "\"></td>\r\r\n\t\t<td align=\"center\"><input type=\"password\" size=\"20\" name=\"Re\" class=inputbox3 value=\"";
echo $_POST['Re'];
echo "\"></td>\r\r\n\t\t<td align=\"center\"><input type=\"submit\" value=\"Сменить\" class=button1 onmouseover=\"this.style.backgroundColor = '#3E3E3E'\" onmouseout=\"this.style.backgroundColor = '#4B4B4B'\"></td>\r\r\n\t</tr>\r\r\n</form>\r\r\n</table>\r\r\n\r\r\n<br>\r\r\n\r\r\n";
if ( $message != "" )
{
    echo "\r\n<table cellpadding=0 cellspacing=0 width='600' border=1 align=center bordercolor='#7AA0B8' bordercolorlight=black bordercolordark=white>\r\r\n\t<tr><td align=center class=pagetitle bgcolor=#F9FBFB><font color=#186C1D><b>";
    echo $message;
    echo "</b></font></td></tr>\r\r\n</table>\r\r\n";
}
echo "\r\n\r\r\n<br>\r</td></tr><tr><td align=\"center\" class=\"pagetitle\" bgcolor=\"#000000\"><a href=\"http://xshop.in\"><font color=\"snow\">Created by&nbsp;<b>0x88</b>&nbsp;(ICQ 92777755)</a></font></td></tr></table></body></html>\r\n";
?>
