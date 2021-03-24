<?php

namespace App;

class Stripe implements PaymentProcessorInterface
{
    /**
     * Process a receipt via Stripe.
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
