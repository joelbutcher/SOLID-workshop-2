<?php

namespace Workshop;

use Workshop/Receipt;

class Checkout
{
    /**
     * @var string The payment method type.
     */
    private $method;

    /**
     * Create a new checkout instance
     *
     * @param  string  $method
     * @return void
     */
    public function __construct(string $method)
    {
        $this->method = $method;
    }

    /**
     * Begin acccepting a transaction for a receipt
     *
     * @param  \Workshop\Receipt  $receipt
     * @return void
     */
    public function beginTransaction(Receipt $receipt)
    {
        if ($this->method === 'stripe') {
            $this->acceptStripe($receipt);
        }

        if ($this->method === 'mollie') {
            $this->acceptMollie($receipt);
        }

        if ($this->method === 'paypal') {
            $this->acceptPayPal($receipt);
        }
    }

    /**
     * Accept a receipt and process it via Stripe
     *
     * @param  \Workshop\Receipt  $receipt
     * @return void
     */
    private function acceptStripe(Receipt $receipt)
    {
        //
    }

    /**
     * Accept a receipt and process it via Mollie
     *
     * @param  \Workshop\Receipt  $receipt
     * @return void
     */
    private function acceptMollie(Receipt $receipt)
    {
        //
    }

    /**
     * Accept a receipt and process it via PayPal
     *
     * @param  \Workshop\Receipt  $receipt
     * @return void
     */
    private function acceptPayPal(Receipt $receipt)
    {
        //
    }
}
