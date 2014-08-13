<?php
/************************/
/*                      */
/*Dezended By Martian   */
/*munir.skilledsoft.com */
/*                      */
/*                      */
/************************/

include( "include/inc.header.php" );
$total_columns = 2;
if ( isset( $_GET['startpos'] ) && is_numeric( $_GET['startpos'] ) && 0 < $_GET['startpos'] )
{
    $startpos = $_GET['startpos'];
}
else
{
    $startpos = 0;
}
if ( isset( $_GET['qppp'] ) && is_numeric( $_GET['qppp'] ) )
{
    $qppp = $_GET['qppp'];
}
else
{
    $qppp = 150;
}
$cond = "";
if ( @( $_GET['filter'] == "24h" ) )
{
    $cond = " AND datetime > '".date( "Y-m-d H:i:s", time( ) - 86400 )."' ";
}
$sql = "SELECT count(*) as total FROM tp_stats WHERE is_downloaded = 1 ".$cond;
$r = mysql_query( $sql );
$Row = mysql_fetch_array( $r );
$total_records = $Row['total'];
$sql = "SELECT * FROM tp_stats WHERE is_downloaded = 1 ".$cond." LIMIT ".$startpos.", ".$qppp."";
$r = mysql_query( $sql );
$Stats = array( );
while ( $Row = mysql_fetch_array( $r ) )
{
    $Stats[] = $Row;
}
$selected_stats = sizeof( $Stats );
$rows_per_column = ceil( $selected_stats / $total_columns );
echo "\r\n\r\r\n<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" border=\"1\" align=\"left\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\r\n\t<tr>\r\r\n\t\t";
$i = 0;
for ( ; $i < $total_columns; ++$i )
{
    echo "\r\n\t\t<td valign=\"top\" width=\"";
    echo floor( 100 / $total_columns );
    echo "%\">\r\r\n\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" width=\"200\" border=\"1\" align=\"center\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\r\n\t\t\t\t<tr>\r\r\n\t\t\t\t\t<td align=\"center\" class=\"pagetitle\" bgcolor=\"#103056\"><b>infected IP</b></td>\r\r\n\t\t\t\t</tr>\r\r\n\t\t\t\t";
    $j = $rows_per_column * $i;
    for ( ; $j < $rows_per_column * ( $i + 1 ) && isset( $Stats[$j] ); ++$j )
    {
        echo "\r\n\t\t\t\t<tr>\r\r\n\t\t\t\t\t<td align=\"left\" class=\"pagetitle\" nowrap>&nbsp;&nbsp;<b>";
        echo $Stats[$j]['ip'];
        echo "</b>&nbsp;</td>\r\r\n\t\t\t\t</tr>\r\r\n\t\t\t\t";
    }
    echo "\r\n\t\t\t</table>\r\r\n\t\t</td>\r\r\n\t\t";
}
echo "\r\n\t</tr>\r\r\n\t<tr>\r\r\n\t\t<td align=\"center\" colspan=\"";
echo $total_columns;
echo "\">";
echo pages( $total_records, $qppp, $startpos, "ip_stat.php" );
echo "</td>\r\r\n\t</tr>\r\r\n</table>\r\n</td></tr><tr><td align=\"center\" class=\"pagetitle\" bgcolor=\"#000000\"><a href=\"http://munir.skilledsoft.com\"><font color=\"snow\">Recoded By by&nbsp;<b>Alienwithin</b>&nbsp; || Original Coder's(ICQ 92777755)</a></font></td></tr></table></body></html>\r\n";
?>
