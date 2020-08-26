<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title . ' - ' . $namaaplikasi; ?></title>
    <!--favicon-->
    <link rel="icon" href="<?= base_url(); ?>/favicon.ico" type="image/x-icon">
    <?php foreach ($scheader as $sc) : ?>
        <link href="<?= base_url() . $sc; ?>" rel="stylesheet" />
    <?php endforeach; ?>
</head>

<body class="bg-theme bg-theme1">

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->