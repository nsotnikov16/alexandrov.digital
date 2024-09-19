<?php
require_once __DIR__ . '/constants.php';
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/seo.php';

function getHeader()
{
    require_once $_SERVER['DOCUMENT_ROOT'] . TEMPLATE_PATH . 'header.php';
}

function getFooter()
{
    require_once $_SERVER['DOCUMENT_ROOT'] . TEMPLATE_PATH . 'footer.php';
}

function view(string $view, array $vars = [])
{
    foreach ($vars as $key => $value)
        $$key = $value;

    include $_SERVER['DOCUMENT_ROOT'] . VIEWS_PATH . $view . '.php';
}

function addHeadString(string $string)
{
    if (!isset($GLOBALS['additionalStringsHead'])) $GLOBALS['additionalStringsHead'] = [];
    $GLOBALS['additionalStringsHead'][] = $string;
}

function showHeadStrings() {
    if (!isset($GLOBALS['additionalStringsHead']) || empty($GLOBALS['additionalStringsHead'])) return;
    foreach ($GLOBALS['additionalStringsHead'] as $string) {
        echo $string . PHP_EOL;
    }
}
