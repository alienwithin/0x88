<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

$browser = array( "Wget", "EmailSiphon", "WebZIP", "MSProxy/2.0", "EmailWolf", "webbandit", "MS FrontPage" );
$punish = 0;
while ( list( $key, $val ) = each( $browser ) )
{
    if ( strstr( $HTTP_USER_AGENT, $val ) )
    {
        $punish = 1;
    }
}
if ( $punish )
{
    echo "FUCK OFF!!!!!!!!!!!!!!";
}
?>
