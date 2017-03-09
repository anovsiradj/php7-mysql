<?php
/*
mysql_connect ([
	string $server = ini_get("mysql.default_host") [
		, string $username = ini_get("mysql.default_user") [
			, string $password = ini_get("mysql.default_password") [
				, bool $new_link = false [
					, int $client_flags = 0 
				]
			]
		]
	]
]) 
*/
function mysql_connect($server, $username, $password, $new_link = false, $client_flags = 0)
{
	return Anovsiradj_MySQL::init()->_connect($server, $username, $password);
}
