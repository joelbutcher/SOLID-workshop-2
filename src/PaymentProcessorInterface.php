<?php

nanespace App;

interface PaymentProcessorInterface
{
    /**
     * Process a receipt.
     *    
     * @param  \App\Receipt  $receipt
     * @return \App\Receipt
     */
    public function process(Receipt $receipt);
}
