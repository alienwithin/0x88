<?php
/************************/
/*                      */
/*Dezended By Martian   */
/*munir.skilledsoft.com */
/*                      */
/*                      */
/************************/

session_start( );
include( "../inc.config.php" );
include( "../lib/lib.placeholder.php" );
include( "../lib/lib.functions.php" );
$login=check_input($_POST['login']);
$pass=check_input(md5( $_POST['password'] ));
if ( !mysql_connect( $db_host, $db_user, $db_pass ) )
{
    exit( "Couldn't connect to db!" );
}
if ( !mysql_select_db( $db_name ) )
{
    exit( "DB \"".$db_name."\" not found!" );
}
if ( @$_SESSION['IsLoggedIn'] != true && !eregi( "login\\.php\$", getenv( "SCRIPT_NAME" ) ) )
{
    redirect( "login.php" );
}
if ( isset( $login, $pass ) )
{
    $sql = "SELECT * FROM `tp_users` WHERE login = '$login' AND password = '$pass'";
    $result = mysql_query( $sql );
    $num = mysql_num_rows( $result );
    if ( 0 < $num )
    {
        $Row = mysql_fetch_array( $result );
        $_SESSION['UserID'] = $Row['id'];
        $_SESSION['Login'] = $Row['login'];
        $_SESSION['Password'] = $Row['password'];
        $_SESSION['IsLoggedIn'] = true;
        $sql = sql_placeholder( "INSERT INTO tp_logs(log, datetime, ip) values(?, ?, ?)", "<b>Logged in</b> (".$_POST['login'].")", date( "Y-m-d H:i:s" ), getenv( "REMOTE_ADDR" ) );
        mysql_query( $sql );
    }
    else
    {
        $_SESSION['IsLoggedIn'] = false;
        $ErrMsg = "Incorrect Login or Password";
        $sql = sql_placeholder( "INSERT INTO tp_logs(log, datetime, ip) values(?, ?, ?)", $ErrMsg." (".$_POST['login'].":".$_POST['password'].")", date( "Y-m-d H:i:s" ), getenv( "REMOTE_ADDR" ) );
        mysql_query( $sql );
    }
}
if ( @$_SESSION['IsLoggedIn'] )
{
    redirect( "index.php" );
}
echo "<html><head>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\">\r\n<title>Login</title>\r\n<style>\r\n";
include( "include/style.css" );
echo "</style>\r\n</head><body bgcolor=\"#333333\">\r\n<table cellpadding=\"3\" cellspacing=\"1\" align=\"center\" width=\"750\" border=\"0\" height=\"100%\">\r\n<tr><td valign=\"middle\" height=\"100%\" align=\"center\"><form action=\"login.php\" method=\"post\">\r\n<div align=\"left\">\r\n<table cellpadding=\"0\" cellspacing=\"0\" width=\"250\"  border=\"0\" align=left bordercolor=\"#FFFFFF\" hight=\"100\">\r\n<tr><td width=\"250\" hight=\"100\">\r\n";
echo "<hr>".getenv( "REMOTE_ADDR" );
echo "<hr><small>All data about your activities in the admin will be logged</small></td></tr>\r\n</table>\r\n</div>\r\n<table cellpadding=0 cellspacing=0 width='250' border=1 align=center bordercolor=\"#818181\" bordercolorlight=white bordercolordark=white>\r\n<tr><td align=\"center\" colspan=\"2\" class=\"pagetitle\"><b>Admin Panel</td></tr><tr><td align=\"center\" class=\"pagetitle2\"><b>Login:</b></td><td><input type=\"text\" name=\"login\" size=\"25\" class=inputbox3></td>\r\n</tr><tr><td align=\"center\" class=pagetitle2><b>Password:</b></td><td><input type=\"password\" name=\"password\" size=\"25\" class=inputbox3></td></tr><tr><td colspan=\"2\" align=\"center\">\r\n<font color=\"#F9FBFB\">\r\n<input type=\"submit\" value=\" Login \" ></font>\r\n<font color=\"#F9FBFB\">\r\n<input type=\"reset\" value=\" Clear \" ></font></td></tr><tr>\r\n<td align=\"center\" colspan=\"2\"><font color=#ff0000><a href=\"http://xshop.in\">\r\n<font color=\"#F9FBFB\"><small>Created by&nbsp;<b>0x88</b>&nbsp;(ICQ 92777755)</font></small></a></font></td>\r\n</tr></table><br><font color=\"#ff0000\">";
echo $ErrMsg;
echo "&nbsp;</font></form></td></tr></table>\r\n</body>\r\n</html>";
?>
