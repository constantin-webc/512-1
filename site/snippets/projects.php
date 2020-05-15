<div id="<?= $data->uid()?>" class="animated-items-container">
    <?php foreach($data->children() as $project):?>
    <?php snippet('projects-list', ['project' => $project]) ?>
    <?php endforeach?>
</div>

<section class="projects-footer">
    <h2 class="h2">
        <span>
            <?= $data->pagefootergridtitle() ?>
        </span>
    </h2>

    <?= $data->pagefootergrid()->kt() ?>

    <?php if($data->allProjectsLink()->isNotEmpty() || $data->allProjectsLinkTitle()->isNotEmpty()):?>
        <br />

<a class="link-light-big" href="<?= $data->allProjectsLink()->url()?>">
<?= $data->allProjectsLinkTitle() ?>
</a>
    <?php endif?>

   
</section> 