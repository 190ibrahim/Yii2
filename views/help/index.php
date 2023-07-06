<?php

            use yii\helpers\Html;

$this->title = 'help Application';
$this->params['breadcrumbs'][] = ['label' => 'Help Center', 'url' => ['index']];

$this->params['breadcrumbs'][] = $this->title;

?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the help application
    </p>
    <div>
        <?= Html::a('Help', ['help/']) ?>
    </div>
    <code><?= __FILE__ ?></code>
</div>