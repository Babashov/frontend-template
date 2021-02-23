<?php


namespace common\components;

use yii\db\BaseActiveRecord;

class Helper
{
    public static function simpleArray($initial_array)
    {
        $final_array = [];

        foreach($initial_array as $new_array)
        {
            $final_array[] = implode(',', $new_array);
        }
        return $final_array;
    }

    public static function getDataByTableAndLang($table = "settings",$langId = 1,$queryType = 'queryOne',$querySelect="*",$convertSimpleArr=false)
    {
        $table_data = \Yii::$app->db->createCommand("Select ${querySelect} from ${table} where lang_id=${langId}")->$queryType();
        $table_data = $table_data?:\Yii::$app->db->createCommand("Select ${querySelect} from ${table} where lang_id=1")->$queryType();
        if($convertSimpleArr)
        {
           return self::simpleArray($table_data);
        }else{
            return $table_data;
        }
    }

    public static function changeLanguageNameToReadable($langCode = "az")
    {
        $table_data = \Yii::$app->db->createCommand("Select name,code from languages where code='${langCode}'")->queryOne();
        $table_data_full = self::simpleArray(\Yii::$app->db->createCommand("Select name,code from languages where code!='${langCode}'")->queryAll());
        $default_language = $table_data['name'] . ',' . $table_data['code'];
        array_unshift($table_data_full,$default_language);
//        print_r($table_data_full);
        return $table_data_full;
    }

    public static function checkModelFind($modelName,$methodName,$defaultCondition,$newCondition)
    {
        $modelCheck = $modelName::$methodName($defaultCondition);
        if(!$modelCheck) $modelCheck = $modelName::$methodName($newCondition);
        return $modelCheck;
    }

}