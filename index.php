<?php

require_once __DIR__ . "/models/News.php";

$i = new News();
$items = $i->new_SelectItems();

require_once __DIR__ . '/views/index.php';