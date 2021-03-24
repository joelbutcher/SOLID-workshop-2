<?php

namespace App;

class PayPal implements PaymentProcessorInterface
{
    /**
     * Process a receipt via PayPal.
     *
     * @param  \App\Receipt  $receipt
     * @return \App\Receipt
     */
    public function process(Receipt &$receipt)
    {
        // Logic

        return $receipt;
    }
}
