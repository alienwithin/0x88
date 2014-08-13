<?php
/************************/
/*                      */
/*Dezended By Martian   */
/*munir.skilledsoft.com */
/*                      */
/*                      */
/************************/

function encrypt( $content )
{
    $table = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_@";
    $xor = 165;
    $table = array_keys( count_chars( $table, 1 ) );
    $i_min = min( $table );
    $i_max = max( $table );
    $c = count( $table );
    for ( ; 0 < $c; $r = mt_rand( 0, $c-- ) )
    {
        array_splice( $table, $r, $c - $r, array_reverse( array_slice( $table, $r, $c - $r ) ) );
    }
    $len = strlen( $content );
    $word = $shift = 0;
    $i = 0;
    for ( ; $i < $len; ++$i )
    {
        $ch = $xor ^ ord( $content[$i] );
        $word |= $ch << $shift;
        $shift = ( $shift + 2 ) % 6;
        $enc .= chr( $table[$word & 63] );
        $word >>= 6;
        if ( $shift )
        {
            $enc .= chr( $table[$word] );
            $word >>= 6;
        }
    }
    if ( $shift )
    {
        $enc .= chr( $table[$word] );
    }
    $tbl = array_fill( $i_min, $i_max - $i_min + 1, 0 );
    while ( list( $k, $v ) = each( $table ) )
    {
        $tbl[$v] = $k;
    }
    $tbl = implode( ",", $tbl );
    $fi = ",p=0,s=0,w=0,t=Array(".$tbl.")";
    $f = "w|=(t[x.charCodeAt(p++)-".$i_min."])<<s;";
    $f .= "if(s){r+=String.fromCharCode(".$xor."^w&255);w>>=8;s-=2}else{s=6}";
    $r = "<script type=\"text/javascript\">";
    $r .= "function dc(x){";
    $r .= "var l=x.length,b=1024,i,j,r".$fi.";";
    $r .= "for(j=Math.ceil(l/b);j>0;j--){r='';for(i=Math.min(l,b);i>0;i--,l--){".$f."}document.write(r)}";
    $r .= "}dc(\"".$enc."\")";
    $r .= "</script>";
    return $r;
}

ob_start( "encrypt" );
echo " ";
?>
