<?php

namespace sillsoft\liqpay;

use Yii;
use yii\i18n\PhpMessageSource;

/**
 * Class Module
 * @package sillsoft\novaposhta
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'sillsoft\liqpay\controllers';

    /**
     * @var string
     */
    public $publicKey;


    /**
     * @var string
     */
    public $privateKey;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        Yii::$app->i18n->translations['liqpay'] = [
            'class' => PhpMessageSource::class,
            'sourceLanguage' => 'en-US',
            'basePath' => '@sillsoft/liqpay/messages',
        ];
    }
}