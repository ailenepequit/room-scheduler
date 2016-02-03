<?php

namespace AppTest\RoomScheduleTest;

use PHPUnit_Framework_TestCase;
use App\Models\RoomSchedule;
use App\Models\Course;
use App\Models\Section;
use App\Models\Room;

class RoomScheduleTest extends PHPUnit_Framework_TestCase
{
	public function testSetRoomScheduleCourse()
	{
		$roomsched = new RoomSchedule();
		$course = new Course();

		$course->setCourseCode("IT 197");
		$roomsched->setCourseCode($course->getCourseCode());
		
		$this->assertEquals("IT 197", $course->getCourseCode());
		$this->assertEquals("IT 197", $roomsched->getCourseCode());
	}

	public function testSetRoomScheduleSection()
	{
		$roomsched = new RoomSchedule();
		$section = new Section();

		$section->setSectionCode("4A");
		$roomsched->setSectionCode($section->getSectionCode());
		
		$this->assertEquals("4A", $section->getSectionCode());
		$this->assertEquals("4A", $roomsched->getSectionCode());
	}

	public function testSetRoomScheduleRoom()
	{
		$roomsched = new RoomSchedule();
		$room = new Room();

		$room->setRoomName("SCS Lab A");
		$room->setBuilding("SCS");
		$roomsched->setRoomName($room->getRoomName());
		$roomsched->setBuilding($room->getBuilding());
		
		$this->assertEquals("SCS Lab A", $room->getRoomName());
		$this->assertEquals("SCS Lab A", $roomsched->getRoomName());
		$this->assertEquals($room->getBuilding(), $roomsched->getBuilding());
	}

	public function testSetRoomScheduleTimeslot()
	{
		$roomsched = new RoomSchedule();
		$roomsched->setTimeslot("9:00-10:30");
		$roomsched->setDay("M");

		$this->assertEquals("9:00-10:30", $roomsched->getTimeslot());
		$this->assertEquals("M", $roomsched->getDay());
	}
}