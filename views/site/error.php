<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = 'Error 404 | 21 Savage - fan site';
?>
<div class="site-error">

    <h2>Error 404</h2>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        The page has been deleted or has not been created yet. Please go to the <a href="/"> home </a> page.
    </p>
</div>
