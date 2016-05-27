<?php

namespace Nanosch\LaravelSelenium;

class SeleniumTestCase extends \PHPUnit_Extensions_Selenium2TestCase
{
	use Concerns\InteractsWithPage;
}