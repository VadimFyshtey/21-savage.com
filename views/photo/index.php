<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
?>
<section class="photo">
    <h2>21 Savage - Photo</h2>
    <div class="breadcrumbs">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : ['Photo'],
        ]) ?>
    </div>

    <!--Реклама-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- 21-savage.com -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-2586863288185463"
         data-ad-slot="9130303968"
         data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    <!--Реклама-->

    <?php foreach ($photo as $item): ?>
    <?php $mainImage = $item->getImage(); ?>
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <a href="<?= Url::to("/images/upload/store/{$mainImage->filePath}") ?>" data-toggle="lightbox">
            <?= Html::img("@web/images/upload/store/{$mainImage->filePath}", ['alt' => '21 Savage', 'class' => 'page_photo_image' , 'title' => '21 Savage'])?>
        </a>
        <?php if(!Yii::$app->user->isGuest) :?>
            <h6><a href="<?= Url::to(['/site/destroy', 'id' => $item->id]) ?>" rel="nofollow">Удалить</a></h6>
        <?php endif;?>
    </div>
    <?php endforeach; ?>
    <div class="clearfix"></div>
    <div class="pagination">
        <?php
        echo LinkPager::widget([
            'pagination' => $pages,
        ]);
        ?>
    </div>

    <!--Реклама-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- 21-savage.com -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-2586863288185463"
         data-ad-slot="9130303968"
         data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    <!--Реклама-->

</section>

