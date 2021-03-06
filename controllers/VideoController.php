<?php

namespace app\controllers;

use app\models\entities\Video;
use yii\data\Pagination;

class VideoController extends AppController {

    const PAGE_SIZE = 6;

    public function actionIndex()
    {
        $query = Video::find()->where(['status' => 1])->orderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => self::PAGE_SIZE, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $video = $query->offset($pages->offset)->limit($pages->limit)->all();
        $this->setMeta('21 Savage - Videos | Clips',  'Videos and clips of rapper 21 Savage are on our site. See all the most interesting moments from the life of 21 Savage with us.');
        return $this->render('index', compact('video', 'pages'));
    }

}
