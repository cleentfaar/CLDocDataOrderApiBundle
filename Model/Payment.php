<?php

namespace CL\Bundle\DocDataOrderApiBundle\Model;

class Payment implements PaymentInterface
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var string
     */
    private $currency = 'EUR';

    /**
     * @var double
     */
    private $amount;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param double $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * {@inheritdoc}
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
