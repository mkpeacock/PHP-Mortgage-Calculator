<?php

define( "FRAMEWORK_PATH", dirname( __FILE__ ) ."/" );

require_once( 'splClassLoader.php' );
$classLoader = new SplClassLoader('CentralApps\Mortgage', FRAMEWORK_PATH );
$classLoader->register();


$calculator = new CentralApps\Mortgage\Calculator();
$calculator->setAmountBorrowed( 125000 );
$calculator->setInterestRate( 6 );
$calculator->setYears( 25 );
echo 'Monthly repayment costs &pound;' . $calculator->calculateRepayment() . '<br />';
echo 'Monthly interest-only costs &pound;' . $calculator->calculateInterestOnlyPayment();