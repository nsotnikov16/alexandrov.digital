<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
?>
<?php getHeader(); ?>
<?php view('hero/index') ?>
<?php view('presentation') ?>
<?php view('services/index') ?>
<?php view('cases') ?>
<?php view('reviews') ?>
<?php view('about') ?>
<?php view('lead/main') ?>
<?php getFooter();
