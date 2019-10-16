<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name = "***",
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Material', 'url' => ['/site/material']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'News', 'url' =>['/site/news']],
            ['label' => 'PAgeMAterial', 'url' => ['site/page']],
            ['label' => 'Question', 'url' => ['site/questions']],

            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="column">
        <div class="column-box">
            <h3 class="header-footer">One text</h3>
            <p class="footer-text">Существует метафорическое представление о тексте, как о лабиринте, в котором блуждают его читатели и исследователи, или спутанном клубке, который
                подлежит распутыванию. Не существует универсальной теории выхода из лабиринта или распутывания клубков, есть лишь некоторые эвристические
                принципы,
                которым бывает полезно следовать. Однако когда вы приступаете к распутыванию клубка, у вас заранее не может быть гарантий, что вы его
                сумеете распутать до конца; равным образом, не сумев его распутать, вы не имеете права утверждать, что этот клубок является нераспутываемым в
                принципе.
                Распутывание клубка производится извне, а разгадывание лабиринта изнутри.
                В тексте скрывается сам автор, текст - есть свидетельство о нём; каждое творение содержит в себе - в том или ином виде - образ своего творца.</p>
        </div>
        <div class="column-box">
            <h3 class="header-footer">Two text</h3>
            <p class="footer-text">Текст живет, только соприкасаясь с другим текстом (контекстом). Только в точке этого контакта текстов вспыхивает свет, освещающий и назад и
                вперед,
                приобщающий данный текст к диалогу. Подчеркиваем, что этот контакт есть диалогический контакт между текстами (высказываниями), а не
                механический
                контакт "оппозиций", возможный только в пределах одного текста (но не текста и контекстов) между абстрактными элементами ({знаками}
                внутри текста)
                и необходимый только на первом этапе понимания (понимания значения, а не смысла). За этим контактом контакт личностей, а не вещей (в пределе).
                Если мы превратим диалог в один сплошной текст, то есть сотрем разделы голосов (смены говорящих субъектов), что в пределе возможно
                (монологическая диалектика Гегеля), то глубинный (бесконечный) смысл исчезнет (мы стукнемся о дно, поставим мертвую точку).</p>
        </div>
        <div class="column-box">
            <h3 class="header-footer">Three text</h3>
            <p class="footer-text">ТЕКСТ в понимании Ю.Лотмана — "Понятие "текст" употребляется неоднозначно. Можно было бы составить набор порой весьма различающихся значений,
                которые вкладываются различными авторами в это слово. Характерно, однако, другое: в настоящее время это, бесспорно, один из самых употребимых
                терминов в науках гуманитарного цикла. Развитие науки в разные моменты выбрасывает на поверхность такие слова; лавинообразный рост их
                частотности в научных ТЕКСТАХ сопровождается утратой необходимой однозначности. Они не столько терминологически точно обозначают научное
                понятие, сколько сигнализируют об актуальности проблемы, указывают на область, в которой рождаются новые научные идеи. История таких слов могла
                бы составить своеобразный индекс научной динамики.</p>
            <p class="footer-text">В нашу задачу не входит обосновать какое-либо из существующих или предложить новое понимание этого термина. В аспекте настоящего исследования
                более существенно попытаться определить его отношение к некоторым другим базовым понятиям, в частности к понятию языка. </p>
        </div>
    </div>
    <div class="container" >
        <p class="pull-left">&copy; MyProject <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
