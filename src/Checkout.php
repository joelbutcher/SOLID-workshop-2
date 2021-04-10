<?php

namespace App;

class Checkout
{
    public function __construct(private string $method)
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
        if ($this->method === 'stripe') {
            $this->processStripe($receipt);
        }

        if ($this->method === 'mollie') {
            $this->processMollie($receipt);
        }

        if ($this->method === 'paypal') {
            $this->processPayPal($receipt);
        }

        return $receipt;
    }

    /**
     * Process a receipt via Stripe.
     *
     * @param  \App\Receipt  $receipt
     * @return void
     */
    private function processStripe(Receipt &$receipt)
    {
        //
    }

    /**
     * Process a receipt via Mollie.
     *
     * @param  \App\Receipt  $receipt
     * @return void
     */
    private function processMollie(Receipt &$receipt)
    {
        //
    }

    /**
     * Process a receipt via PayPal.
     *
     * @param  \App\Receipt  $receipt
     * @return void
     */
    private function processPayPal(Receipt &$receipt)
    {
        //
    }
}
