<?php
mb_language("uni");
mb_internal_encoding("utf-8");
mb_http_input("auto");
mb_http_output("utf-8");

include "./lib/db.php";

$db = new myDB;

include_once "./index.inc";

