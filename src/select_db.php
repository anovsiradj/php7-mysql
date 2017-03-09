<?php
/*
bool mysql_select_db (string $database_name [
	, resource $link_identifier = NULL 
])
*/
// Returns TRUE on success or FALSE on failure.
function mysql_select_db($database_name, $link_identifier = null)
{
	return Anovsiradj_MySQL::init()->_select_db($database_name);
}