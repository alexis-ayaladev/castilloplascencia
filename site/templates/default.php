<div class="home">
    <?php snippet('header') ?>
    <div class="container-fluid ">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-6 col-sm-12">
                <img class="main-img" src="<?= $site->url(); ?>/assets/icons/home-img.svg" alt="home img">
            </div>
            <div class="col-lg-6 col-sm-12">
                <p class="title" ><?= $site->title() ?></p>
                <p class="text"><?= $site->text() ?></p>
            </div>
        </div>
    </div>
</div>


<?php snippet('footer') ?>