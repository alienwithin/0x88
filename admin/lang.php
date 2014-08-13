<?php
/************************/
/*                      */
/*Dezended By Martian   */
/*munir.skilledsoft.com */
/*                      */
/*                      */
/************************/

include( "include/inc.header.php" );
$sql = "select * from tp_langs";
$r = mysql_query( $sql );
while ( $Row = mysql_fetch_array( $r ) )
{
    $Languages[$Row['lang_iso2code']] = $Row['lang_name'];
    $LangCountries[$Row['lang_iso2code']] = $Row['country_code'];
    $Countries[$Row['country_code']] = $Row['country_name'];
}
$total_columns = 3;
$sql = "select accept_lang as culture, count(*) as total from tp_stats group by accept_lang order by accept_lang";
$r = mysql_query( $sql );
while ( $Row = mysql_fetch_array( $r ) )
{
    $LangStat[] = $Row;
}
$total_lang = sizeof( $LangStat );
$rows_per_column = ceil( $total_lang / $total_columns );
echo "\r\n\r\r\n<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" border=\"1\" align=\"left\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\r\n\t<tr>\r\r\n\t\t";
$i = 0;
for ( ; $i < $total_columns; ++$i )
{
    echo "\r\n\t\t<td valign=\"top\" width=\"";
    echo floor( 100 / $total_columns );
    echo "%\">\r\r\n\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" width=\"200\" border=\"1\" align=\"center\" bordercolor=\"#7AA0B8\" bordercolorlight=\"black\" bordercolordark=\"white\">\r\r\n\t\t\t\t<tr>\r\r\n\t\t\t\t\t<td align=\"center\" class=\"pagetitle\" bgcolor=\"#103056\" colspan=\"3\"><b>Statistics on languages</b></td>\r\r\n\t\t\t\t</tr>\r\r\n\t\t\t\t";
    $j = $rows_per_column * $i;
    for ( ; $j < $rows_per_column * ( $i + 1 ) && isset( $LangStat[$j] ); ++$j )
    {
        echo "\r\n\t\t\t\t<tr>\r\r\n\t\t\t\t\t<td align=\"left\" class=\"pagetitle\" nowrap>&nbsp;&nbsp;<b>";
        echo culturetolangname( $LangStat[$j]['culture'], $Languages );
        echo " [";
        echo $LangStat[$j]['culture'];
        echo "]</b>&nbsp;</td>\r\r\n\t\t\t\t\t<td align=\"center\"><img src=\"flags/";
        echo culturetocountrycode( $LangStat[$j]['culture'], $LangCountries );
        echo ".gif\" border=\"0\" /></td>\r\r\n\t\t\t\t\t<td align=\"center\" class=\"pagetitle2\" bgcolor=\"#7AA0B8\"><input type=\"text\" size=\"5\" class=\"inputbox2\" disabled=\"disabled\" value=\"";
        echo $LangStat[$j]['total'];
        echo "\"></td>\r\r\n\t\t\t\t</tr>\r\r\n\t\t\t\t";
    }
    echo "\r\n\t\t\t</table>\r\r\n\t\t</td>\r\r\n\t\t";
}
echo "\r\n\t</tr>\r\r\n</table>\r</td></tr><tr><td align=\"center\" class=\"pagetitle\" bgcolor=\"#000000\"><a href=\"http://munir.skilledsoft.com\"><font color=\"snow\">Recoded By by&nbsp;<b>Alienwithin</b>&nbsp; || Original Coder's(ICQ 92777755)</a></font></td></tr></table></body></html>\r\r\n";
?>
