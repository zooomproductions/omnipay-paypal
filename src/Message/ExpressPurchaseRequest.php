<?php

namespace Omnipay\PayPal\Message;

/**
 * PayPal Express Purchase Request
 */
class ExpressPurchaseRequest extends ExpressAuthorizeRequest
{

    public function getAllowedPaymentMethod()
    {
        return $this->getParameter('allowedPaymentMethod');
    }

    public function setAllowedPaymentMethod($value)
    {
        return $this->setParameter('allowedPaymentMethod', $value);
    }

    public function getData()
    {
        $data = parent::getData();
        $data['PAYMENTREQUEST_0_PAYMENTACTION'] = 'Sale';
        $data['PAYMENTREQUEST_0_ALLOWEDPAYMENTMETHOD'] = $this->getAllowedPaymentMethod();
        return $data;
    }
}
