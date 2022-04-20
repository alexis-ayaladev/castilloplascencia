<?php snippet('header') ?>

<section class="container">
    <div class="row my-4">
        <div class="col-md-6 col-sm-12">
            <p class="nuestra-title"><?= $page->title() ?></p>

            <p class="text"><?= $page->text() ?></p>
            <p class="text"><?= $page->text2() ?></p>
            <p class="text"><?= $page->text3() ?></p>
            <p class="text"><?= $page->text4() ?></p>
        </div>
        <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
            <img src="<?= $site->url(); ?>/assets/icons/spain.svg" alt="home img">
        </div>
    </div>
</section>

<?php snippet('footer') ?>