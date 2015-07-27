<?php

use yii\bootstrap\Modal;
use kartik\social\FacebookPlugin;
use yii\bootstrap\Collapse;
use yii\bootstrap\Alert;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Yii 2 Build';
?>
<div class="site-index">

    <div class="jumbotron">
        <?php if(\yii::$app->user->isGuest) {
            echo Html::a('Get started today', ['site/signup'], ['class' => 'btn btn-lg btn-success']);
        } ?>
        <br/>
        <h1>Yii 2 Build</h1>
        <p class="lead">Use This Yii 2 Template to start the project</p>
        <br/>
        <?php echo FacebookPlugin::widget(['type' => FacebookPlugin::LIKE, 'settings' => []]); ?>
    </div>

    <?php
        echo Collapse::widget([
            'items' => [
                [
                    'label' => 'Top Features',
                    'content' => FacebookPlugin::widget([
                        'type' => FacebookPlugin::SHARE,
                        'settings' => ['href' => 'http://localhost/yii2build/frontend/web', 'width' => '350'],
                    ]),
                ],
                [
                    'label' => 'Top Resources',
                    'content' => FacebookPlugin::widget([
                        'type' => FacebookPlugin::SHARE,
                        'settings' => ['href' => 'http://localhost/yii2build/frontend/web', 'width' => '350']
                    ]),
                ],
            ]
        ]);
        
        Modal::begin([
            'header' => '<h2>Lates Comments</h2>',
            'toggleButton' => ['label' => 'Comments'],
        ]);
        echo FacebookPlugin::widget([
            'type' => FacebookPlugin::COMMENT,
            'settings' => ['href' => 'http://localhost/yii2build/frontend/web', 'width' => '350']
        ]);
        Modal::end();
    ?>
</div>
