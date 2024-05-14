<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galery</title>
    <style>
        .galery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
        }
        .galery img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<div class="galery">
    <?php
    $fileList = glob('gambar/*');
    foreach ($fileList as $filename) {
        if (is_file($filename)) {
            echo '<img src="' . $filename . '" alt="gambar">';
        }
    }
    ?>
</div>

</body>
</html>
