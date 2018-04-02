<?php

use yii\helpers\Html;
use app\assets\AppAsset;
use app\components\NewsWidget;
use app\components\CitationsWidget;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>

    <html lang="<?= Yii::$app->language ?>">
    <head>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-2586863288185463",
                enable_page_level_ads: true
            });
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-102624075-4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-102624075-4');
        </script>
        <meta name="yandex-verification" content="06d33dff0a51e450" />
        <meta name='wmail-verification' content='453d7ffd01aa0bac9a8a5e710840dfb4' />
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?= Html::encode($this->title) ?></title>

        <?= Html::csrfMetaTags() ?>
        <link rel="shortcut icon" href="web/images/icon.png" type="image/x-icon">
        <?php $this->head() ?>
    </head>

    <body>
    <?php $this->beginBody() ?>
    <header>
        <div class="container">
            <div class="col-lg-3 col-md-3 col-xs-5">
                <a rel="nofollow" href="/"><?= Html::img('@web/images/21savage_logo1.png', ['class' => 'savage_logo pull-left', 'alt' => '21 Savage', 'title' => '21 Savage']) ?></a>
            </div>
            <div class="col-lg-7 col-md-7 col-xs-7 header_text">
                <h1>21 Savage - Best American Rapper</h1>
                <div>
                    21 Savage rapper from Atlanta. Growing up, Abraham-Joseph was in a gang that was associated with the
                    Bloods and committed numerous criminal acts with them.
                </div>
                <div class="carusel citations_block hidden-md hidden-xs hidden-sm">
                    <?= CitationsWidget::widget(['tpl' => 'citations']) ?>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 hidden-xs hidden-sm">
                <?= Html::img('@web/images/21savage_logo2.png', ['class' => 'savage_second_logo pull-right', 'alt' => '21 Savage', 'title' => '21 Savage']) ?>
            </div>
        </div>
    </header>
    <div class="container">
        <nav class="navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
                        <ul class="nav navbar-nav">
                            <li>
                                <a rel="nofollow" href="/"><span class="glyphicon glyphicon-home"></span></a>
                            </li>
                            <li>
                                <a href="/biography">Biography</a>
                            </li>
                            <li>
                                <a href="/albums">Albums</a>
                            </li>
                            <li>
                                <a rel="nofollow" href="/news">News</a>
                            </li>
                            <li>
                                <a rel="nofollow" href="/interview">Interview</a>
                            </li>
                            <li>
                                <a rel="nofollow" href="/video">Video</a>
                            </li>
                            <li>
                                <a href="/texts">Lyrics</a>
                            </li>
                            <li>
                                <a rel="nofollow" href="/photo">Photo</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
            <?= $content; ?>
            <div class="clearfix"></div>
            <hr/>
            <article class="last_info">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="last_news">
                        <p class="text_last_news"><img src="/images/last_news.png" /> Last news:</p>
                        <?= NewsWidget::widget(['tpl' => 'news']) ?>
                        <p class="all_news_button"><a rel="nofollow" href="/news">All news »</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="twitter_iframe">
                        <a class="twitter-timeline" rel="nofollow" href="https://twitter.com/21savage?ref_src=twsrc%5Etfw">Tweets by 21 Savage</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="last_news short_biography">
                        <p class="text_last_news"><img src="/images/last_news.png" /> Biography:</p>
                        <div>
                            21 Savage is an American rapper from Atlanta, Georgia.
                            In his youth he was a member of the gang "Bloods", with whom he committed many criminal acts.
                            On his 21st birthday, he was shot six times, and his best friend was shot dead.
                        </div>
                        <p class="all_biography_button"><a rel="nofollow" href="/biography">Full biography »</a></p>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <div class="container">
        <footer>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8 footer_text">
                 <a rel="nofollow" href="/">21-savage.com</a> by <a rel="nofollow" href="<?= Url::to(['site/by88']) ?>">88</a>
                <h6><?= date('Y') ?><a rel="nofollow" href="<?= Url::to(['site/copyright']) ?>"> Copyright</a></h6>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 pull-right social">
                <a class="pull-right" href="https://www.youtube.com/channel/UCJ86fLVg90qjqbZmnt0uyYw" rel="nofollow" target="_blank"><img src="/images/youtube.png" alt="Кизару" title="Кизару"></a>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 pull-right social">
                <a class="pull-right" href="https://t.me/rap_american" rel="nofollow" target="_blank"><img src="/images/telegram.png" alt="Кизару" title="Кизару"></a>
            </div>
        </footer>
    </div>
    <!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>