<?php

use \yii\helpers\VarDumper;

function d($var)
{
    VarDumper::dump($var, 10, true);
}

function ds($var)
{
    return VarDumper::dumpAsString($var, 10, true);
}

function dd($var)
{
    VarDumper::dump($var, 10, true);
    Yii::$app->end();;
}

function e($var)
{
    echo VarDumper::export($var)."\n";
}

function es($var)
{
    return VarDumper::export($var);
}