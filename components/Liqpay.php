<?php

namespace sillsoft\liqpay\components;

use Yii;

/**
 * Class Liqpay
 * @package sillsoft\liqpay\components
 */
class Liqpay
{

    /**
     * @var LiqpayApi
     */
    protected $api;

    /**
     * @return void
     */
    public function __construct()
    {
        $module = Yii::$app->getModule('liqpay');
        $this->api = new LiqPayApi($module->publicKey, $module->privateKey);;
    }

    /**
     * @param array $data
     * @param bool $autosubmit
     * @param string $formId
     * @return string
     */
    public function renderPaymentForm(array $data, bool $autosubmit = true, string $formId = 'LiqPay-form')
    {
        return $this->api->cnb_form(
            array_merge(
                [
                    'version' => '3',
                    'language' => 'en',
                ],
                $data
            ),
            $formId,
            $autosubmit
        );
    }

    /**
     * @param string $orderId
     * @return mixed
     */
    public function getPaymentStatus(string $orderId)
    {
        return $this->api->api("request", array(
            'action' => 'status',
            'version' => LiqpayApi::SUPPORT_VERSION,
            'order_id' => $orderId
        ));
    }
}