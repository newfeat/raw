<?php

namespace App\Controllers;


use App\Controller;

class Errors
    extends Controller
{
    protected function actionDb500()
    {
        $this->view->display(__DIR__ . '/../../templates/errors/db500.php');
    }

    protected function actionArticle404()
    {
        $this->view->display(__DIR__ . '/../../templates/errors/article404.php');
    }

    protected function actionCategory404()
    {
        $this->view->display(__DIR__ . '/../../templates/errors/category404.php');
    }

}