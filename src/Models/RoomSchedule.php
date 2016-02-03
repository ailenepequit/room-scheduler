<?php

namespace App\Models;

class RoomSchedule 
{
	private $course_code;
	private $section_code;
	private $room_name;
	private $timeslot;
	private $day;
	private $building;

	public function __construct()
	{
		
	}

	public function setCourseCode($course_code) 
	{
		$this->course_code = $course_code;
	}

	public function setSectionCode($section_code) 
	{
		$this->section_code = $section_code;
	}

	public function setRoomName($room_name) 
	{
		$this->room_name = $room_name;
	}

	public function setTimeslot($timeslot) 
	{
		$this->timeslot = $timeslot;
	}

	public function setDay($day) 
	{
		$this->day = $day;
	}

	public function setBuilding($building) 
	{
		$this->building = $building;
	}

	public function getCourseCode() 
	{
		return $this->course_code;
	}

	public function getSectionCode() 
	{
		return $this->section_code;
	}

	public function getRoomName() 
	{
		return $this->room_name;
	}

	public function getTimeslot() 
	{
		return $this->timeslot;
	}

	public function getDay() 
	{
		return $this->day;
	}

	public function getBuilding() 
	{
		return $this->building;
	}
}