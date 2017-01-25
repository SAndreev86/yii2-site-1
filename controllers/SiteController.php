<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Site;
use app\models\Doors;
use app\models\Windows;
use app\models\Entrances;

class SiteController extends Controller
{



    public function categories() {
        return ['Двери' => Doors::find()->count(), 'Окна' => Windows::find()->count(), 'Витражи' => Entrances::find()->count(),];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

     public function actionDealers()
    {
        return $this->render('dealers');
    }
     public function actionWindows()
    {
        $windows = Windows::find()->orderBy('id DESC')->all();

        return $this->render('windows', ['windows' => $windows, 'categories' => $this->categories()]);
    }
     public function actionEntrances()
    {
        $entrances = Entrances::find()->orderBy('id DESC')->all();

        return $this->render('entrances', ['entrances' => $entrances, 'categories' => $this->categories()]);
    }
         public function actionDoors()
    {
        $doors = Doors::find()->orderBy('id DESC')->all();

        return $this->render('doors', ['doors' => $doors, 'categories' => $this->categories()]);

    }
     public function actionAjax()
    {
        return Site::validationFeedback();
    }
    public function actionContacts()
    {
        return $this->render('contacts');
    }





}
