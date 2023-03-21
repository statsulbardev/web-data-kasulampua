<?php

namespace app\controllers;

use app\models\Excel;
use app\models\ResetForm;
use app\models\UploadForm;
use app\models\User;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ExcelController implements the CRUD actions for Excel model.
 */
class ExcelController extends Controller
{
    /**
     * @inheritDoc
     */
    // public function behaviors()
    // {
    //     return array_merge(
    //         parent::behaviors(),
    //         [
    //             'verbs' => [
    //                 'class' => VerbFilter::className(),
    //                 'actions' => [
    //                     'delete' => ['POST'],
    //                 ],
    //             ],
    //         ]
    //     );
    // }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'view', 'create', 'update', 'delete', 'get', 'getpegawai', 'gethari', 'reset'],
                'rules' => [
                    [
                        // 'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],


            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Excel models.
     *
     * @return string
     */
    public function actionIndex()
    {
        
        $dataProvider = new ActiveDataProvider([
            'query' => Excel::find()->leftJoin("user", "excel.uploaded_by=user.id"),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);
        if(Yii::$app->user->identity->id_level!=1){
            $dataProvider->query->andFilterWhere(['user.id_instansi' => Yii::$app->user->identity->id_instansi, 'user.id_provinsi' => Yii::$app->user->identity->id_provinsi]);
        }
        // $dataProvider->query->andFilterWhere(['uploadedBy.id_instansi' => Yii::$app->user->identity->id_instansi, 'uploadedBy.id_provinsi' => Yii::$app->user->identity->id_provinsi]);

        // print_r($dataProvider->getModels());
        // die();

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionReset()
    {
        
        $model = new ResetForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model2 = User::findOne(['id' => Yii::$app->user->identity->id]);
            $model2->password = $model->newPassword;
            if($model2->save()){
                // echo "sukses ganti password";
                // die();
                Yii::$app->session->setFlash('success', "Reset password berhasil dilakukan.");

            }

        }

        return $this->render('change_password', [
            'model' => $model,
        ]);
    }

    /**
     * Displays a single Excel model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Excel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Excel();
        $model2 = new UploadForm();

        if ($this->request->isPost) {
            $model2->excelFile = UploadedFile::getInstance($model2, 'excelFile');
            $path = 'uploads/' . $model2->excelFile->baseName . '.' . $model2->excelFile->extension;

            $model->load($this->request->post());
            $model->path = $path;
            $model->uploaded_by = Yii::$app->user->identity->id;

            if(!str_contains($path, ",")){
                Yii::$app->session->setFlash('danger', "Penamaan file excel tidak sesuai format contoh : judul tabel, tahun.xlsx");
                return $this->render('create', [
                    'model' => $model,
                    'model2' => $model2,
        
                ]);

            }

            // echo "XXX";
            // echo $model2->excelFile;
            // die($model2->excelFile);
            // if ($model->load($this->request->post()) && $model->save() && $model2->upload()) {
            if ( $model->save() && $model2->upload()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                Yii::$app->session->setFlash('danger', "Gagal upload, pastikan tidak ada excel sebelumnya dengan nama yang sama.");
            }
        } else {
            $model->loadDefaultValues();
            // $model2->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'model2' => $model2,

        ]);
    }

    /**
     * Updates an existing Excel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionUpdate($id)
    // {
    //     $model = $this->findModel($id);

    //     if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     }

    //     return $this->render('update', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionApprove($id)
    {
        $model = $this->findModel($id);
        if(Yii::$app->user->identity->id_level>2 or Yii::$app->user->identity->id_level<1){
            Yii::$app->session->setFlash('danger', "Gagal, Approval hanya bisa dilakukan oleh user dengan level admin atau super admin.");
            // Yii::$app->session->setFlash('danger', Yii::$app->user->identity->id_level);
            return $this->redirect(['view', 'id' => $model->id]);

        }
        $model->approved_by = Yii::$app->user->identity->id;
        $path = $model->path;
        $source_path = $model->path;
        $jenis_excel = $model->jenis_excel;

        // if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
        if ($model->save()) {
            switch ($jenis_excel) {
                case 1:
                    // echo "sosial";
                    // $folder = dirname(__FILE__) . "/../../website-kasulampua/data/sosial/";
                    $folder = dirname(__FILE__) . "/../../data/sosial/";
                    $destination = str_replace("uploads/", $folder, $path);
                    // echo $source_path;
                    // echo "<br/>";
                    // echo $destination;
                    // die();
                    copy($source_path, $destination);
                    copy($source_path, $destination);
                    break;
                case 2:
                    // echo "ekonomi";
                    // $folder = dirname(__FILE__) . "/../../website-kasulampua/data/ekonomi/";
                    $folder = dirname(__FILE__) . "/../../data/ekonomi/";
                    $destination = str_replace("uploads/", $folder, $path);
                    copy($source_path, $destination);
                    break;
                case 3:
                    // echo "pertanian";
                    // $folder = dirname(__FILE__) . "/../../website-kasulampua/data/pertanian/";
                    $folder = dirname(__FILE__) . "/../../data/ekonomi/";
                    $destination = str_replace("uploads/", $folder, $path);
                    copy($source_path, $destination);
                    break;
            }
            Yii::$app->session->setFlash('success', "Approval berhasil dilakukan.");

        }
        return $this->redirect(['view', 'id' => $model->id]);

        // return $this->render('update', [
        //     'model' => $model,
        // ]);
    }

    /**
     * Deletes an existing Excel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $approved_by = $this->findModel($id)->approved_by;
        if(!is_null($approved_by)){
            Yii::$app->session->setFlash('danger', "Data yang sudah diapprove tidak bisa dihapus. Hubungi user dengan level super_admin jika tetap ingin menghapus");

            return $this->redirect(['index']);

        }

        $path = $this->findModel($id)->path;
        unlink($path);
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Excel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Excel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Excel::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
