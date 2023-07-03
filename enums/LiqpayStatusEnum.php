<?php

namespace sillsoft\liqpay\enums;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * Class LiqpayStatusEnum
 * @package sillsoft\liqpay\enums
 */
enum LiqpayStatusEnum
{
    /**
     * @return array
     */
    public static function labels(): array
    {
        return [
            'error' => Yii::t('liqPay', 'status_error'),
            'failure' => Yii::t('liqPay', 'status_failure'),
            'reversed' => Yii::t('liqPay', 'status_reversed'),
            'subscribed' => Yii::t('liqPay', 'status_subscribed'),
            'success' => Yii::t('liqPay', 'status_success'),
            'unsubscribed' => Yii::t('liqPay', 'status_unsubscribed'),
            '3ds_verify' => Yii::t('liqPay', 'status_3ds_verify'),
            'captcha_verify' => Yii::t('liqPay', 'status_captcha_verify'),
            'cvv_verify' => Yii::t('liqPay', 'status_cvv_verify'),
            'ivr_verify' => Yii::t('liqPay', 'status_ivr_verify'),
            'otp_verify' => Yii::t('liqPay', 'status_otp_verify'),
            'password_verify' => Yii::t('liqPay', 'status_password_verify'),
            'phone_verify' => Yii::t('liqPay', 'status_phone_verify'),
            'pin_verify' => Yii::t('liqPay', 'status_pin_verify'),
            'receiver_verify' => Yii::t('liqPay', 'status_receiver_verify'),
            'sender_verify' => Yii::t('liqPay', 'status_sender_verify'),
            'senderapp_verify' => Yii::t('liqPay', 'status_senderapp_verify'),
            'wait_qr' => Yii::t('liqPay', 'status_wait_qr'),
            'wait_sender' => Yii::t('liqPay', 'status_wait_sender'),
            'p24_verify' => Yii::t('liqPay', 'status_p24_verify'),
            'mp_verify' => Yii::t('liqPay', 'status_mp_verify'),
            'cash_wait' => Yii::t('liqPay', 'status_cash_wait'),
            'hold_wait' => Yii::t('liqPay', 'status_hold_wait'),
            'invoice_wait' => Yii::t('liqPay', 'status_invoice_wait'),
            'prepared' => Yii::t('liqPay', 'status_prepared'),
            'processing' => Yii::t('liqPay', 'status_processing'),
            'wait_accept' => Yii::t('liqPay', 'status_wait_accept'),
            'wait_card' => Yii::t('liqPay', 'status_wait_card'),
            'wait_compensation' => Yii::t('liqPay', 'status_wait_compensation'),
            'wait_lc' => Yii::t('liqPay', 'status_wait_lc'),
            'wait_reserve' => Yii::t('liqPay', 'status_wait_reserve'),
            'wait_secure' => Yii::t('liqPay', 'status_wait_secure'),
            'try_again' => Yii::t('liqPay', 'status_try_again'),
        ];
    }

    /**
     * @param string $status
     * @return string
     * @throws \Exception
     */
    public static function label(string $status): string
    {
        return ArrayHelper::getValue(self::labels(), $status, '');
    }
}
