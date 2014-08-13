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
/*function check_input($value)
{
// Stripslashes
if (get_magic_quotes_gpc())
  {
  $value = stripslashes($value);
  }
// Quote if not a number
if (!is_numeric($value))
  {
  $value = "'" . mysql_real_escape_string($value) . "'";
  }
return $value;
}*/
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
echo "<html>\r\n<head>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\">\r\n<title>Multi Exploits Pack v2.5</title>\r\n<style>\r\n";
include( "images/style.css" );
echo "</style>\r\n</head>\r\n<body bgcolor=\"#7AA0B8\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">\r\n<table cellpadding=0 cellspacing=0 width='700' border=1 align=center bordercolor=\"#ECF0F3\" bordercolorlight=black bordercolordark=white>\r\n<tr><td align=\"center\" class=\"pagetitle\" bgcolor=\"#596771\"><b>Traffic tracking script Multi Exploits Pack v2.5</b></td>\r\n</tr><tr><td align=\"center\" class=\"pagetitle\" bgcolor=\"#000000\"><b>Administrative statistics on downloads with traffic</b></td>\r\n</tr><tr><td align=\"left\" class=\"hover\" bgcolor=\"#ffffff\">\r\n<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr><td align=\"left\">&nbsp;&nbsp;<font color=\"black\">Status:</font> <font color=black><b>&nbsp;&nbsp;[";
echo $_SESSION['Login'];
echo "]</b></font></td>\r\n<td align=\"right\">\r\n\r\n\t\t\t\t\t\t| <a href=\"index.php\"><b>Statistics</b></a>\r\n\t\t\t\t\t\t| <a href=\"lang.php\"><b>languages</b></a>\r\n\t\t\t\t\t\t| <a href=\"help.php\"><b>Help</b></a>\r\n\t\t\t\t\t\t| <a href=\"change_pass.php\"><b>Change Password</b></a>\r\n\t\t\t\t\t\t| <a href=\"user_manager.php\"><b>Add User</b></a>\r\n\t\t\t\t\t\t| <a href=\"clear_db.php\"><b>Clear DB</b></a>\r\n\t\t\t\t\t\t| <a href=\"logout.php\"><b>Logout</b></a></font>\r\n\t\t\t\t\t\t/&nbsp;&nbsp;\r\n</td></tr></table></td></tr><tr><td valign=\"top\">";
?>
