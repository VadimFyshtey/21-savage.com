<?php
use yii\widgets\LinkPager;
use yii\widgets\Breadcrumbs;
?>
<section class="video">
    <h2>21 Savage - Video</h2>
    <div class="breadcrumbs">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : ['Video'],
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

    <?php foreach ($video as $item): ?>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <h3><?= $item['name'] ?></h3>
            <p><?= $item['url'] ?></p>
            <div class="clearfix"></div>
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