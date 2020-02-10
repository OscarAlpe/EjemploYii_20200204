<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Alumnos;
use yii\data\ActiveDataProvider;

class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        /**
         * SELECT * FROM alumnos
         */
        $query = Alumnos::find(); // ActiveQuery
        $dataProvider = new ActiveDataProvider([
                'query' => $query,
        ]);
        
        return $this->render('index',[
                             'data'=>$dataProvider
                            ]);
    }

    public function actionPaginas()
    {
        /**
         * SELECT * FROM alumnos
         */
        $query = Alumnos::find(); // ActiveQuery
        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                    'pageSize' => 3,
                ],
        ]);
        
        return $this->render('paginas',[
                             'data'=>$dataProvider
                            ]);
    }

    
}
