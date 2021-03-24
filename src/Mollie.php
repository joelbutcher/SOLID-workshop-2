<?php

namespace App;

class Mollie implements PaymentProcessorInterface
{
    /**
     * Process a receipt via Mollie.
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
