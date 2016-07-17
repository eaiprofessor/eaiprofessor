<?php

require_once 'sm.php';

define('VIEWFILES', 'view/files');


$getUrl = strip_tags(trim(filter_input(INPUT_GET, "url", FILTER_DEFAULT)));

$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$url = explode('/', $setUrl);

define('URL', '');
