--TEST--
IntlCalendar::getLocale(): bad arguments
--INI--
date.timezone=Atlantic/Azores
--SKIPIF--
<?php
if (!extension_loaded('intl'))
	die('skip intl extension not enabled');
--FILE--
<?php
ini_set("intl.error_level", E_WARNING);

var_dump(intlcal_get_locale(1));
?>
--EXPECTF--
Fatal error: Uncaught ArgumentCountError: intlcal_get_locale() expects exactly 2 parameters, 1 given in %s:%d
Stack trace:
#0 %s(%d): intlcal_get_locale(1)
#1 {main}
  thrown in %s on line %d
