<?php ?>


<div class="col-md-3 col-sm-3 feedback">
    <div class="row">
        <!--contact form-->
        <div id="get-touch">
            <div class="get-touch-heading">
                <h2>Узнать стоимость</h2>
            </div>
            <form role="form" class="form contactForm">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя"
                           data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                           data-rule="email" data-msg="Please enter a valid email"/>
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" id="message" rows="5" data-rule="required"
                              data-msg="Please write something for us" placeholder="Текст сообщения"></textarea>
                    <div class="validation"></div>
                </div>
                <div class="g-recaptcha" data-sitekey="6LeatxIUAAAAAHmDIBwXVWf58cZi6v7GS6tgnMvk" data-callback="mySuperFunctionDontCopyPaste"
                     style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>

            </form>
            <!-- Button trigger modal -->
            <div class="row">
                <div class="col-xs-2"></div>
                <div class="col-xs-8">
                    <button class="btn btn-default" id="btn_ajax" data-toggle="modal" data-target="#myModal">
                        Отправить
                        <script>
                            function mySuperFunctionDontCopyPaste(captchaKey) {
                                document.cookie = "captcha=" + captchaKey;
                            }

                            function get_cookie ( cookie_name )
                            {
                                var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );

                                if ( results )
                                    return ( unescape ( results[2] ) );
                                else
                                    return null;
                            }

                            $(document).ready(function () {
                                $("#btn_ajax").click(function () {
                                    var params = {
                                        name: $("#name").val(),
                                        email: $("#email").val(),
                                        message: $("#message").val(),
                                        captcha: get_cookie('captcha')
                                    }
                                    $.post("site/ajax", params, function (data) {
                                        $(".modal-body").html(data);
                                        $("#myModal").modal('show');
                                    });
                                    document.cookie = "captcha=";
                                    return false;
                                });
                            });
                        </script>
                    </button>
                </div>
                <div class="col-xs-2"></div>
            </div>
            <!-- HTML-код модального окна-->
            <div id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Заголовок модального окна -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                            </button>
                            <h4 class="modal-title">Обратная связь</h4>
                        </div>
                        <!-- Основное содержимое модального окна -->
                        <div class="modal-body"></div>
                        <!-- Футер модального окна -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="get-touch">
            <div class="row">
                <div class="get-touch-body col-md-12 col-sm-12">
                    <div class="get-touch-heading">
                        <h2 class="text-center">Отзывы наших клиентов</h2>
                    </div>
                    <blockquote>
                        <p>Большое спасибо Вашей компании за качественное обслуживание! Менеджеру особенная благодарность, за сопровождение всего процесса, а так же бригаде монтажников. Все сделано быстро, без задержки. Абсолютное соотношение цена-качество.<p>
                        <footer>Максим Андреевич.</footer>
                    </blockquote>
                    <blockquote>
                        <p>Заказал в ноябре остекление дома под ключ. Монтаж сделали качественно, молодцы!</p>
                        <footer>Юрий.</footer>
                    </blockquote>
                    <blockquote>
                        <p>Долго выбирал надёжную компанию, чтобы остеклить лоджию, остановил свой выбор на "Время окон". Спасибо большое менеджерам всё грамотно объяснили, буду рекомендовать знакомым.</p>
                        <footer>Олег.</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>