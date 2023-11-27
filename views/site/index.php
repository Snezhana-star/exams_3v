<?php

use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'Главная';
?>
<div class="site-index">



    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Сайт химчистки</h2>
                <?= Html::a('Список пользователей', ['../web/user'], ['class' => 'btn btn-success']) ?>

            </div>

        </div>
    </div>
</div>
