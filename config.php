<?php
###########################################################
/*
Team Page Script
Copyright (C) StivaSoft ltd. All rights Reserved.


This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see http://www.gnu.org/licenses/gpl-3.0.html.

For further information visit:
http://www.phpjabbers.com/
info@phpjabbers.com

Version:  2.0
*/
###########################################################

/* Define MySQL connection details and database table name */
$SETTINGS["mysql_user"]='bc46adb44c3193';
$SETTINGS["mysql_pass"]='2684cfa0';
$SETTINGS["hostname"]='us-cdbr-east-05.cleardb.net';
$SETTINGS["mysql_database"]='heroku_260c479d1ccef26';
$SETTINGS["data_table"]='member';

/* Connect to MySQL */

$mysqli = new mysqli($SETTINGS["hostname"], $SETTINGS["mysql_user"], $SETTINGS["mysql_pass"],$SETTINGS["mysql_database"]);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
