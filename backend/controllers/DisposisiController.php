<?php

namespace backend\controllers;

use Yii;
use backend\models\Disposisi;
use backend\models\DisposisiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DisposisiController implements the CRUD actions for Disposisi model.
 */
class DisposisiController extends Controller
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
     * Lists all Disposisi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DisposisiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Disposisi model.
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
     * Creates a new Disposisi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Disposisi();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'satker_id' => $model->satker_id, 'no_urut' => $model->no_urut]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Disposisi model.
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
     * Deletes an existing Disposisi model.
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
     * Finds the Disposisi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $satker_id
     * @param integer $no_urut
     * @return Disposisi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($satker_id, $no_urut)
    {
        if (($model = Disposisi::findOne(['satker_id' => $satker_id, 'no_urut' => $no_urut])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
