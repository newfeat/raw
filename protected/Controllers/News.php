<?php

namespace App\Controllers;


use App\Controller;

class News
    extends Controller
{
    protected function actionDefault()
    {
        $this->view->news = \App\Models\Article::findLatest(3);
        $this->view->display(__DIR__ . '/../../templates/news.php');
    }

    protected function actionOne()
    {
        if (empty($_GET['id'])) {
            echo 'Ошибка';
        }

        $id = $_GET['id'];
        $this->view->article = \App\Models\Article::findById($id);
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}