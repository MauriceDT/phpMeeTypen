<?php require('partials/head.php'); ?>


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


<?php require('partials/footer.php'); ?>