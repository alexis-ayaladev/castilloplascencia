<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Solucionar navbar responsive -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?= $site->title() ?> | <?= $page->title() ?></title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?= css([
        'assets/css/index.css',
        '@auto'
    ]) ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= $site->url() ?>">
                    <img src="<?= $site->url(); ?>/assets/icons/logo-verde.svg" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php foreach ($site->children()->listed() as $item) : ?>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item ">
                                <a class="nav-link" <?php e($item->isOpen(), 'aria-current ') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                            </li>
                        </ul>
                    <?php endforeach ?>
                </div>
            </div>
        </nav>
    </header>

    <main class="main">