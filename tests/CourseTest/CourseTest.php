<?php

namespace AppTest\FacultyTest;

use PHPUnit_Framework_TestCase;
use App\Models\Course;

class CourseTest extends PHPUnit_Framework_TestCase
{
	public function testSetCourse(){
		$course = new Course();

		$course->setCourseCode("IT 197");
		$course->setDescription("Supervised On-the-Job Training");
		$course->setUnits(12);
		$course->setSemester("2nd");

		$this->assertEquals("IT 197", $course->getCourseCode());
	
		if($course->getCourseCode() == "IT 197") {
			$this->assertEquals("Supervised On-the-Job Training", $course->getDescription());
			$this->assertEquals(12, $course->getUnits());
			$this->assertEquals("2nd", $course->getSemester());
		}
	}
}