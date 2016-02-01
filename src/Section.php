<?php

namespace ;

class Section
{
	private $course_code;
	private $section_code;
	private $class_size;

	public function setCourseCode() 
	{
		$this->course_code=$course_code;
	}

	public function setSectionCode() 
	{
		$this->section_code=$section_code;
	}

	public function setClassSize() 
	{
		$this->class_size=$class_size;
	}

	public function getCourseCode() 
	{
		return $this->course_code;
	}

	public function getSectionCode() 
	{
		return $this->section_code;
	}

	public function setClassSize() 
	{
		return $this->class_size;
	}
}