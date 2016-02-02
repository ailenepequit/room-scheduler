<?php

namespace App\Models;

class Room 
{
	private $room_no;
	private $room_name;
	private $type;
	private $floor;
	private $department;
	private $building;
	private $capacity;

	public function setRoomNo($room_no) 
	{
		$this->room_no = $room_no;
	}

	public function setRoomName($room_name) 
	{
		$this->room_name = $room_name;
	}

	public function setType($type) 
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

	public function getRoomNo() 
	{
		return $this->room_no;
	}

	public function getRoomName() 
	{
		return $this->room_name;
	}

	public function getType() 
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