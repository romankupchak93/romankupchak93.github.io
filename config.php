<?
//Новини
$serverName     =   "localhost";
$dbname         =   "Sofi";
$dbuser         =   'sa';
$dbpass         =   'TisSystem@010';

$connectionInfo3     =   array( "UID"=>$dbuser, "PWD"=>$dbpass, "Database"=>$dbname, "CharacterSet"=>"UTF-8" );
$conn3               =   sqlsrv_connect( $serverName, $connectionInfo3);
//---------------------------------------------------------------------