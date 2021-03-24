<?php

namespace Tests;

use App/Checkout;
use App/Mollie;
use App/PayPal;
use App/Receipt;
use App/Stripe;
use PHPUnit/Framework/TestCase;

class CheckoutTest extends TestCase
{

    /**
     * @test
     */
    public function itCallsAcceptForStripe()
    {
        $receipt = new Receipt;
        $stripe = \Mockery::mock(Stripe::class);
        $stripe->shouldReceive('accept')->once()->andReturn($receipt)

        $checkout = new Checkout($stripe);
        $this->assertNull($checkout->beginTransaction($receipt));
        
    }
  
    /**
     * @test
     */
    public function itCallsAcceptForMollie()
    {
        $receipt = new Receipt;
        $mollie = \Mockery::mock(Mollie::class);
        $mollie->shouldReceive('accept')->once()->andReturn($receipt)

        $checkout = new Checkout($mollie);
        $this->assertNull($checkout->beginTransaction($receipt));
        
    }
  
    /**
     * @test
     */
    public function itCallsAcceptForPayPal()
    {
        $receipt = new Receipt;
        $payPal = \Mockery::mock(PayPal::class);
        $payPal->shouldReceive('accept')->once()->andReturn($receipt)

        $checkout = new Checkout($payPal);
        $this->assertNull($checkout->beginTransaction($receipt));
        
    }
}
