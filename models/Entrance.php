<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class Entrance extends Model
{
    public $name;
    public $description;
    public $image;

    public function rules()
    {
        return [
        	[['name', 'description', ], 'required', message => 'Заполните поле'],
            [['image'], 'file',  'extensions' => 'jpg, png, gif' ],
        ];
    }

    public static function upload($action, $model) {


                    $action->name = $model->name;
                    $action->description = $model->description;
                    $action->save();

                    $model->image = UploadedFile::getInstance($model, 'image');

                    if($model->image != '') {
                        if($action->image != 'images/goods/noimage.png' && $action->image != '') {
                            unlink($action->image);
                        }
                        $model->image->saveAs('images/goods/entrance/'.$action->id.'.'.$model->image->extension);
                        $action->image = 'images/goods/entrance/'.$action->id.'.'.$model->image->extension;
                    } elseif($action->image == '') {
                        $action->image = 'images/goods/noimage.png';
                    }

                $action->save();

    }
}