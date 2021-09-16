<?php

namespace App\controllers;

use App\models\PoemModel;

class PoemController
{
    public function actionList() {
        $params['title'] = 'Стихотворения';
        $params['item'] = PoemModel::getList();
        $view = 'www/app/views/list.php';
        self::render($view, $params);
    }
    public static function render($view, $params)
    {
        extract($params);
        ob_start();
        include($view);
        $content = ob_get_clean();
        include('www/app/views/layout.php');
    }
}