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
$userid=check_input($_SESSION['UserID']) ;
$oldpass=check_input($_POST['Old']);
$newpass=check_input($_POST['New']);
$passconfirm=check_input($_POST['Re']);
if ( isset( $_POST['Old'], $_POST['New'], $_POST['Re'] ) )
{
    $sql = "SELECT * FROM `tp_users` WHERE id = '$userid'";
    $r = mysql_query( $sql );
    $UserInfo = mysql_fetch_array( $r );
    if ( md5( $_POST['Old'] ) != $UserInfo['password'] )
    {
        $message = "The current password is incorrect";
    }
    else if ( $_POST['New'] != $_POST['Re'] )
    {
        $message = "Password incorrectly confirmed";
    }
    else
    {
        $sql = "UPDATE `tp_users` SET password = 'md5($newpass)' WHERE id = '$userid' and password = '$oldpass'";
        $r = mysql_query( $sql );
        $message = "Password successfully changed";
        $_POST['Old'] = "";
        $_POST['New'] = "";
        $_POST['Re'] = "";
    }
}
echo "\r\n\r\r\n<br>\r\r\n<table cellpadding=0 cellspacing=0 width='600' border=1 align=center bordercolor=\"#7AA0B8\" bordercolorlight=black bordercolordark=white>\r\r\n<form method=\"post\">\r\r\n    <tr>\r\r\n\t\t<td align=\"center\" class=\"pagetitle\" colspan=\"5\" bgcolor=\"#103056\"><b>Changing the password</b></td>\r\r\n\t</tr>\r\r\n\t<tr>\r\r\n\t\t<td align=\"center\" class=\"pagetitle2\">Old password:</td>\r\r\n\t\t<td align=\"center\" class=\"pagetitle2\">New password:</td>\r\r\n\t\t<td align=\"center\" class=\"pagetitle2\">Confirm Password:</td>\r\r\n\t\t<td align=\"center\" class=\"pagetitle2\">&nbsp;</td>\r\r\n\t</tr>\r\r\n\t<tr>\r\r\n\t\t<td align=\"center\"><input type=\"password\" size=\"20\" name=\"Old\" class=inputbox3 value=\"";
echo $_POST['Old'];
echo "\"></td>\r\r\n\t\t<td align=\"center\"><input type=\"password\" size=\"20\" name=\"New\" class=inputbox3 value=\"";
echo $_POST['New'];
echo "\"></td>\r\r\n\t\t<td align=\"center\"><input type=\"password\" size=\"20\" name=\"Re\" class=inputbox3 value=\"";
echo $_POST['Re'];
echo "\"></td>\r\r\n\t\t<td align=\"center\"><input type=\"submit\" value=\"Change\" class=button1 onmouseover=\"this.style.backgroundColor = '#3E3E3E'\" onmouseout=\"this.style.backgroundColor = '#4B4B4B'\"></td>\r\r\n\t</tr>\r\r\n</form>\r\r\n</table>\r\r\n\r\r\n<br>\r\r\n\r\r\n";
if ( $message != "" )
{
    echo "\r\n<table cellpadding=0 cellspacing=0 width='600' border=1 align=center bordercolor='#7AA0B8' bordercolorlight=black bordercolordark=white>\r\r\n\t<tr><td align=center class=pagetitle bgcolor=#F9FBFB><font color=#186C1D><b>";
    echo $message;
    echo "</b></font></td></tr>\r\r\n</table>\r\r\n";
}
echo "\r\n\r\r\n<br>\r</td></tr><tr><td align=\"center\" class=\"pagetitle\" bgcolor=\"#000000\"><a href=\"http://munir.skilledsoft.com\"><font color=\"snow\">Recoded By by&nbsp;<b>Alienwithin</b>&nbsp; || Original Coder's(ICQ 92777755)</a></font></td></tr></table></body></html>\r\n";
?>
