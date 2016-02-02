<?php

namespace App\Models;

class Section
{
	private $course_code;
	private $section_code;
	private $class_size;

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

	public function setClassSize($class_size) 
	{
		$this->class_size = $class_size;
	}

	public function getCourseCode() 
	{
		return $this->course_code;
	}

	public function getSectionCode() 
	{
		return $this->section_code;
	}

	public function getClassSize() 
	{
		return $this->class_size;
	}
}