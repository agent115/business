<?php

namespace app\models;
use yii\db\ActiveRecord;

class Organizat extends ActiveRecord{
    
    public static function tableName() {
        return 'organizat';
    }
    public function getCategory(){
        return $this->hasOne(organizat::className(), ['id' => 'category_id']);
    }
    
    
}