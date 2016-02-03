<?php

namespace AppTest\RoomTest;

use PHPUnit_Framework_TestCase;
use App\Models\Room;

class RoomTest extends PHPUnit_Framework_TestCase
{
	public function testSetRoom()
	{
		$room = new Room();
		$room->setRoomName("ICT-103");
		$room->setRoomType("Lecture");
		$room->setFloor("First Floor");
		$room->setDept("IT Department");
		$room->setBuilding("School of Computer Studies");
		$room->setCapacity(30);

		$this->assertEquals("ICT-103", $room->getRoomName());
		$this->assertEquals("Lecture", $room->getRoomType());
		$this->assertEquals("First Floor", $room->getFloor());
		$this->assertEquals("IT Department", $room->getDept());
		$this->assertEquals("School of Computer Studies", $room->getBuilding());
		$this->assertEquals(30, $room->getCapacity());
	}
}