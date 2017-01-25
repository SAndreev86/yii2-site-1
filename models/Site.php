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
class Site extends Model {
    
   public static function validationFeedback() {
       
        $email = $_POST['email'];
        $validation = filter_var($email, FILTER_VALIDATE_EMAIL);


       $url = 'https://www.google.com/recaptcha/api/siteverify';

       $recaptcha = $_POST['captcha'];
       $secret = '6LeatxIUAAAAAHMis4T49aDQc-19S8Fx6Rink8_2';
       $ip = $_SERVER['REMOTE_ADDR'];

       $url_data = $url.'?secret='.$secret.'&response='.$recaptcha.'&remoteip='. $ip;

       $curl = curl_init();

       curl_setopt($curl, CURLOPT_URL, $url_data);
       curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);

       curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

       $res = curl_exec($curl);
       curl_close($curl);

       $res = json_decode($res);

        if ( $validation && ($_POST['name'] != '') && ($_POST['message'] != '') && ($res->success)) {
            
            
            $to = "sandreev87@vremya-okon.esy.es"; //Почта получателя, через запятую можно указать сколько угодно адресов
            $subject = 'Обратный звонок'; //Заголовок сообщения
            $message = '
                    <html>
                        <head>
                            <title>Обратный звонок</title>
                        </head>
                        <body>
                            <p>Отправитель: '.$_POST['email'].'</p>
                            <p>Имя: '.$_POST['name'].'</p>
                            <p>Cообщение: '.$_POST['message'].'</p>                        
                        </body>
                    </html>'; //Текст нащего сообщения можно использовать HTML теги
            $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
            $headers .= "From: Отправитель <".$_POST['email'].">\r\n"; //Наименование и почта отправителя
            if (mail($to, $subject, $message, $headers)) {
                $output = 'Отправленно!';
            } else {
                $output = 'Ошибка!';
            }

            
        } else {
            if(!$validation) {
                $output = 'Введите верный адрес почты<br/>';
            } 
            if($_POST['name'] == '') {
                $output =  $output.'Укажите ваше имя<br/>';
            }
            if($_POST['message'] == '') {
                $output =  $output.'Укажите ваше сообщение<br/>';
            }
            if(!$res->success) {
                $output =  $output.'Ошибка отправки, проверьте все ли вы заполнили<br/>';
            }

        }

        return $output;
    }
    
}