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
echo "</style>\r\n</head>\r\n<body bgcolor=\"#7AA0B8\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">\r\n<table cellpadding=0 cellspacing=0 width='700' border=1 align=center bordercolor=\"#ECF0F3\" bordercolorlight=black bordercolordark=white>\r\n<tr><td align=\"center\" class=\"pagetitle\" bgcolor=\"#596771\"><b>Скрипт для учета трафика Multi Exploits Pack v2.5</b></td>\r\n</tr><tr><td align=\"center\" class=\"pagetitle\" bgcolor=\"#000000\"><b>Администратирование статистики по загрузкам с трафика</b></td>\r\n</tr><tr><td align=\"left\" class=\"hover\" bgcolor=\"#ffffff\">\r\n<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr><td align=\"left\">&nbsp;&nbsp;<font color=\"black\">Статус:</font> <font color=black><b>&nbsp;&nbsp;[";
echo $_SESSION['Login'];
echo "]</b></font></td>\r\n<td align=\"right\">\r\n\r\n\t\t\t\t\t\t| <a href=\"index.php\"><b>Статистика</b></a>\r\n\t\t\t\t\t\t| <a href=\"lang.php\"><b>Языки</b></a>\r\n\t\t\t\t\t\t| <a href=\"help.php\"><b>Помощь</b></a>\r\n\t\t\t\t\t\t| <a href=\"change_pass.php\"><b>Изменить пароль</b></a>\r\n\t\t\t\t\t\t| <a href=\"user_manager.php\"><b>Добавить пользователя</b></a>\r\n\t\t\t\t\t\t| <a href=\"clear_db.php\"><b>Очистить ДБ</b></a>\r\n\t\t\t\t\t\t| <a href=\"logout.php\"><b>Выход</b></a></font>\r\n\t\t\t\t\t\t/&nbsp;&nbsp;\r\n</td></tr></table></td></tr><tr><td valign=\"top\">";
?>
