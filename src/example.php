<?php

require_once(__DIR__.'/CentralApps/MortgageCalculator/Calculator.php');


$calculator = new CentralApps\MortgageCalculator\Calculator();
$calculator->setAmountBorrowed( 125000 );
$calculator->setInterestRate( 6 );
$calculator->setYears( 25 );
echo 'Monthly repayment costs £' . $calculator->calculateRepayment() . PHP_EOL;
echo 'Monthly interest-only costs £' . $calculator->calculateInterestOnlyPayment() . PHP_EOL;