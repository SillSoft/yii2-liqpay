<?php

namespace sillsoft\liqpay\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "liqpay_payment".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $result
 * @property string|null $action
 * @property string|null $status
 * @property string|null $version
 * @property string|null $err_erc
 * @property string|null $type
 * @property string|null $token
 * @property string|null $paytype
 * @property string|null $public_key
 * @property string|null $acq_id
 * @property string|null $order_id
 * @property string|null $liqpay_order_id
 * @property string|null $description
 * @property string|null $sender_first_name
 * @property string|null $sender_last_name
 * @property string|null $redirect_to
 * @property string|null $sender_phone
 * @property string|null $sender_card_mask2
 * @property string|null $sender_card_bank
 * @property string|null $sender_card_type
 * @property string|null $sender_card_country
 * @property string|null $ip
 * @property string|null $amount
 * @property string|null $refund_amount
 * @property string|null $verifycode
 * @property string|null $currency
 * @property string|null $sender_commission
 * @property string|null $receiver_commission
 * @property string|null $agent_commission
 * @property string|null $amount_debit
 * @property string|null $amount_credit
 * @property string|null $commission_debit
 * @property string|null $commission_credit
 * @property string|null $currency_debit
 * @property string|null $currency_credit
 * @property string|null $sender_bonus
 * @property string|null $amount_bonus
 * @property string|null $authcode_debit
 * @property string|null $rrn_debit
 * @property string|null $mpi_eci
 * @property string|null $is_3ds
 * @property string|null $language
 * @property string|null $create_date
 * @property string|null $transaction_id
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class LiqpayPayment extends ActiveRecord
{
    /**
     * @return array
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                TimestampBehavior::class
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'liqpay_payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'created_at', 'updated_at'], 'integer'],
            [['result', 'action', 'status', 'version', 'err_erc', 'type', 'token', 'paytype', 'public_key', 'acq_id', 'order_id', 'liqpay_order_id', 'description', 'sender_first_name', 'sender_last_name', 'redirect_to', 'sender_phone', 'sender_card_mask2', 'sender_card_bank', 'sender_card_type', 'sender_card_country', 'ip', 'amount', 'refund_amount', 'verifycode', 'currency', 'sender_commission', 'receiver_commission', 'agent_commission', 'amount_debit', 'amount_credit', 'commission_debit', 'commission_credit', 'currency_debit', 'currency_credit', 'sender_bonus', 'amount_bonus', 'authcode_debit', 'rrn_debit', 'mpi_eci', 'is_3ds', 'language', 'create_date', 'transaction_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'result' => 'Result',
            'action' => 'Action',
            'status' => 'Status',
            'version' => 'Version',
            'err_erc' => 'Err Erc',
            'type' => 'Type',
            'token' => 'Token',
            'paytype' => 'Paytype',
            'public_key' => 'Public Key',
            'acq_id' => 'Acq ID',
            'order_id' => 'Order ID',
            'liqpay_order_id' => 'Liqpay Order ID',
            'description' => 'Description',
            'sender_first_name' => 'Sender First Name',
            'sender_last_name' => 'Sender Last Name',
            'redirect_to' => 'Redirect To',
            'sender_phone' => 'Sender Phone',
            'sender_card_mask2' => 'Sender Card Mask2',
            'sender_card_bank' => 'Sender Card Bank',
            'sender_card_type' => 'Sender Card Type',
            'sender_card_country' => 'Sender Card Country',
            'ip' => 'Ip',
            'amount' => 'Amount',
            'refund_amount' => 'Refund Amount',
            'verifycode' => 'Verifycode',
            'currency' => 'Currency',
            'sender_commission' => 'Sender Commission',
            'receiver_commission' => 'Receiver Commission',
            'agent_commission' => 'Agent Commission',
            'amount_debit' => 'Amount Debit',
            'amount_credit' => 'Amount Credit',
            'commission_debit' => 'Commission Debit',
            'commission_credit' => 'Commission Credit',
            'currency_debit' => 'Currency Debit',
            'currency_credit' => 'Currency Credit',
            'sender_bonus' => 'Sender Bonus',
            'amount_bonus' => 'Amount Bonus',
            'authcode_debit' => 'Authcode Debit',
            'rrn_debit' => 'Rrn Debit',
            'mpi_eci' => 'Mpi Eci',
            'is_3ds' => 'Is 3ds',
            'language' => 'Language',
            'create_date' => 'Create Date',
            'transaction_id' => 'Transaction ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return LiqpayPaymentQuery
     */
    public static function find()
    {
        return new LiqpayPaymentQuery(static::class);
    }
}