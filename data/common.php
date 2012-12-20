<?php
include 'libs/config.php';
include 'libs/mysql.php';

$db = new MySQL($host, $dbuser, $dbpwd, $dbname);

$action = isset($_GET['action']) ? $_GET['action']: '';