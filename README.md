# yii2-global-helpers

global shortcut functions for various yii2 components

**app()** = Yii::$app

**user()** = Yii::$app->user

**params()** = Yii::$app->params

**d()** = VarDumper::dump()

**ds()** = VarDumper::dumpAsString()

**dd()** = VarDumper::dump() and die

**e()** = echo VarDumper::export()

**es()** = return VarDumper::export()

## install

just add to your composer.json

    "require": {
      "niluzok/yii2-global-helpers": "~1.0.0"
    },


    composer update

and use them as ordinal function with no namespace

    echo params('some-param-name');
