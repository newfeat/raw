<?php

namespace App\Controllers;


use App\Controller;

class Categories
    extends Controller
{
    protected function actionDefault()
    {
        $this->view->categories = \App\Models\Category::findAll();
        $this->view->display(__DIR__ . '/../../templates/categories.php');
    }

    protected function actionOne()
    {
        if (empty($_GET['id'])) {
            echo 'Ошибка';
        }

        $id = $_GET['id'];
        $this->view->category = \App\Models\Category::findById($id);
        $this->view->display(__DIR__ . '/../../templates/category.php');
    }
}