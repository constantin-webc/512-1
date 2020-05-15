<?php if($data->blogonhome()->bool()):?>
<section id="<?= $data->uid()?>" class="blog-items <?php e(!$data->verticalView()->bool(), 'blog-items-home')?>">
    <div class="blog-text <?php e($data->verticalView()->bool(), 'blog-text-blog')?>">
        <h2 class="h1">
            <span>
                <?= $data->headline() ?>
            </span>
        </h2>

        <?= $data->headlineintro()->kt() ?>
    </div>

    <div id="blog-items-container" class="blog-items-container <?php e($data->verticalView()->bool(), 'blog-items-container-blog')?>">
        <?php $articles = $data->children()->listed()->sortBy('date', 'desc');?>
        <?php if($articles->count()):?>
        <?php foreach($articles as $article):?>
        <?php snippet('articles-list', ['article' => $article]) ?>
        <?php endforeach?>
        <?php else:?>
        <p>No article yet :( </p>
        <?php endif?>
    </div>
</section>
<?php endif?>