<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\Breadcrumbs;
use yii\widgets\Pjax;
?>
<section>
<h2>21 Savage - Lyrics</h2>
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : ['Lyrics'],
    ]) ?>

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

    <br/>
<table class="bordered">
    <thead>
        <tr>   
            <th>Song</th>
            <th>Album</th>
        </tr>
    </thead>
     <?php foreach ($texts as $text): ?>
    <tr>
        <td class="td_link"><p><a href="<?= Url::to(['texts/view', 'alias' => $text['alias']]) ?>"><?= $text['name'] ?></a></p></td>
        <td class="td_link"><p><a href="<?= Url::to(['texts/view', 'alias' => $text['alias']]) ?>"><?= $text['album'] ?></a></p></td>
    </tr>
     <?php endforeach; ?>
</table>
<div class="align_center">
<div class="pagination">
    <?php
        echo LinkPager::widget([
        'pagination' => $pages,
        ]);
    ?>
</div>
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