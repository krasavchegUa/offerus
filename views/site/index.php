<?php
/**
 * @var yii\web\View $this
 */
$this->title = 'OFFERUS - Коммерческие приложения здесь и сейчас';
?>
<header>
    <div class="container">
        <div class="jumbotron">
            <p class="text-center"><a class="btn btn-default" href="#">Входите</a></p>

            <h1>OFFERUS</h1>

            <p class="lead">И все тут ...</p>

            <p><small>Коммерческие предложения здесь и сейчас</small></p>
        </div>
    </div>

</header>

<div class="lead-me">
    <div class="container text-center">
        <h3>ОFFERUS <br/>
        Или сами или с нами ...
        </h3>

        <button class="btn btn-main btn-lg" data-toggle="modal" data-target="#register">Зарегистрироваться</button><br/>
        или <a class="btn-link" href="#">Войдите</a>

    </div>
</div>
<div id="items">
    <div class="container">
        <div class="item row">
            <div data-scroll-reveal="enter from the bottom after 0.3s ease-in-out 100px  reset" class="col-xs-6">
                <h3>О! Работаю как хочу</h3>
                <div class="info">
                    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.
                    В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.
                </div>
            </div>
            <div data-scroll-reveal="enter from the right after 0.3s ease-in-out 100px reset" class="col-xs-6">
                <img height="400" src="http://www.hachette.com/file/47-image-fr" alt=""/>
            </div>
        </div>
        <div class="item row">
            <div data-scroll-reveal="enter from the bottom after 0.3s ease-in-out 100px  reset" class="col-xs-6">
                <h3>О! Работаю как хочу</h3>
                <div class="info">
                    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.
                    В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.
                </div>
            </div>
            <div data-scroll-reveal="enter from the right after 0.3s ease-in-out 100px reset" class="col-xs-6">
                <img height="400" src="http://www.hachette.com/file/47-image-fr" alt=""/>
            </div>
        </div>
        <div class="item row">
            <div data-scroll-reveal="enter from the bottom after 0.3s ease-in-out 100px  reset" class="col-xs-6">
                <h3>О! Работаю как хочу</h3>
                <div class="info">
                    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.
                    В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.
                </div>
            </div>
            <div data-scroll-reveal="enter from the right after 0.3s ease-in-out 100px reset" class="col-xs-6">
                <img height="400" src="http://www.hachette.com/file/47-image-fr" alt=""/>
            </div>
        </div>
        <div class="item row">
            <div data-scroll-reveal="enter from the bottom after 0.3s ease-in-out 100px  reset" class="col-xs-6">
                <h3>О! Работаю как хочу</h3>
                <div class="info">
                    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.
                    В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.
                </div>
            </div>
            <div data-scroll-reveal="enter from the right after 0.3s ease-in-out 100px reset" class="col-xs-6">
                <img height="400" src="http://www.hachette.com/file/47-image-fr" alt=""/>
            </div>
        </div>
    </div>
</div>

<div class="buttons">
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-6">
                <button class="btn btn-main btn-lg" data-toggle="modal" data-target="#register">Зарегистрироваться</button>
            </div>
            <div class="col-xs-6">
                <a class="btn btn-default btn-lg" href="#">Рассказать другу</a>
            </div>
        </div>
    </div>
</div>

<?php /*$mailer = Yii::$app->mail->compose('layouts/html')
    ->setFrom('info@ex.ru')
    ->setTo('krasavcheg.ua@gmail.com')
    ->setSubject('Subject');


if($mailer->send()){
    echo '321213123';
}; */?>
