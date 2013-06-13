<?php
namespace CentralApps\MortgageCalculator;

/**
 * PHP Mortgage Calculator Class
 * @author Michael Peacock
 * @url www.michaelpeacock.co.uk
 */
class Calculator {

    /**
     * The amount borrowed
     * @access private
     */
    private $amountBorrowed = 0;

    /**
     * The interest rate
     * @access private
     */
    private $interestRate = 0;

    /**
     * Number of years to spread mortgage across
     * @access private
     */
    private $years = 0;

    public function __construct() {}

    /**
     * Calculates the monthly cost of an interest only mortgage
     * @return int
     */
    public function calculateInterestOnlyPayment()
    {
        $payment = ( $this->amountBorrowed * $this->interestRate ) / 12;
        return round($payment,2);
    }

    /**
     * Calculates the monthly cost of a repayment mortgage
     * @return int
     */
    public function calculateRepayment()
    {
        $payment = ( $this->amountBorrowed * $this->interestRate ) / ( 1 - pow( ( 1 + $this->interestRate ), -$this->years ) ) / 12; 
        return round($payment,2);
    }

    /**
     * Sets the amount borrowed
     * @param int $amount the amount borrowed
     * @return void
     */
    public function setAmountBorrowed( $amount )
    {
        $this->amountBorrowed = $amount;
    }

    /**
     * Sets the interest rate to calculate against
     * @param int $rate the interest rate
     * @return void
     */
    public function setInterestRate( $rate )
    {
        $this->interestRate = ( $rate / 100 );
    }

    /**
     * Set the number of years to spread the mortgage across
     * @param int $years the number of years
     * @return void
     */
    public function setYears( $years )
    {
        $this->years = $years;
    }

    /**
     * Calculate the number of monthly payments
     * @return int
     */
    private function numberOfPayments()
    {
        return $this->years / 12;
    }

    /**
     * Calculate the amount of mortgage remaining based off how long remains
     * @param int $monthsLeft the number of months left on the mortgage
     * @return int
     */
    private function calculateRemainingAmount( $monthsLeft )
    {
        return $this->calculateRepayment() * $monthsLeft;
    }
}