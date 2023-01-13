<?php

use \yii\helpers\VarDumper;

/**
 * VarDumper::dump() shortcut with highlighting
 * @param  mixed $var
 * @return void
 */
function d($var, $depth = 10, $highlight = true)
{
    VarDumper::dump($var, $depth, $highlight);
}

/**
 * VarDumper::dumpAsString() shortcut with highlighting
 * @param  mixed $var
 * @return string
 */
function ds($var, $depth = 10, $highlight = true)
{
    return VarDumper::dumpAsString($var, $depth, $highlight);
}

/**
 * dump and die
 * @param  mixed $var
 * @return void
 */
function dd($var, $depth = 10, $highlight = true)
{
    VarDumper::dump($var, $depth, $highlight);
    die;
}

/**
 * Console dump and die
 * @param  mixed $var
 * @return void
 */
function cdd($var, $depth = 10, $highlight = true)
{
    var_dump($var);
    die;
}

/**
 * Exports and outputs variable 
 * @param  mixed $var
 * @return void
 */
function e($var)
{
    echo VarDumper::export($var)."\n";
}

/**
 * Exports variable as string
 * @param  mixed $var
 * @return string
 */
function es($var)
{
    return VarDumper::export($var);
}
