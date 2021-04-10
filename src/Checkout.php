<?php

namespace App;

class Checkout
{
    public function __construct(private PaymentProcessorInterface $paymentProcessor)
    {
        //
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
