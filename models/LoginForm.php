<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $Login;
    public $Password;

    public function rules()
    {
        return [
            [['Login', 'Password'], 'required', message => 'Заполните поле'],
            ['Password', 'validatePass'],
        ];
    }
    public function validatePass($attribute, $params)
    {
        $user = $this->getUser();

        if(!$this->hasErrors()) {
            if (!$user || !$user->validatePassword($this->Password)) {
               $this->addError($attribute, 'Пароль неверный');
            }
        }
    }
    public function getUser() {
        return User::findOne(['login' => $this->Login]);
    }
}