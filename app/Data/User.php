<?php

namespace App\Data;

class User
{
    private $firstName;
    private $lastName;
    private $image;
    private $title;
    private $age;
    private $license;
    private $phoneNumber;
    private $branch;

    public function __construct($firstName, $lastName, $image, $title, $age, $license, $phoneNumber, $branch)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->image = $image;
        $this->title = $title;
        $this->age = $age;
        $this->license = $license;
        $this->phoneNumber = $phoneNumber;
        $this->branch = $branch;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getLicense()
    {
        return $this->license;
    }

    public function setLicense($license)
    {
        $this->license = $license;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getBranch()
    {
        return $this->branch;
    }

    public function setBranch($branch)
    {
        $this->branch = $branch;
    }
}
