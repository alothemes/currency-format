<?php
namespace Dfe\CurrencyFormat;
use Magento\Framework\App\ScopeInterface;
class Settings extends \Df\Core\Settings {
	/**
	 * 2015-12-30
	 * «Mage2.PRO» → «Currency» → «Format» → «Currencis»
	 * @param null|string|int|ScopeInterface $scope [optional]
	 * @return \Df\Config\A
	 */
	public function items($scope = null) {return $this->_a(__FUNCTION__, O::class, $scope);}

	/**
	 * 2015-12-26
	 * «Mage2.PRO» → «Currency» → «Format» → «Enable?»
	 * @param null|string|int|ScopeInterface $scope [optional]
	 * @return bool
	 */
	public function enable($scope = null) {return $this->b(__FUNCTION__, $scope);}

	/**
	 * 2015-12-26
	 * «Mage2.PRO» → «Currency» → «Format» → «Number of Decimals»
	 * Zend Framework автоматически округляет цены до заданного количества десятичных знаков:
		if (is_numeric($options['precision'])) {
			$value = Zend_Locale_Math::round($value, $options['precision']);
		}
	 * https://github.com/zendframework/zf1/blob/release-1.12.16/library/Zend/Locale/Format.php#L329
	 * @param null|string|int|ScopeInterface $scope [optional]
	 * @return int
	 */
	public function showDecimals($scope = null) {
		return !$this->enable($scope) || $this->b(__FUNCTION__, $scope);
	}

	/**
	 * @override
	 * @used-by \Df\Core\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'dfe_currency/format/';}

	/** @return $this */
	public static function s() {static $r; return $r ? $r : $r = df_o(__CLASS__);}
}