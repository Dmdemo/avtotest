<?

namespace app\api\modules\v1\controllers;
use Yii;
use yii\rest\ActiveController;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;
use yii\helpers\ArrayHelper;
class UserController extends ActiveController
{
    
public $modelClass = 'app\models\User';

/*public function behaviors()
{
return [
'verbs' => [
'class' => VerbFilter::className(),
'actions' => [
'index'=>['get'],
'view'=>['get'],
'create'=>['post'],
'update'=>['post'],
'delete' => ['delete'],
'deleteall'=>['post'],
],

]
];
} */
//Other functions after that

public function actionView($id)
{
  /*
\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
$model=$this->findModel($id);
print_r($model);die; 
$this->setHeader(200);
echo json_encode(array('status'=>1,'data'=>array_filter($model->attributes)),JSON_PRETTY_PRINT);
*/
//echo json_encode(array('status'=>1,'data'=>$_GET['id']),JSON_PRETTY_PRINT);
\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
return json_encode(array('status'=>1,'data'=>2),JSON_PRETTY_PRINT);

}
}