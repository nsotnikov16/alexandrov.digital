<!DOCTYPE html>
<html lang="ru" class="<?= defined('BG_2') && BG_2 ? 'bg-2' : '' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="<?= $GLOBALS['SEO_DESCRIPTION'] ?>">
    <title><?= $GLOBALS['SEO_TITLE'] ?></title>
    <link rel="stylesheet" href="<?= ASSETS_PATH ?>css/style.css?<?=filemtime(FULL_ASSETS_PATH . 'css/style.css');?>">
    <link rel="shortcut icon" href="<?= ASSETS_PATH ?>images/favicon.ico" type="image/x-icon">
    <link rel="canonical" href="<?= getCanonical() ?>" >
</head>
<body>