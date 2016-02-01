<?php

namespace ;

class Course 
{
	private $course_code;
	private $description;
	private $units;
	private $semester;

	public function setCourseCode($course_code) 
	{
		$this->course_code = $course_code;
	}

	public function setDescription($description)
	{ 
		$this->description = $description;
	}

	public function setUnits($units) 
	{
		$this->units = $units;
	}

	public function setSemester($semester) 
	{
		$this->semester = $semester;
	}

	public function getCourseCode() 
	{
		return $this->course_code;
	}

	public function getDescription() 
	{
		return $this->description;
	}

	public function getUnits() 
	{
		return $this->units;
	}

	public function getSemester() 
	{
		return $this->semester;
	}
}