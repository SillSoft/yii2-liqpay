<?php

namespace sillsoft\liqpay\repositories;

use sillsoft\liqpay\models\LiqpayPayment;
use yii\base\ErrorException;

/**
 * Class LiqpayPaymentRepository
 * @package sillsoft\liqpay\repositories
 */
class LiqpayPaymentRepository
{
    /**
     * @param mixed $order_id
     * @return LiqpayPayment|null
     */
    public function findOneByOrderId(mixed $order_id): ?LiqPayPayment
    {
        return LiqPayPayment::find()
            ->filterByOrderId($order_id)
            ->one();
    }

    /**
     * @param mixed $orderId
     * @param array $data
     * @return LiqpayPayment
     * @throws ErrorException
     */
    public function createOrUpdate(mixed $orderId, array $data = []): LiqPayPayment
    {
        $paymentModel = $this->findOneByOrderId($orderId);
        if (!$paymentModel)
            $paymentModel = new LiqPayPayment();

        $paymentModel->setAttributes($data);
        $paymentModel->order_id = $orderId;
        if (!$paymentModel->save(false))
            throw new ErrorException('Can`t save payment');

        return $paymentModel;
    }
}