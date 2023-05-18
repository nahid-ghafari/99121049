<?php

function dd($in)
{
    echo('<pre>');
    var_dump($in);
    die;
}
function urlIs($value)
    {
        return $_SERVER['REQUEST_URI']==$value;
    }
?>