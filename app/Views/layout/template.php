<!DOCTYPE html>
<html lang="cz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <?= $this->include('layout/assets_head'); ?>
</head>

<body>
<?= $this->include('layout/navbar'); ?>
    <div class="container">
        <?= $this->renderSection('content'); ?>
    </div>
    <?= $this->include('layout/assets_body'); ?>
</body>

</html>