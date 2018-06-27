<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/9
 * Time: 10:47
 */

namespace backend\controllers;

use common\controllers\BaseController;
use backend\components\AccessControl;

class AdminBaseController extends BaseController
{
    public function behaviors()
    {
//        return parent::behaviors(); // TODO: Change the autogenerated stub
        return [
            'as access' => [
                'class' => AccessControl::class,
            ],
        ];
    }
}