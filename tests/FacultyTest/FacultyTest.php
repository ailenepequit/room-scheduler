<?php

namespace AppTest\FacultyTest;

use PHPUnit_Framework_TestCase;
use App\Models\Faculty;

class FacultyTest extends PHPUnit_Framework_TestCase
{
	public function testSetFaculty()
	{
		$faculty = new Faculty();

		if($faculty->getID() == null) {
			$faculty->setID("001-1100");
			$faculty->setAcadPos("Lecturer");
			$faculty->setDept("IT");
			$faculty->setCollege("SCS");
			$faculty->setSubjectSpec("Database");
		}

		if($faculty->getID() == "001-1100") {
			$this->assertEquals("Lecturer", $faculty->getAcadPos());
			$this->assertEquals("IT", $faculty->getDept());
			$this->assertEquals("SCS", $faculty->getCollege());
			$this->assertEquals("Database", $faculty->getSubjectSpec());
		}
	}
}