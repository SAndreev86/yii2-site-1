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
class Door extends Model
{
    public $name_product;
    public $design;
    public $externalDecoration;
    public $internalDecoration;
    public $mainCastle;
    public $additionalCastle;
    public $nightValve;
    public $pen;
    public $heater;
    public $price;
    public $image;

    public function rules()
    {
        return [
        	[['name_product', 'design','externalDecoration', 'internalDecoration','mainCastle', 'additionalCastle','nightValve', 'pen','heater', 'price',], 'required', message => 'Заполните поле'],
            [['image'], 'file',  'extensions' => 'jpg, png, gif' ],
        ];
    }

    public static function upload($action, $model) {


                    $model->image = UploadedFile::getInstance($model, 'image');

                    $action->name_product = $model->name_product;
                    $action->design = $model->design;
                    $action->external_decoration = $model->externalDecoration;
                    $action->internal_decoration = $model->internalDecoration;
                    $action->main_сastle = $model->mainCastle;
                    $action->additional_сastle = $model->additionalCastle;
                    $action->night_valve = $model->nightValve;
                    $action->pen = $model->pen;
                    $action->heater = $model->heater;
                    $action->price = $model->price;
                    $action->save();

                    if($model->image != '') {
                        if($action->image != 'images/goods/noimage.png' && $action->image != '') {
                            unlink($action->image);
                        }
                        $model->image->saveAs('images/goods/doors/'.$action->id.'.'.$model->image->extension);
                        $action->image = 'images/goods/doors/'.$action->id.'.'.$model->image->extension;
                    } elseif($action->image == '') {
                        $action->image = 'images/goods/noimage.png';
                    }

                $action->save();

    }
}