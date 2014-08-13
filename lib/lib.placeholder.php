<?php
/************************/
/* */
/*Dezended By Martian */
/*munir.skilledsoft.com */
/* */
/* */
/************************/
error_reporting(0);
function check_input($value)
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
}
function sql_compile_placeholder( $tmpl )
{
$compiled = array( );
$p = 0;
$i = 0;
$has_named = false;
while ( false !== ( $start = $p = strpos( $tmpl, "?", $p ) ) )
{
switch ( $c = substr( $tmpl, ++$p, 1 ) )
{
case "%" :
case "@" :
case "#" :
$type = $c;
++$p;
break;
default :
$type = "";
}
$len = strcspn( substr( $tmpl, $p ), " \t\r\n,;()[]/" );
if ( $len )
{
$key = substr( $tmpl, $p, $len );
$has_named = true;
$p += $len;
}
else
{
$key = $i++;
}
$compiled[] = array( $key, $type, $start, $p - $start );
}
return array( $compiled, $tmpl, $has_named );
}
function sql_placeholder( )
{
$args = func_get_args( );
$tmpl = array_shift( $args );
if ( is_array( $tmpl ) )
{
$compiled = $tmpl;
}
else
{
$compiled = sql_compile_placeholder( $tmpl );
}
$has_named = $compiled[2];
$tmpl = $compiled[1];
$compiled = $compiled[0];
if ( $has_named )
{
$args = @$args[0];
}
$p = 0;
$out = "";
foreach ( $compiled as $e )
{
$length = $e[3];
$start = $e[2];
$type = $e[1];
$key = $e[0];
$out .= substr( $tmpl, $p, $start - $p );
$p = $start + $length;
$repl = "";
if ( $type === "#" )
{
	while ( NULL === ( $repl = @constant( $key ) ) )
	{
	$repl = "UNKNOWN_CONSTANT_".$key;
	}
}
else if ( isset( $args[$key] ) )
{
$repl = "UNKNOWN_PLACEHOLDER_".$key;
}
else
{
$a = $args[$key];
if ( $type === "" )
{
if ( is_array( $a ) )
{
$repl = "NOT_A_SCALAR_PLACEHOLDER_".$key;
break;
}
else
{
$repl = "'".addslashes( $a )."'";
}
}
else
{
if ( is_array( $a ) )
{
$repl = "NOT_AN_ARRAY_PLACEHOLDER_".$key;
}
else
{
if ( $type === "@" )
{
foreach ( $a as $v )
{
$repl .= ( $repl === "" ? "" : "," )."'".addslashes( $v )."'";
}
}
else if ( $type === "%" )
{
foreach ( $a as $k => $v )
{
if ( is_string( $k ) )
{
$k = "NOT_A_STRING_KEY_".$k."_FOR_PLACEHOLDER_{$key}";
}
else
{
$k = preg_replace( "/[^a-zA-Z0-9_-]/", "_", $k );
}
$repl .= ( $repl === "" ? "" : ", " ).$k."='".@addslashes( $v )."'";
}
}
if ( false )
{
}
}
}
}
}
$out .= $repl;
}
$out .= substr( $tmpl, $p );
return $out;
//}
?>