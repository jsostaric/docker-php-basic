<?= 'Hello' ?>
<h1>world</h1>

<?php
    $a = 2;
    $b = 4;
    echo 'variable $a is:' . $a . '<br>';
    echo 'variable $b is:' . $b . '<br>';
    $c = $a++ + ++$b;

    echo 'variable $a is:' . $a . '<br>';
    echo 'variable $b is:' . $b . '<br>';
    echo 'variable $c is:' . $c . '<br>';
    echo 'variable $a is:' . $a . '<br>';

?>