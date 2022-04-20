
<?php snippet('header') ?>
<article class="container d-flex align-items-center my-5">
    <div class="row ">
        <div class="col-lg-4 col-sm-12">
            <div class="left-text">
                <p class="nuestra-title"><?= $page->title()->html() ?></p>
                <p class="text-color"><?= $page->text() ?></p>
                <p class="text-color"><?= $page->text2() ?></p>
            </div>
        </div>

        <div class="col-lg-4 col-sm-12">
            <div class="img-center">
                <img src="<?= $site->url(); ?>/assets/icons/firma.svg" alt="home img">
            </div>
        </div>


        <div class="col-lg-4 col-sm-12 align-self-end">
            <div class="right-text">
                <p class="text-color"><?= $page->text() ?></p>
                <p class="text-color"><?= $page->text2() ?></p>
            </div>
        </div>
    </div>



</article>

<?php snippet('footer') ?>