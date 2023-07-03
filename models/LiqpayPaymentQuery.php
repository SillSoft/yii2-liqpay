<?php

namespace sillsoft\liqpay\models;

use yii\db\ActiveQuery;

/**
 * Class LiqpayPaymentQuery
 * @package sillsoft\liqpay\models
 */
class LiqpayPaymentQuery extends ActiveQuery
{
    /**
     * @param string $orderId
     * @return $this
     */
    public function filterByOrderId(string $orderId): self
    {
        $this->andWhere(['order_id' => $orderId]);
        return $this;
    }


    /**
     * @param string $status
     * @return $this
     */
    public function filterByStatus(string $status): self
    {
        $this->andWhere(['status' => $status]);
        return $this;
    }

    /**
     * @param int $userId
     * @return $this
     */
    public function filterByUserId(int $userId): self
    {
        $this->andWhere(['user_id' => $userId]);
        return $this;
    }
}