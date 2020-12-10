<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .question {
            background-color: magenta;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Task for the day</h1>

    <ul>
        <li>
            <strong>Name: </strong> <?= $task['chore']; ?>
        </li>
        <li>
            <strong>Due Date: </strong> <?= $task['due']; ?>
        </li>
        <li>
            <strong>Person: </strong> <?= $task['assigned_to']; ?>
        </li>
        <li>
            <strong>Status: </strong> <?= $task['completed'] ? '&#9989' : 'incomplete';  ?>
        </li>
        <li>
            <strong>Did you have fun?: </strong> <?= $task['was_it_fun?'] ? 'Yeah it was great!' : 'It kinda sucked'; ?>
        </li>
    </ul>

    <h2><span class="question">Am I old enough to enter the nightclub?</span> <?= isOldEnough(17) ?></h2>

</body>

</html>