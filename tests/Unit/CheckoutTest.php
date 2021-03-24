<?php

namespace Tests;

use App\Checkout;
use App\Mollie;
use App\PayPal;
use App\Receipt;
use App\Stripe;
use PHPUnit\Framework\TestCase;

class CheckoutTest extends TestCase
{
    /**
     * @test
     */
    public function itCallsProcessForStripe()
    {
        $receipt = new Receipt;
        $stripe = \Mockery::mock(Stripe::class);
        $stripe->shouldReceive('process')->once()->andReturn($receipt);

        $checkout = new Checkout($stripe);
        $this->assertEquals($receipt, $checkout->process($receipt));
    }

    /**
     * @test
     */
    public function itCallsProcessForMollie()
    {
        $receipt = new Receipt;
        $mollie = \Mockery::mock(Mollie::class);
        $mollie->shouldReceive('process')->once()->andReturn($receipt);

        $checkout = new Checkout($mollie);
        $this->assertEquals($receipt, $checkout->process($receipt));
    }

    /**
     * @test
     */
    public function itCallsProcessForPayPal()
    {
        $receipt = new Receipt;
        $payPal = \Mockery::mock(PayPal::class);
        $payPal->shouldReceive('process')->once()->andReturn($receipt);

        $checkout = new Checkout($payPal);
        $this->assertEquals($receipt, $checkout->process($receipt));
    }
}
