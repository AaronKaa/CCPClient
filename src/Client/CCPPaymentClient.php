<?php
namespace AKaa\CCPApi\Client;

/**
 * CCPPaymentClient class.
 *
 * @extends CCPSoapClient
 */
class CCPPaymentClient extends CCPSoapClient
{
    protected $servicepoint = "CCPApiPaymentService.svc";
}
