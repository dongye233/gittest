<?php

namespace app\controllers;

use Yii;
use app\models\Country;
use app\models\CountrySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;

/**
 * CountryController implements the CRUD actions for Country model.
 */
class CountrysController extends ActiveController
{
    public $modelClass = 'app\models\Country';
}