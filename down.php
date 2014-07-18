<?php
/************************/
/*                      */
/*Dezended By Martian   */
/*munir.skilledsoft.com */
/*                      */
/*                      */
/************************/

include( "inc.config.php" );
if ( !mysql_connect( $db_host, $db_user, $db_pass ) )
{
    exit( "Couldn't connect to db!" );
}
if ( !mysql_select_db( $db_name ) )
{
    exit( "DB \"".$db_name."\" not found!" );
}
$ip = getenv( "REMOTE_ADDR" );
$sql = "UPDATE tp_stats SET is_downloaded = 1 WHERE ip = '".$ip."'";
mysql_query( $sql );
?>
