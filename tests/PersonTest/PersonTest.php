<?php

namespace AppTest\PersonTest;

use PHPUnit_Framework_TestCase;
use App\Models\Person;

class PersonTest extends PHPUnit_Framework_TestCase
{
	public function testSetPerson(){
		$person = new Person();
		$person->setFname("Ailene");
		$person->setLname("Pequit");
		$person->setMname("Pagaran");
		$person->setBirthdate("1995-02-09");
		$person->setStreetAddress("P-6");
		$person->setCity("Cabadbaran City");
		$person->setProvince("Agusan del Norte");
		$person->setCountry("Philippines");
		$person->setZipcode("8600");
		$person->setReligion("Aglipayan");
		$person->setGender("Female");
		$person->setMobile("09184194833");
		$person->setPhone("None");
		
		echo("\n".$person->getFullName()."\n");
		echo($person->getFname()."\n");
		echo($person->getMname()."\n");
		echo($person->getLname()."\n");
		echo($person->getBirthdate()."\n");
		echo($person->getFullAddress()."\n");
		echo($person->getStreetAddress()."\n");
		echo($person->getCity()."\n");
		echo($person->getProvince()."\n");
		echo($person->getCountry()."\n");
		echo($person->getZipcode()."\n");
		echo($person->getReligion()."\n");
		echo($person->getGender()."\n");
		echo($person->getMobile()."\n");
		echo($person->getPhone()."\n");
		$this->assertTrue(true);
	}
}