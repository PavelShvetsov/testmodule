<?php

namespace app\components;
use Yii;
use yii\caching\TagDependency;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\web\NotFoundHttpException;
use yii\web\UrlRuleInterface;


class TestRule implements UrlRuleInterface
{
    public function parseRequest($manager, $request)
    {
        $url = $request->getPathInfo();
        if (empty($url)) {
            return false;
        }
        $params = [];
        //$params = Json::encode($request->getQueryParams());

        $parts_url = explode('/',$url);
        $arPageLinks = ['1'=>'test','2'=>'test2'];

        if(!in_array($parts_url[1],$arPageLinks)){
            return false;
        }

        $data['result'] = [
            'test/test/list',
            $params
        ];
        return $data['result'];
    }

    public function createUrl($manager, $route, $params)
    {
        $arPageLinks = [1 => 'test',2 => 'test2'];
        $parts_url = explode('/',$route);
        if (!in_array($parts_url[1],$arPageLinks) || isset($params['id']) === false) {
            return false;
        }
        $url = $arPageLinks[$params['id']];
        if($url !== false){
            return $url;
        }
        return false;
    }
}