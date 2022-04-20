<?php snippet('header') ?>

<article class="container" >
    <div class="row equipo ">
        <div class="col-lg-6 col-sm-12 my-5 d-flex flex-column justify-content-center align-items-center">
            <p class="text-primary-color"><?= $page->name() ?></p>
            <p class="text-secondary-color"><?= $page->name() ?></p>
            <p class="text-secondary-color"><?= $page->name() ?></p>
            <p class="text-secondary-color"><?= $page->name() ?></p>
            <p class="text-secondary-color"><?= $page->name() ?></p>
        </div>

        <div class="col-lg-6 col-sm-12 my-5 d-flex flex-column justify-content-center align-items-center">
            <p class="nuestra-title text-center"><?= $page->name() ?></p>
            <p class="text text-center"><?= $page->text() ?></p>
        </div>
    </div>
</article>

<?php snippet('footer') ?>