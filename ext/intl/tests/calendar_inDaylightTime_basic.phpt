--TEST--
IntlCalendar::inDaylightTime() basic test
--INI--
date.timezone=Atlantic/Azores
--SKIPIF--
<?php
if (!extension_loaded('intl'))
	die('skip intl extension not enabled');
--FILE--
<?php
ini_set("intl.error_level", E_WARNING);
ini_set("intl.default_locale", "nl");

$intlcal = IntlCalendar::createInstance('Europe/Amsterdam');
$intlcal->setTime(strtotime('2012-01-01') * 1000);
var_dump($intlcal->inDaylightTime());
$intlcal->setTime(strtotime('2012-04-01') * 1000);
var_dump(intlcal_in_daylight_time($intlcal));
?>
==DONE==
--EXPECT--
bool(false)
bool(true)
==DONE==