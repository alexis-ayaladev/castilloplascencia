<?php snippet('header') ?>
<section class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <img src="<?= $site->url(); ?>/assets/icons/contacto.svg" alt="home img">
        </div>
        <div class="col-md-6 col-sm-12">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="Nombre"">
                </div>
                <div class=" mb-3">
                    <label for="Telefono" class="form-label">Telefono</label>
                    <input type="tel" class="form-control" id="Telefono">
                </div>
                <div class="mb-3">
                    <label for="textArea" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="textArea" rows="3"></textarea>
                </div>
            </form>
        </div>
    </div>
</section>

<?php snippet('footer') ?>