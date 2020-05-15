<article id="<?= $project->title()->slug()?>" class="article-style article-animated">
    <div class="article-animated-content">

        <header>
            <h2 class="h5<?php e($project->articlelink()->isNotEmpty(), ' anchor-item')?>">
            <a title="Visit  <?= $project->headline()->or($project->title()) ?>" href="<?= $project->articlelink()->url()?>">
            <?= $project->headline()->or($project->title()) ?> 
            </a>
        </h2>
        </header>

        <?php if($project->headlineintro()->isNotEmpty()):?>
        <?= $project->headlineintro()->kt()?>
        <?php endif?>

        <?php if($project->articlelink()->isNotEmpty()):?>
            <a class="link-dark" title="Visit  <?= $project->headline()->or($project->title()) ?>" href="<?= $project->articlelink()->url()?>">
            <?= $project->headline()->or($project->title()) ?>
        </a>
        <?php endif?>
        <button title="Close window" aria-label="Close window" class="closeClone"></button>

    </div>

    <figure>
        <?php if($imgfront = $project->projectIllu()->toFile()):?>
        <img loading="lazy" class="thumb face" src="<?= $imgfront->crop(612,381)->url()?>" width="612" height="381" alt="<?= $project->title()?> presentation">
        <?php endif?>

        <?php if($imgback = $project->projectIlluBack()->toFile()):?>

        <?php if($imgback->type() == 'image'): ?>
        <?php if(!$imgback->extension() == 'gif'): ?>
        <img class="imgFull" src="<?= $imgback->crop(650,433)->url()?>" width="650" height="433" alt="<?= $project->title()?>
        presentation details">
        <?php else:?>
        <img class="imgFull" src="<?= $imgback->url()?>" width="<?= $imgback->width()?>" height="<?= $imgback->height()?>" alt="<?= $project->title()?> presentation details">
        <?php endif?>
        <?php endif?>

        <?php if($imgback->type() == 'video'): ?>
        <div class="imgFull video">            
            <video class="html5" width="660" height="430" preload="none" controls poster="<?= $imgfront->crop(650,433)->url()?>">
                <source src="<?= $imgback->url()?>" type="video/<?= $imgback->extension()?>">
                <p>Votre navigateur ne prend pas en charge les vidéos HTML5.
                    Voici <a href="<?= $imgback->url()?>">un lien pour télécharger la vidéo</a>.</p>
            </video>

        </div>
        <?php endif?>

        <?php else:?>
        <img class="imgFull" src="<?= $imgfront->crop(650,433)->url()?>" width="650" height="433" alt="<?= $project->title()?> presentation details">
        <?php endif?>

        <figcaption>
            <h3>
                <?php if($project->articlelink()->isNotEmpty()):?>
                <a class="anchor-item" title="Read article" href="<?= $project->articlelink()->url()?>"><?= $project->title()?></a>
                <?php else:?>

                <span class=""><?= $project->title()?></span>
                <?php endif?>
            </h3>
        </figcaption>
    </figure>

    <button title="Open window" aria-label="Open window" class="btnOpenClone"></button>
    
</article>