<?php

namespace App\Models;

class Room 
{
	private $room_name;
	private $type;
	private $floor;
	private $department;
	private $building;
	private $capacity;

	public function setRoomName($room_name) 
	{
		$this->room_name = $room_name;
	}

	public function setRoomType($type) 
	{
		$this->type = $type;
	}

	public function setFloor($floor) 
	{
		$this->floor = $floor;
	}

	public function setDept($department) 
	{
		$this->department = $department;
	}

	public function setBuilding($building) 
	{
		$this->building = $building;
	}

	public function setCapacity($capacity) 
	{
		$this->capacity = $capacity;
	}

	public function getRoomName() 
	{
		return $this->room_name;
	}

	public function getRoomType() 
	{
		return $this->type;
	}

	public function getFloor() 
	{
		return $this->floor;
	}

	public function getDept() 
	{
		return $this->department;
	}

	public function getBuilding() 
	{
		return $this->building;
	}

	public function getCapacity() 
	{
		return $this->capacity;
	}
}