<?php

date_default_timezone_set('Asia/Bangkok');
//MySQL Connect
define("DB_HOST","406268028.student.yru.ac.th");
define("DB_NAME","406268028_db");
define("DB_USERNAME","406268028_db");
define("DB_PASSWORD","1969800255818");
define("ISO","utf-8");

// ข้อมูลเว็บ

$mysqli = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
$mysqli->query("SET NAMES UTF8");

