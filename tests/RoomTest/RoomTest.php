<?php

namespace AppTest\SectionTest;

use PHPUnit_Framework_TestCase;
use App\Models\Section;

class RoomTest extends PHPUnit_Framework_TestCase
{
	public function testSetRoom()
	{
		$room = new Room();
		$room->setRoomName("ICT-103");
		$room->setRoomType("Lecture");
		$room->setFloor("First Floor");
		$room->setDepartment("IT Department");
		$room->setBuilding("School of Computer Studies")
		$room->setCapacity(30);

		$this->assetEquals("ICT-103", $room->getRoomName());
		$this->assetEquals("Lecture", $room->getRoomType());
		$this->assetEquals("First Floor", $room->getFloor());
		$this->assetEquals("IT Department", $room->getDepartment());
		$this->assetEquals("School of Computer Studies", $room->getBuilding());
		$this->assetEquals(30, $room->getCapacity());
	}
}