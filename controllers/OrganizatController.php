<?php
namespace app\controllers;

use app\controllers\AppController;
use app\models\Category;
use app\models\Organizat;
use Yii;

class OrganizatController extends AppController{

  	 function  actionView($id){
       $id = Yii::$app->request->get('id');
       $organizat = Organizat::findOne($id);
       
        return $this->render('view', compact('organizat'));
    }

}


