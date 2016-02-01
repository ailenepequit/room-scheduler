<?php

namespace ;

use Person;

class Faculty extends Person 
{
	private $faculty_id;
	private $academic_pos;
	private $department;
	private $college;
	private $subject_spec;

	public function setID($faculty_id) 
	{
		$this->faculty_id = $faculty_id;
	}

	public function setAcadPos($academic_pos) 
	{
		$this->academic_pos = $academic_pos;
	}

	public function setDept($department) 
	{
		$this->department = $department;
	}

	public function setCollege($college) 
	{
		$this->college = $college;
	}

	public function setSubjectSpec($subject_spec) 
	{
		$this->subject_spec = $subject_spec;
	}

	public function getID() 
	{
		return $faculty_id;
	}

	public function getAcadPos() 
	{
		return $academic_pos;
	}

	public function getDept() 
	{
		return $department;
	}

	public function getCollege() 
	{
		return $college;	
	}

	public function getSubjectSpec() 
	{
		return $subject_spec;
	}
}