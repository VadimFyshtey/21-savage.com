<?php
use yii\helpers\Url;
?>
<li>
    <a href="<?= Url::to(['texts/view', 'alias' => $text->alias]) ?>">
        <?= mb_strimwidth('21 Savage - ' . $text->name, 0, 70, "...") ?>
    </a>
</li>

