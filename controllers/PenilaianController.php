<?php

namespace app\controllers;

use yii\web\Controller;

class PenilaianController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public $layout = '@app/views/layouts/admin';
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreate()
    {
        return $this->render('create');
    }
}
