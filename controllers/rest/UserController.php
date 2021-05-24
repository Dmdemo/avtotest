<?

namespace app\controllers\rest;

use Yii;
use yii\rest\ActiveController;
use app\models\User;
use app\models\Basket;
use app\models\Product;
use yii\filters\auth\HttpBasicAuth;

use yii\filters\AccessControl;


class UserController extends ActiveController
{

    public $modelClass = 'app\models\User';



    public function Init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
    }


    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBasicAuth::className(),
            'auth'  => function ($username, $password) {
                if (
                    $user = User::find()->where(['username' => $username])->One() and
                    $user->validatePassword($password)
                ) {
                    return $user;
                }
                return null;
            }
        ];
        $behaviors['access'] = [
            'class' => AccessControl::class,
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ],
        ];
        return $behaviors;
    }



    public function actionBasket($id)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $basket = new Basket();
        $basket_id = $basket->find()->where(['id_user' => $id])->All();

        return $basket_id;
    }


    public function actionProduct($id)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $product = new Product();
        $product_id = $product->find()->where(['number' => $id])->One();

        return $product_id;
    }

    public function actionSearchproductbyname($name)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $product = new Product();
        $product_id = $product->find()->where(['like', 'name', $name])->all();

        return $product_id;
    }

    public function actionBasketadd($userid, $productid, $count)
    {
        $identity = Yii::$app->user->identity->id;

        if ($identity == $userid) {

            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $basket = new Basket();
            $basket->id_user = $userid;
            $basket->id_product = $productid;
            $basket->count = $count;

            $product = Product::find()->where(['number' => $productid])->one();
            $basket->item_price = $product->price;
            $basket->save();

            return ['message' => 'Добавлено в корзину: ' . $product->name];
        } else {
            return ['message' => 'Продукт не добавлен в корзину'];
        }
    }
}
