<?php

/**
 * Shortcut for \Yii::$app
 * @return yii\base\Application
 */
function app()
{
    return Yii::$app;
}

/**
 * Shortcut for \Yii::$app->user
 * @return yii\web\User
 */
function user()
{
    return Yii::$app->user;
}

/**
 * Shortcut for \Yii::$app->params
 * @return mixed
 */
function params($paramName = null)
{
    return $paramName ? Yii::$app->params[$paramName] : Yii::$app->params;
}
