<?php

namespace App;

class Checkout
{
    /**
     * @var \App\PaymentProcessorInterface
     */
    private $paymentProcessor;

    /**
     * Create a new checkout instance.
     *
     * @param  \App\PaymentProcessorInterface  $paymentProcessor
     * @return void
     */
    public function __construct(PaymentProcessorInterface $paymentProcessor)
    {
        $this->paymentProcessor = $paymentProcessor;
    }

    /**
     * Begin acccepting a transaction for a receipt.
     *
     * @param  \App\Receipt  $receipt
     * @return void
     */
    public function process(Receipt $receipt)
    {
        return $this->paymentProcessor->process($receipt);
    }
}
