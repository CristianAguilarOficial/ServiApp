<?php
$dir = WRITEPATH . 'uploads/';
$files = scandir($dir);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Archivos PDF Generados</h2>

    <ul>
        <?php foreach ($files as $file): ?>
            <?php if ($file !== '.' && $file !== '..'): ?>
                <li>
                    <a href="<?= base_url('uploads/' . $file) ?>" download><?= $file ?></a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>

</html>