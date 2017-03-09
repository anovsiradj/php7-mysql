<?php
header('Content-Type:text/plain');
require '../anovsiradj-mysql.php7';

mysql_connect('mysql_host', 'mysql_user', 'mysql_password') || die('Could not connect: ' . mysql_error() . "\n");
mysql_select_db('my_database') or die('Could not select database (' . mysql_error() . ")\n");

echo 'Connected successfully', "\n";

// Performing SQL query
$result = mysql_query('SELECT * FROM my_table') or die('Query failed (' . mysql_error() . ")\n");

// Printing results in HTML
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
mysql_free_result($result);

// Closing connection
mysql_close();
