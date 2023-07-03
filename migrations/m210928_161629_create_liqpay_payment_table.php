<?php

namespace sillsoft\liqpay\migrations;

use yii\db\Migration;

/**
 * Handles the creation of table `{{%liqpay_payment}}`.
 */
class m210928_161629_create_liqpay_payment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%liqpay_payment}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->null(),
            'result' => $this->string()->defaultValue(null),
            'action' => $this->string()->defaultValue(null),
            'status' => $this->string()->defaultValue(null),
            'version' => $this->string()->defaultValue(null),
            'err_erc' => $this->string()->defaultValue(null),
            'type' => $this->string()->defaultValue(null),
            'token' => $this->string()->defaultValue(null),
            'paytype' => $this->string()->defaultValue(null),
            'public_key' => $this->string()->defaultValue(null),
            'acq_id' => $this->string()->defaultValue(null),
            'order_id' => $this->string()->defaultValue(null),
            'liqpay_order_id' => $this->string()->defaultValue(null),
            'description' => $this->string()->defaultValue(null),
            'sender_first_name' => $this->string()->defaultValue(null),
            'sender_last_name' => $this->string()->defaultValue(null),
            'redirect_to' => $this->string()->defaultValue(null),
            'sender_phone' => $this->string()->defaultValue(null),
            'sender_card_mask2' => $this->string()->defaultValue(null),
            'sender_card_bank' => $this->string()->defaultValue(null),
            'sender_card_type' => $this->string()->defaultValue(null),
            'sender_card_country' => $this->string()->defaultValue(null),
            'ip' => $this->string()->defaultValue(null),
            'amount' => $this->string()->defaultValue(null),
            'refund_amount' => $this->string()->defaultValue(null),
            'verifycode' => $this->string()->defaultValue(null),
            'currency' => $this->string()->defaultValue(null),
            'sender_commission' => $this->string()->defaultValue(null),
            'receiver_commission' => $this->string()->defaultValue(null),
            'agent_commission' => $this->string()->defaultValue(null),
            'amount_debit' => $this->string()->defaultValue(null),
            'amount_credit' => $this->string()->defaultValue(null),
            'commission_debit' => $this->string()->defaultValue(null),
            'commission_credit' => $this->string()->defaultValue(null),
            'currency_debit' => $this->string()->defaultValue(null),
            'currency_credit' => $this->string()->defaultValue(null),
            'sender_bonus' => $this->string()->defaultValue(null),
            'amount_bonus' => $this->string()->defaultValue(null),
            'authcode_debit' => $this->string()->defaultValue(null),
            'rrn_debit' => $this->string()->defaultValue(null),
            'mpi_eci' => $this->string()->defaultValue(null),
            'is_3ds' => $this->string()->defaultValue(null),
            'language' => $this->string()->defaultValue(null),
            'create_date' => $this->string()->defaultValue(null),
            'transaction_id' => $this->string()->defaultValue(null),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%liqpay_payment}}');
    }
}
