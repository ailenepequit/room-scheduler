<?php

namespace AppTest\SectionTest;

use PHPUnit_Framework_TestCase;
use App\Models\Section;

class SectionTest extends PHPUnit_Framework_TestCase
{
	public function testSetSection()
	{
		$section = new Section();
		$section->setSectionCode("ailene");
		$this->assertEquals("ailene", $section->getSectionCode());
	}
}