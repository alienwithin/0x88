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
$username=check_input($_POST['UserName']);
$pass=check_input($_POST['Pass']);
$confirm=check_input($_POST['Re']);
if ( isset( $_POST['UserName'], $_POST['Pass'], $_POST['Re'] ) )
{
    $sql = "SELECT * FROM tp_users WHERE login = '$username'";
    $r = mysql_query( $sql );
    $num = mysql_num_rows( $r );
    if ( 0 < $num )
    {
        $message = "This user already exists, choose another login";
    }
    else if ( trim( $username) == "" )
    {
        $message = "Enter your user name";
    }
    else if ( $pass != $confirm )
    {
        $message = "Password incorrectly confirmed";
    }
    else
    {
        $sql = "INSERT INTO `tp_users`(login, password) VALUES('$username', 'md5($pass')";
        $r = mysql_query( $sql );
        $message = "user '".$username."' created";
        $_POST['UserName'] = "";
        $_POST['Pass'] = "";
        $_POST['Re'] = "";
    }
}
echo "\r\n\r\r\n<br>\r\r\n<table cellpadding=0 cellspacing=0 width='600' border=1 align=center bordercolor=\"#7AA0B8\" bordercolorlight=black bordercolordark=white>\r\r\n<form method=\"post\">\r\r\n    <tr>\r\r\n\t\t<td align=\"center\" class=\"pagetitle\" colspan=\"5\" bgcolor=\"#103056\"><b>Add User</b></td>\r\r\n\t</tr>\r\r\n\t<tr>\r\r\n\t\t<td align=\"center\" class=\"pagetitle2\">Username:</td>\r\r\n\t\t<td align=\"center\" class=\"pagetitle2\">password:</td>\r\r\n\t\t<td align=\"center\" class=\"pagetitle2\">Confirm Password:</td>\r\r\n\t\t<td align=\"center\" class=\"pagetitle2\">&nbsp;</td>\r\r\n\t</tr>\r\r\n\t<tr>\r\r\n\t\t<td align=\"center\"><input type=\"text\" size=\"20\" name=\"UserName\" class=inputbox3 value=\"";
echo $_POST['UserName'];
echo "\"></td>\r\r\n\t\t<td align=\"center\"><input type=\"password\" size=\"20\" name=\"Pass\" class=inputbox3 value=\"";
echo $_POST['Pass'];
echo "\"></td>\r\r\n\t\t<td align=\"center\"><input type=\"password\" size=\"20\" name=\"Re\" class=inputbox3 value=\"";
echo $_POST['Re'];
echo "\"></td>\r\r\n\t\t<td align=\"center\"><input type=\"submit\" value=\"Create\" class=button1 onmouseover=\"this.style.backgroundColor = '#3E3E3E'\" onmouseout=\"this.style.backgroundColor = '#4B4B4B'\"></td>\r\r\n\t</tr>\r\r\n</form>\r\r\n</table>\r\r\n\r\r\n<br>\r\r\n\r\r\n";
if ( $message != "" )
{
    echo "\r\n<table cellpadding=0 cellspacing=0 width='600' border=1 align=center bordercolor='#7AA0B8' bordercolorlight=black bordercolordark=white>\r\r\n\t<tr><td align=center class=pagetitle bgcolor=#F9FBFB><font color=#186C1D><b>";
    echo $message;
    echo "</b></font></td></tr>\r\r\n</table>\r\r\n";
}
echo "\r\n\r\r\n<br>\r</td></tr><tr><td align=\"center\" class=\"pagetitle\" bgcolor=\"#000000\"><a href=\"http://munir.skilledsoft.com\"><font color=\"snow\">Recoded By by&nbsp;<b>Alienwithin</b>&nbsp; || Original Coder's(ICQ 92777755)</a></font></td></tr></table></body></html>\r\r\n";
?>
