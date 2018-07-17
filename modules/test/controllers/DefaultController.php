<?php

namespace app\modules\test\controllers;
use Yii;
use yii\web\Controller;
/**
 * Default controller for the `test` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $session = Yii::$app->session;
        $session->set('language', 'en-US');
        return $this->redirect('http://hello.test/test/default/sessiontest', 301);
    }
    public function actionSessiontest()
    {
        return $this->render('session');
    }
}
