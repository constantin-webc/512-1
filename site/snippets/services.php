<?php if($data->hideServices()->bool()):?>
<section id="<?= $data->uid()?>" class="list-items">
    <h2 class="h1">
        <span>
            <?= $data->headline() ?>
        </span>
    </h2>

    <?=  $data->headlineintro()->kt() ?>



    <ul class="list-items-container">
        <?php $items = $data->textcontent()->toStructure();?>
        <?php foreach ($items as $item): ?>
        <?php if ($item->onhome()->bool()):?>
        <li class="kt list-item <?php e($item->size()->bool(), 'list-item-large')?>">

            <h2 class="h3"><?= $item->titlesection()?></h2>

            <?= $item->onhomecontent()->kt() ?>

            <?php if($item->itemlink()->isNotEmpty()):?>
            <?php snippet('linkfield', ['item' => $item]) ?>
            <?php endif?>

        </li>
        <?php endif?>
        <?php endforeach ?>

    </ul>
</section>
<?php endif?>