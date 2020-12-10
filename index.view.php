<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <strong>Status: </strong> <?= $task['completed'] ? 'complete' : 'incomplete';  ?>
        </li>
    </ul>


</body>

</html>