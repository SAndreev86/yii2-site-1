<?php

namespace app\controllers;

use Yii;
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

        $windowCategory = 'все';

        return $this->render('windowSelection', ['category' => $windowCategory, 'categories' => $this->categories()]);
    }
    public function actionWindowsone()
    {
        $window = Windows::findOne(Yii::$app->request->get('id'));

        return $this->render('window', ['window' => $window, 'categories' => $this->categories()]);
    }

    public function actionCertificates()
    {
        return $this->render('certificates', [ 'categories' => $this->categories()]);
    }

    public function actionWindowscategory()
    {
        $windowCategory = '';

        if(Yii::$app->request->get('category') == 'rehau') {

            $windowCategory = 'Рехау';
            return $this->render('windowsCategory/rehau', ['category' => $windowCategory, 'categories' => $this->categories()]);
        }
        if(Yii::$app->request->get('category') == 'brusbox') {

            $windowCategory = 'Брусбокс';
            $windows = Windows::find()
                ->where(['category' => 'brusbox'])
                ->orderBy('id')
                ->all();

        }
        if(Yii::$app->request->get('category') == 'sliding_systems') {

            $windowCategory = 'Раздвижные системы';
            $windows = Windows::find()
                ->where(['category' => 'sliding_systems'])
                ->orderBy('id')
                ->all();

        }
        if(Yii::$app->request->get('category') == 'other') {

            $windowCategory = 'Прочее';

            $windows = Windows::find()
                ->where(['category' => 'other'])
                ->orderBy('id')
                ->all();

        }
        return $this->render('windowsCategory/windows', ['category' => $windowCategory, 'windows' => $windows, 'categories' => $this->categories()]);
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
