<?php

namespace app\controllers;

use app\models\MasterWilayah;
use app\models\MasterWilayahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MasterWilayahController implements the CRUD actions for MasterWilayah model.
 */
class MasterWilayahController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all MasterWilayah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MasterWilayahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterWilayah model.
     * @param int $kode_klinik Kode Klinik
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_klinik)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_klinik),
        ]);
    }

    /**
     * Creates a new MasterWilayah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MasterWilayah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_klinik' => $model->kode_klinik]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MasterWilayah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $kode_klinik Kode Klinik
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_klinik)
    {
        $model = $this->findModel($kode_klinik);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_klinik' => $model->kode_klinik]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MasterWilayah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $kode_klinik Kode Klinik
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_klinik)
    {
        $this->findModel($kode_klinik)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MasterWilayah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $kode_klinik Kode Klinik
     * @return MasterWilayah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_klinik)
    {
        if (($model = MasterWilayah::findOne(['kode_klinik' => $kode_klinik])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
