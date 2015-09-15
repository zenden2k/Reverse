<?php
namespace Zenden2k\Reverse\Test;

use Zenden2k\Reverse\StringUtils;

class StringUtilsTest extends \PHPUnit_Framework_TestCase
{
    public function testReverse()
    {
        $this->assertEquals('!dlrw llH', StringUtils::Reverse('Hello world!'));
        $this->assertEquals('', StringUtils::Reverse(''));
        $this->assertEquals('!рм ,тврП', StringUtils::Reverse('Привет, мир!'));
        $this->assertEquals(' .ql ngm rld t rbl t tnddcn rpmt dms d ds ,tl gncspd rttcsnc ,tm ts rld msp mrL', StringUtils::Reverse('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. '));
    }
}