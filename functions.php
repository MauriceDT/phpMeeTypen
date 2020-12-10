<?php

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function isOldEnough($age)
{
    if ($age >= 21) {
        echo 'you may enter';
    } else {
        echo 'you are too young';
    }
}
