<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        header {
            background-color: magenta;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>

<body>

    <header>
        <ul>
            <?php foreach ($person as $key => $feature) : ?>
                <li>
                    <strong>
                        <?= $key; ?>
                    </strong>
                    <?= $feature; ?>
                </li>
            <?php endforeach; ?>

        </ul>

    </header>


</body>

</html>