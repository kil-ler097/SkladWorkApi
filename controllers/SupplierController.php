<?php
/**
 * Created by PhpStorm.
 * User: Евгений
 * Date: 25.04.2017
 * Time: 12:43
 */

namespace app\controllers;

use yii\rest\ActiveController;

use app\models\SupplierData;
use app\models\Data;
use yii\helpers\Json;

use Yii;

class SupplierController extends \yii\rest\ActiveController
{

    public $modelClass = 'app\models\SupplierData';


    public function actionGetsupplierbyid(){
        $s_id = $_POST['sup_id'];
        $model = SupplierData::find()->where(array('id'=>$s_id))->all();
        echo  Json::encode($model);
    }

    public function actionSetsupplierbyid(){

        $sup_id = $_POST['sup_id'];
        $sup_name = $_POST['sup_name'];
        $sup_data = $_POST['sup_data'];
        $supplier = new SupplierData();
        if ($sup_id != 0){
            $supplier = SupplierData::find()->where(array('id'=>$sup_id))->one();
        }
        $supplier->name = $sup_name;
        $supplier->data = $sup_data;
        $supplier->save();

        echo  Json::encode($supplier);
    }

    public function actionDeletesupplier(){
        $sup_id = $_POST['sup_id'];
        $supplier = SupplierData::deleteAll(array('id'=>$sup_id));
        $data = Data::deleteAll(array('sup_id'=>$sup_id));
        echo  Json::encode($supplier);
    }}