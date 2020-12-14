<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>

    <style>
        .taskComplete {
            background-color: green;
            color: white;
        }

        .taskNotComplete {
            background-color: red;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Task for the day</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <span class="taskComplete"><?= $task->description; ?></span>
                <?php else : ?>
                    <span class="taskNotComplete"><?= $task->description; ?><span>
                        <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>