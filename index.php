<?php


include_once './config.inc';
$url[1] = (empty($url[1])) ? null : $url[1];

if ($url[0] != 'index')
{
    if (file_exists('view' . '/' . $url[0] . '.php'))
    {
        $page = $url[0];
    }
    else
    {
        $page = 'error';
    }
}
else
{
    $page = 'inicio';
}


$sm->assign("nome",$page);
$sm->display("{$page}.html");
