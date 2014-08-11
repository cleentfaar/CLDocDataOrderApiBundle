<?php

namespace CL\Bundle\DocDataOrderApiBundle\Model;

interface PaymentInterface
{
    /**
     * Must return a unique number/string
     * Will be used as order-reference in Docdata
     *
     * @return int|string
     */
    public function getId();

    /**
     * Must return the currency used for the amount, e.g. 'EUR'
     *
     * @return string
     */
    public function getCurrency();

    /**
     * Must return an amount in euros, optionally with decimals, e.g. '12.34'
     *
     * @return double
     */
    public function getAmount();
}
