<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?></title>

     <!-- BOOSTSTRAP CSS -->
     <link rel="styesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

     <!-- FONT AWESOME -->
     <link rel="styesheet" href="<?= base_url('assets/fontawesome/css/all.min.css') ?>">


</head>
<body>
    
    <!-- render section -->
    <?= $this->renderSection('content') ?>

    <!-- BOOSTSTRAP JS -->
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>    

</body>
</html>