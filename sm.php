<?php

require_once 'includes/smarty/libs/Smarty.class.php';

$sm = new Smarty;

$sm->template_dir = "view/";
$sm->compile_dir = "inc/smarty/templates_c";
