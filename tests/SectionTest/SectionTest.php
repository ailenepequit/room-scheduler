<?php

namespace AppTest\SectionTest;

use PHPUnit_Framework_TestCase;
use App\Models\Section;

class SectionTest extends PHPUnit_Framework_TestCase
{
	public function testSetSection()
	{
		$section = new Section();

		$section->setSectionCode("IT4B");
		$section->setCourseCode("IT 109");
		$section->setClassSize(30);

		$this->assertEquals("IT4B", $section->getSectionCode());		
		$this->assertEquals("IT 109", $section->getCourseCode());
		$this->assertEquals(30, $section->getClassSize());
	}
}