<!DOCTYPE html>
<html lang="en">

<head>
    <?php snippet('meta') ?>
    <?php snippet('css') ?>

</head>

<body>

<header id="homeIntro" class="header <?php e($page->isHomePage(), 'home-header')?> <?php e($page->posterfilter()->bool(), ' home-header-white')?>">
        <?php snippet('menu') ?>
        <h1 class="home-h1 <?php e($page->colortitle()->bool(), ' home-h1-black')?>"><span><?= $page->bigtitre()?></span></h1>
    </header>