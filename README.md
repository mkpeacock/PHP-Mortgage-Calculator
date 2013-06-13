# PHP Mortgage Calculator

Calculates monthly repayment and monthly interest-only costs for a mortgage.

## Example

	require_once 'vendor/autoload.php';
	$calculator = new CentralApps\MortgageCalculator\Calculator();
	$calculator->setAmountBorrowed( 125000 );
	$calculator->setInterestRate( 6 );
	$calculator->setYears( 25 );
	echo 'Monthly repayment costs £' . $calculator->calculateRepayment() . PHP_EOL;
	echo 'Monthly interest-only costs £' . $calculator->calculateInterestOnlyPayment() . PHP_EOL;

## Change log

- Cleaned up some code, added composer.json support
- Initial version of the library

## Todo

- Abstract mortgage to a separate class, support calculating things like repayment time left, total repayment amount, and so on