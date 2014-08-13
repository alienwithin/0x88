<?php
/************************/
/* */
/*Dezended By Martian */
/*munir.skilledsoft.com */
/* */
/* */
/************************/
error_reporting(0);
function redirect( $url )
{
if ( defined( "SID" ) && constant( "SID" ) )
{
if ( $QUERY_STRING == "" )
{
header( "Location: ".$url."?".SID );
exit( );
}
header( "Location: ".$url."&".SID );
exit( );
}
header( "Location: ".$url );
exit( );
}
function culturetolangcode( $culture )
{
ereg( "^([a-z]{2})(-([a-z]{2}))?", strtolower( $culture ), $match );
$lang_code = $match[1];
$country_code = $match[3];
return $lang_code;
}
function culturetocountrycode( $culture, $LangCountries )
{
ereg( "^([a-z]{2})(-([a-z]{2}))?", strtolower( $culture ), $match );
$lang_code = $match[1];
$country_code = $match[3];
if ( $country_code != "" )
{
return $country_code;
}
return $LangCountries[$lang_code];
}
function culturetolangname( $culture, $Languages )
{
$lang_code = culturetolangcode( $culture );
return $Languages[$lang_code];
}
function culturetocountryname( $culture, $LangCountries, $Countries )
{
$country_code = culturetocountrycode( $culture, $LangCountries );
return $Countries[$country_code];
}
function genqs( $baseParam )
{
$uri = "";
foreach ( $baseParam as $k => $v )
{
$uri .= $k."={$v}&";
}
$uri = substr( $uri, 0, strlen( $uri ) - 1 );
return $uri;
}
function baseparam( )
{
$_query_names = split( "[=&]", getenv( "QUERY_STRING" ) );
$i = 0;
for ( ; $i < count( $_query_names ) - 1; $i += 2 )
{
$baseParam[$_query_names[$i]] = $_query_names[$i + 1];
}
if ( isset( $baseParam ) && 0 < sizeof( $baseParam ) )
{
return $baseParam;
}
return array( );
}
function pages( $Total, $QtyPerPage, $startpos, $baseScript )
{
$QtyPages = ceil( $Total / $QtyPerPage );
$SCNT_DEFAULT_PAGE_COUNT = 11;
$LEFT_ARROW_IMAGE_GRY = "<img src=\"images/arrow/iconGryArwR.gif\" width=\"8\" height=\"11\" alt=\"\" border=\"0\" vspace=\"0\" hspace=\"5\" align=\"absmiddle\">";
$RIGHT_ARROW_IMAGE_GRY = "<img src=\"images/arrow/iconGryArw.gif\" width=\"8\" height=\"11\" alt=\"\" border=\"0\" vspace=\"0\" hspace=\"5\" align=\"absmiddle\">";
$FIRST_ARROW_IMAGE_GRY = "<img src=\"images/arrow/iconGryArwDblR.gif\" width=\"12\" height=\"11\" alt=\"\" border=\"0\" vspace=\"0\" hspace=\"5\" align=\"absmiddle\">";
$LAST_ARROW_IMAGE_GRY = "<img src=\"images/arrow/iconGryArwDbl.gif\" width=\"12\" height=\"11\" alt=\"\" border=\"0\" vspace=\"0\" hspace=\"5\" align=\"absmiddle\">";
$LEFT_ARROW_IMAGE_BLU = "<img src=\"images/arrow/iconBluArwR.gif\" width=\"8\" height=\"11\" alt=\"\" border=\"0\" vspace=\"0\" hspace=\"5\" align=\"absmiddle\">";
$RIGHT_ARROW_IMAGE_BLU = "<img src=\"images/arrow/iconBluArw.gif\" width=\"8\" height=\"11\" alt=\"\" border=\"0\" vspace=\"0\" hspace=\"5\" align=\"absmiddle\">";
$FIRST_ARROW_IMAGE_BLU = "<img src=\"images/arrow/iconBluArwDblR.gif\" width=\"12\" height=\"11\" alt=\"\" border=\"0\" vspace=\"0\" hspace=\"5\" align=\"absmiddle\">";
$LAST_ARROW_IMAGE_BLU = "<img src=\"images/arrow/iconBluArwDbl.gif\" width=\"12\" height=\"11\" alt=\"\" border=\"0\" vspace=\"0\" hspace=\"5\" align=\"absmiddle\">";
$baseParam = baseparam( );
$baseParam['qppp'] = $QtyPerPage;
$pages = "";
$CurPage = $startpos / $QtyPerPage + 1;
if ( $QtyPages < $CurPage )
{
$CurPage = $QtyPages;
}
if ( $CurPage < 1 )
{
$CurPage = 1;
}
if ( 1 < $CurPage )
{
$baseParam['startpos'] = ( $CurPage - 2 ) * $QtyPerPage;
$pages .= "<a href=\"".$baseScript."?".genqs( $baseParam )."\">".$LEFT_ARROW_IMAGE_BLU."Previous Page</a>";
}
else
{
$pages .= $LEFT_ARROW_IMAGE_GRY."Previous Page";
}
$pages .= "&nbsp;&nbsp;&nbsp;&nbsp;";
if ( $SCNT_DEFAULT_PAGE_COUNT < $QtyPages )
{
if ( 1 < $CurPage )
{
$baseParam['startpos'] = 0;
$pages .= "<a href=\"".$baseScript."?".genqs( $baseParam )."\">".$FIRST_ARROW_IMAGE_BLU."First</a>";
}
else
{
$pages .= $FIRST_ARROW_IMAGE_GRY."First";
}
}
$pages .= "&nbsp;&nbsp;&nbsp;&nbsp;";
$pageStart = max( $CurPage - floor( $SCNT_DEFAULT_PAGE_COUNT / 2 ), 1 );
$pageStart = min( $QtyPages - $SCNT_DEFAULT_PAGE_COUNT + 1, $pageStart );
$pageStart = max( 1, $pageStart );
$pageEnd = min( $CurPage + floor( $SCNT_DEFAULT_PAGE_COUNT / 2 ), $QtyPages );
$pageEnd = max( $SCNT_DEFAULT_PAGE_COUNT, $pageEnd );
$pageEnd = min( $QtyPages, $pageEnd );
$j = $pageStart;
for ( ; $j <= $pageEnd; ++$j )
{
if ( ( $j - 1 ) * $QtyPerPage == $startpos )
{
$pages .= " <b>".$j."</b> ";
}
else
{
$baseParam['startpos'] = ( $j - 1 ) * $QtyPerPage;
$pages .= " <a href=\"".$baseScript."?".genqs( $baseParam )."\">".$j."</a> ";
}
}
$pages .= "&nbsp;&nbsp;&nbsp;&nbsp;";
if ( $SCNT_DEFAULT_PAGE_COUNT < $QtyPages )
{
if ( $CurPage < $QtyPages )
{
$baseParam['startpos'] = ( $QtyPages - 1 ) * $QtyPerPage;
$pages .= "<a href=\"".$baseScript."?".genqs( $baseParam )."\">Last".$LAST_ARROW_IMAGE_BLU."</a>";
}
else
{
$pages .= "Last".$LAST_ARROW_IMAGE_GRY;
}
}
$pages .= "&nbsp;&nbsp;&nbsp;&nbsp;";
if ( $CurPage < $QtyPages )
{
$baseParam['startpos'] = $CurPage * $QtyPerPage;
$pages .= "<a href=\"".$baseScript."?".genqs( $baseParam )."\">Next Page".$RIGHT_ARROW_IMAGE_BLU."</a>";
return $pages;
}
$pages .= "Next Page".$RIGHT_ARROW_IMAGE_GRY;
return $pages;
}
?>