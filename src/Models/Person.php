<?php

namespace App\Models;

class Person 
{
	private $fname;
	private $lname;
	private $mname;
	private $birthdate;
	private $strtaddress;
	private $city;
	private $province;
	private $country;
	private $zipcode;
	private $religion;
	private $gender;
	private $mobile;
	private $phone;

	public function __construct() 
	{
		
	}

	public function setFname($fname) 
	{
		$this->fname = $fname;
	}

	public function setLname($lname) 
	{
		$this->lname = $lname;
	}

	public function setMname($mname) 
	{
		$this->mname = $mname;
	}

	public function setStreetAddress($strtaddress) 
	{
		$this->strtaddress = $strtaddress;
	}

	public function setCity($city) 
	{
		$this->city = $city;
	}

	public function setProvince($province) 
	{
		$this->province = $province;
	}

	public function setCountry($country)
	{
		$this->country = $country;
	}

	public function setZipcode($zipcode) 
	{
		$this->zipcode = $zipcode;
	}

	public function setMobile($mobile) 
	{
		$this->mobile = $mobile;
	}

	public function setPhone($phone) 
	{
		$this->phone = $phone;
	}

	public function setBirthdate($birthdate) 
	{
		$this->birthdate = $birthdate;
	}

	public function setReligion($religion) 
	{
		$this->religion = $religion;
	}

	public function setGender($gender) 
	{
		$this->gender = $gender;
	}

	public function getFullName() 
	{
		return $this->fname . " " . $this->mname . " ". $this->lname;
	}

	public function getFname() 
	{
		return $this->fname;
	}

	public function getLname() 
	{
		return $this->lname;
	}

	public function getMname() 
	{
		return $this->mname;
	}

	public function getFullAddress() 
	{
		return $this->strtaddress . " " . $this->city . ", " . $this->province . ", ". $this->country . " " . $this->zipcode;
	}

	public function getStreetAddress() 
	{
		return $this->strtaddress;
	}

	public function getCity() 
	{
		return $this->city;
	}
	
	public function getProvince() 
	{
		return $this->province;
	}

	public function getCountry() 
	{
		return $this->country;
	}

	public function getZipcode() 
	{
		return $this->zipcode;
	}
	public function getMobile() 
	{
		 return $this->mobile;
	}

	public function getPhone() 
	{
		 return $this->phone;
	}

	public function getBirthdate() 
	{
		 return $this->birthdate;
	}
	
	public function getReligion() 
	{
		 return $this->religion;
	}

	public function getGender()
	{
		 return $this->gender;
	}
}
