<?php

require_once __DIR__ . "/models/blog.php";

$items = blog_InsertItems();

require_once __DIR__ . '/views/index.php';