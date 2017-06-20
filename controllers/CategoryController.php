<?php
/**
 * Created by PhpStorm.
 * User: Евгений
 * Date: 25.04.2017
 * Time: 12:43
 */

namespace app\controllers;

use app\models\Category;
use app\models\Data;
use yii\rest\ActiveController;

use yii\helpers\Json;

use Yii;

class CategoryController extends \yii\rest\ActiveController
{

    public $modelClass = 'app\models\Category';

    public function actionGetcategorybyid()
    {
        $c_id = $_POST['c_id'];
        $category = Category::find()->where(array('id' => $c_id))->all();
        echo Json::encode($category);
    }

    public function actionSetcategorybyid()
    {
        $c_id = $_POST['c_id'];
        $c_name = $_POST['c_name'];
        $category = Category::find()->where(array('id' => $c_id))->one();

        if ($c_id == 0) {
            $category = new Category();
        }
        $category->name = $c_name;
        $category->save();
        echo  Json::encode($category);
    }

    public function actionDeletecategory(){
        $c_id = $_POST['c_id'];
        $category = Category::deleteAll(array('id'=>$c_id));
        $data = Data::deleteAll(array('category_id'=>$c_id));
        echo  Json::encode($category);
    }
}