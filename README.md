Yii2 Liqpay
===========
https://www.liqpay.ua/

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist sillsoft/yii2-liqpay "*"
```

or add

```
"sillsoft/yii2-liqpay": "*"
```

to the require section of your `composer.json` file.


Usage
-----

config.php:

```php
'modules' => [
    'liqpay' => [
                'class' => 'sillsoft\liqpay\Module',
                'publicKey' => '',
                'privateKey' => '',
    ],
]
```

Controller

```php
$order_id = 1;

$repository = Yii::$container->get(LiqPayPaymentRepository::class);
$orderModel = $repository->createOrUpdate($order_id);

$liqpay = Yii::$container->get(Liqpay::class);
return $liqpay->renderPaymentForm([
            'amount' => 10,
            'currency' => 'UAH',
            'description' => Yii::t('frontend', 'Оплата за товари'),
            'order_id' => $order_id,
            'language' => Yii::$app->language,
            'result_url' => Yii::$app->urlManager->createAbsoluteUrl(['/checkout/thanks']),
            'server_url' => Yii::$app->urlManager->createAbsoluteUrl(['/liq-pay/server']),
        ]);
```


Callback

```php
  public function actionServer(): Response
    {
        $request = Yii::$app->getRequest();
        if ($request->getIsPost()) {

            $data = $request->post('data');

            $orderId = ArrayHelper::getValue($data, 'order_id', false);
            $data = json_decode(base64_decode($data), true);

            $repository = Yii::$container->get(LiqPayPaymentRepository::class);
            $orderModel = $repository->findOneByOrderId($orderId);
            if (!$orderModel)
                throw new ErrorException("Payment By Order Id $orderId not found");


            $repository = Yii::$container->get(LiqPayPaymentRepository::class);
            $repository->createOrUpdate($orderId, $data);
            return $this->asJson([
                'success' => true
            ]);
        }
        throw new BadRequestHttpException();
    }
```


