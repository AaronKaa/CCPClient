<?php
namespace AKaa\CCPApi\Client;

/**
 * PaymentClient class.
 *
 * @extends CCPSoapClient
 */
class PaymentClient extends CCPSoapClient
{
    protected $servicepoint = "CCPApiPaymentService.svc";
}
