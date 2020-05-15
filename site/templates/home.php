<?php snippet('header') ?>

<main>

    <?php if(!$page->hideIntro()->bool()): ?>
    <section class="intro">
        <h2><?= $page->introTitle()?></h2>
        <?= $page->introText()->kt()?>
    </section>
    <?php endif?>

    <?php foreach($pages->listed() as $section):?>
    <?php snippet($section->uid(), ['data' => $section]); ?>
    <?php endforeach?>

</main>

<?php snippet('footer') ?>