<?php

namespace backend\controllers;

use Yii;
use backend\models\SuratMasuk;
use backend\models\SuratMasukSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SuratMasukController implements the CRUD actions for SuratMasuk model.
 */
class SuratMasukController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all SuratMasuk models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SuratMasukSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SuratMasuk model.
     * @param integer $satker_id
     * @param integer $no_urut
     * @return mixed
     */
    public function actionView($satker_id, $no_urut)
    {
        return $this->render('view', [
            'model' => $this->findModel($satker_id, $no_urut),
        ]);
    }

    /**
     * Creates a new SuratMasuk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SuratMasuk();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'satker_id' => $model->satker_id, 'no_urut' => $model->no_urut]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SuratMasuk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $satker_id
     * @param integer $no_urut
     * @return mixed
     */
    public function actionUpdate($satker_id, $no_urut)
    {
        $model = $this->findModel($satker_id, $no_urut);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'satker_id' => $model->satker_id, 'no_urut' => $model->no_urut]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SuratMasuk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $satker_id
     * @param integer $no_urut
     * @return mixed
     */
    public function actionDelete($satker_id, $no_urut)
    {
        $this->findModel($satker_id, $no_urut)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SuratMasuk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $satker_id
     * @param integer $no_urut
     * @return SuratMasuk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($satker_id, $no_urut)
    {
        if (($model = SuratMasuk::findOne(['satker_id' => $satker_id, 'no_urut' => $no_urut])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
