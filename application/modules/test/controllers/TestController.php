<?php

namespace app\modules\test\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionList()
    {
        return $this->render('index');
    }

}
