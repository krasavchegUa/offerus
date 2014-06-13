<?php
use yii\helpers\Html;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <h1><?php echo Yii::t('app/user', 'mail title'); ?></h1>
    <p><?php echo Yii::t('app/user', 'mail happy'); ?></p>
    <p><?php echo Yii::t('app/user', 'Click <a href="{link}">here</a> to continue', [
                'link' => \Yii::$app->urlManager->createAbsoluteUrl(['site/register',
                            ['mail' => $this->params['model']->mail, 'authkey' => $this->params['model']->generateAuthKey()]
                        ])
            ]); ?></p>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
