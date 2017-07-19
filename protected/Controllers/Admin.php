<?php

namespace App\Controllers;


use App\Controller;

class Admin
    extends Controller
{
    protected function access($action)
    {
        return true;
    }


    protected function actionDefault()
    {
        $this->view->news = \App\Models\Article::findAll();
        $this->view->display(__DIR__ . '/../../templates/admin/index.php');
    }


    public function actionEdit()
    {
        $this->view->article = \App\Models\Article::findById((int)$_GET['id']);
        $this->view->authors = \App\Models\Author::findAll();
        $this->view->display(__DIR__ . '/../../templates/admin/edit.php');
    }


    public function actionSave()
    {
        if (!empty($_POST['id'])) {
            $article = \App\Models\Article::findById($_POST['id']);
        } else {
            $article = new \App\Models\Article();
        }
        try {
            $article->fill($_POST);
            $article->save();
            header('Location: /Admin');
        } catch (\App\MultiException $errors) {
            include __DIR__ . '/../../templates/admin/edit.php';
        }
    }


    public function actionDelete()
    {
        $article = \App\Models\Article::findById((int)$_GET['id']);
        $article->delete();

        header('Location: /Admin');
    }
}