<?php

namespace App;

class Checkout
{
    /**
     * @var string The payment method type.
     */
    private $method;

    /**
     * Create a new checkout instance.
     *
     * @param  string  $method
     * @return void
     */
    public function __construct(string $method)
    {
        $this->method = $method;
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
    }

    /**
     * Process a receipt via Stripe.
     *
     * @param  \App\Receipt  $receipt
     * @return void
     */
    private function processStripe(Receipt $receipt)
    {
        //
    }

    /**
     * Process a receipt via Mollie.
     *
     * @param  \App\Receipt  $receipt
     * @return void
     */
    private function processMollie(Receipt $receipt)
    {
        //
    }

    /**
     * Process a receipt via PayPal
     *
     * @param  \App\Receipt  $receipt
     * @return void
     */
    private function processPayPal(Receipt $receipt)
    {
        //
    }
}
