<?php
/**
 * This sniff checks the function naming conventions for underscores.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Patrick McKinley <patrick.mckinley@wmg.com>
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * This sniff checks the function naming conventions for underscores.
 * 
 * A public function should just use lower camel case
 * A protected function should be prefixed with _ and use lower camel case
 * A private function should be prefixed with __ and use lower camel case
 * 
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Patrick McKinley <patrick.mckinley@wmg.com>
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class WMIMagento_Sniffs_NamingConventions_FunctionsSniff extends PEAR_Sniffs_NamingConventions_ValidFunctionNameSniff
{

  

}//end class

?>