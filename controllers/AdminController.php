<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\Doors;
use app\models\Door;
use app\models\Windows;
use app\models\Window;
use app\models\Entrances;
use app\models\Entrance;

class AdminController extends Controller
{
 
    public function behaviors()
    {
        return [
            'access' => [

                'class' => AccessControl::className(),
                'denyCallback' => function ($rule, $action) {
                    echo 'У вас нет доступа к этой странице';
                },
                'only' => ['logout', 'doors', 'view', ],
                'rules' => [
                    [
                        'actions' => ['logout', 'doors', 'view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    public function categories() {
        return ['Двери' => Doors::find()->count(), 'Окна' => Windows::find()->count(), 'Витражи' => Entrances::find()->count(),];
    }

    public function actionIndex()
    {
        if(!Yii::$app->user->isGuest) {

            $this->redirect('/admin/doors');
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->user->login($model->getUser());

            $this->redirect('/admin/doors');
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('index', ['model' => $model]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        
        return $this->redirect('/admin');    
    }

        public function actionDoors()
    {
        $doors = Doors::find()->orderBy('id DESC')->all();

        return $this->render('doors', ['doors' => $doors, 'categories' => $this->categories()]);
    
    }
            public function actionEntrances()
    {
        $entrances = Entrances::find()->all();
        
        return $this->render('entrances', ['entrances' => $entrances, 'categories' => $this->categories()]);
    
    }
            public function actionWindows()
    {
        $windows = Windows::find()->all();
        
        return $this->render('windows', ['windows' => $windows, 'categories' => $this->categories()]);
    
    }

    public function actionView()
    {

        if(Yii::$app->request->get('action') == 'door') {

            $action = Doors::findOne(Yii::$app->request->get('id'));
            $model = new Door();

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {

                Door::upload($action, $model);
                $this->redirect('/admin/doors'); 

            } 

            return $this->render(Yii::$app->request->get('action'), ['action' => $action, 'categories' => $this->categories(), 'model' => $model]);
        }
        if(Yii::$app->request->get('action') == 'window') {

            $action = Windows::findOne(Yii::$app->request->get('id'));
            $model = new Window();

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {

                Window::upload($action, $model);
                $this->redirect('/admin/windows');

            }

            return $this->render(Yii::$app->request->get('action'), ['action' => $action, 'categories' => $this->categories(), 'model' => $model]);
        }
        if(Yii::$app->request->get('action') == 'entrance') {

            $action = Entrances::findOne(Yii::$app->request->get('id'));
            $model = new Entrance();

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {

                Entrance::upload($action, $model);
                $this->redirect('/admin/entrances');

            }

            return $this->render(Yii::$app->request->get('action'), ['action' => $action, 'categories' => $this->categories(), 'model' => $model]);
        }
    
    }

        public function actionAdd()
    {

        if(Yii::$app->request->get('action') == 'door') {

            $action = new Doors();
            $model = new Door();

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {

                Door::upload($action, $model);
                $this->redirect('/admin/doors'); 

            } 

            return $this->render(Yii::$app->request->get('action'), ['action' => $action, 'categories' => $this->categories(), 'model' => $model]);
        }

        if(Yii::$app->request->get('action') == 'window') {

            $action = new Windows();
            $model = new Window();

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {


                Window::upload($action, $model);
                $this->redirect('/admin/windows');

            }

            return $this->render(Yii::$app->request->get('action'), ['action' => $action, 'categories' => $this->categories(), 'model' => $model]);
        }

        if(Yii::$app->request->get('action') == 'entrance') {

            $action = new Entrances();
            $model = new Entrance();

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {

                Entrance::upload($action, $model);
                $this->redirect('/admin/entrances');

            }

            return $this->render(Yii::$app->request->get('action'), ['action' => $action, 'categories' => $this->categories(), 'model' => $model]);
        }
    }


        public function actionDelete()
    {

        if(Yii::$app->request->get('action') == 'door') {

            $action = Doors::findOne(Yii::$app->request->get('id'));
            if($action->image != 'images/goods/noimage.png') {
                unlink($action->image);
            }
            $action->delete();

            $this->redirect('/admin/doors'); 

        }
        if(Yii::$app->request->get('action') == 'window') {

            $action = Windows::findOne(Yii::$app->request->get('id'));
            if($action->image != 'images/goods/noimage.png') {
                unlink($action->image);
            }
            $action->delete();

            $this->redirect('/admin/windows');

        }
        if(Yii::$app->request->get('action') == 'entrance') {

            $action = Entrances::findOne(Yii::$app->request->get('id'));
            if($action->image != 'images/goods/noimage.png') {
                unlink($action->image);
            }
            $action->delete();

            $this->redirect('/admin/entrances');

        }
    }
}
