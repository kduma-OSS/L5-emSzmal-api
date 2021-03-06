<?php

namespace KDuma\emSzmalAPI;

use DateTime;

/**
 * Class Transaction.
 */
class Transaction
{
    /**
     * @var DateTime
     */
    public $operation_date;

    /**
     * @var DateTime
     */
    public $booking_date;

    /**
     * @var float
     */
    public $amount;

    /**
     * @var float
     */
    public $balance;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $reference_number;

    /**
     * @var string
     */
    public $partner_name;

    /**
     * @var string
     */
    public $partner_account;

    /**
     * @var string
     */
    public $payment_details;

    /**
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->reference_number;
    }

    /**
     * @return DateTime
     */
    public function getOperationDate()
    {
        return $this->operation_date;
    }

    /**
     * @return DateTime
     */
    public function getBookingDate()
    {
        return $this->booking_date;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getPartnerName()
    {
        return $this->partner_name;
    }

    /**
     * @return string
     */
    public function getPartnerAccount()
    {
        return $this->partner_account;
    }

    /**
     * @return string
     */
    public function getPaymentDetails()
    {
        return $this->payment_details;
    }

    /**
     * @param string $reference_number
     *
     * @return Transaction
     */
    public function setReferenceNumber($reference_number)
    {
        $this->reference_number = $reference_number;

        return $this;
    }

    /**
     * @param DateTime $operation_date
     *
     * @return Transaction
     */
    public function setOperationDate(DateTime $operation_date)
    {
        $this->operation_date = $operation_date;

        return $this;
    }

    /**
     * @param DateTime $booking_date
     *
     * @return Transaction
     */
    public function setBookingDate(DateTime $booking_date)
    {
        $this->booking_date = $booking_date;

        return $this;
    }

    /**
     * @param float $amount
     *
     * @return Transaction
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @param float $balance
     *
     * @return Transaction
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return Transaction
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return Transaction
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param string $partner_name
     *
     * @return Transaction
     */
    public function setPartnerName($partner_name)
    {
        $this->partner_name = $partner_name;

        return $this;
    }

    /**
     * @param string $partner_account
     *
     * @return Transaction
     */
    public function setPartnerAccount($partner_account)
    {
        $this->partner_account = $partner_account;

        return $this;
    }

    /**
     * @param string $payment_details
     *
     * @return Transaction
     */
    public function setPaymentDetails($payment_details)
    {
        $this->payment_details = $payment_details;

        return $this;
    }

    /**
     * Transaction constructor.
     *
     * @param string   $reference_number
     * @param DateTime $operation_date
     * @param DateTime $booking_date
     * @param float    $amount
     * @param float    $balance
     * @param string   $type
     * @param string   $description
     * @param string   $partner_name
     * @param string   $partner_account
     * @param string   $payment_details
     */
    public function __construct($reference_number, DateTime $operation_date, DateTime $booking_date, $amount, $balance, $type, $description, $partner_name, $partner_account, $payment_details)
    {
        $this->reference_number = $reference_number;
        $this->operation_date = $operation_date;
        $this->booking_date = $booking_date;
        $this->amount = $amount;
        $this->balance = $balance;
        $this->type = $type;
        $this->description = $description;
        $this->partner_name = $partner_name;
        $this->partner_account = $partner_account;
        $this->payment_details = $payment_details;
    }
}
