<?php

namespace app\controllers;

use app\models\Tindakan;
use app\models\TindakanSearch;
use app\models\Pendaftaran;
use app\models\PendaftaranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TransaksiController implements the CRUD actions for Tindakan model.
 */
class TransaksiController extends Controller
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
     * Lists all Tindakan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PendaftaranSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('pendaftaran', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tindakan model.
     * @param int $id_tindakan Id Tindakan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pendaftaran)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_pendaftaran),
        ]);
    }

    /**
     * Creates a new Tindakan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pendaftaran();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_tindakan' => $model->id_pendaftaran]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tindakan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_tindakan Id Tindakan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pendaftaran)
    {
        $model = $this->findModel($id_pendaftaran);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pendaftaran' => $model->id_pendaftaran]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tindakan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_tindakan Id Tindakan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pendaftaran)
    {
        $this->findModel($id_pendaftaran)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tindakan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_tindakan Id Tindakan
     * @return Tindakan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pendaftaran)
    {
        if (($model = Pendaftaran::findOne(['id_tindakan' => $id_pendaftaran])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
