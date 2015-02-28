<?php

use \yii\helpers\VarDumper;

/**
 * VarDumper::dump() shortcut with highlighting
 * @param  mixed $variable
 * @return void
 */
function d($variable)
{
    VarDumper::dump($variable, 10, true);
}

/**
 * VarDumper::dumpAsString() shortcut with highlighting
 * @param  mixed $variable
 * @return string
 */
function ds($variable)
{
    return VarDumper::dumpAsString($variable, 10, true);
}

/**
 * dump and die
 * @param  mixed $variable
 * @return void
 */
function dd($variable)
{
    VarDumper::dump($variable, 10, true);
    die;
}

/**
 * Exports and outputs variable 
 * @param  mixed $variable
 * @return void
 */
function e($variable)
{
    echo VarDumper::export($variable)."\n";
}

/**
 * Exports variable as string
 * @param  mixed $variable
 * @return string
 */
function es($variable)
{
    return VarDumper::export($variable);
}