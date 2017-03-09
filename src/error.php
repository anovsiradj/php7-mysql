<?php
// string mysql_error ([ resource $link_identifier = NULL ] ) 
// Returns the error text from the last MySQL function, or '' (empty string) if no error occurred.
function mysql_error($link_identifier = null)
{
	return Anovsiradj_MySQL::init()->_error();
}