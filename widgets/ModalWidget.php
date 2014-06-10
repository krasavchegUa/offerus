<?php

namespace app\widgets;

use Yii;
use \yii\base\Widget;

class ModalWidget extends Widget
{
    public $modal;

    public function init()
    {

    }

    public function run()
    {
        if(!$this->modal)  return;

        $model = new \app\models\User(['scenario' => 'register']);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                Yii::$app->mail->compose('layouts/html')
                    ->setFrom('info@offerus.ru')
                    ->setTo($model->mail)
                    ->setSubject('Register')
                    ->setHtmlBody($model->generateAuthKey())
                    ->send();

                Yii::$app->session->setFlash('success', 'Model has been saved');
                Yii::$app->view->context->refresh();
            }
        }

        return $this->render('modal/'.$this->modal, [
                'model' => $model,
            ]);

    }
} 