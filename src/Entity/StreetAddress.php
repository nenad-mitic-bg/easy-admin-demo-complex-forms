<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
class StreetAddress
{

    /**
     * @var string
     * @ORM\Column
     */
    private $line1;

    /**
     * @var string
     * @ORM\Column(nullable=true)
     */
    private $line2;

    /**
     * @var string
     * @ORM\Column
     */
    private $postCode;

    /**
     * @var string
     * @ORM\Column
     */
    private $city;

    /**
     * @var string
     * @ORM\Column(length=2)
     */
    private $country;

    /**
     * EasyAdmin uses __toString by default when showing stuff on list page.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->line1 . ($this->line2 ? ' ' : '') . $this->line2
                . ' ' . $this->postCode . ' ' . $this->city
                . ', ' . $this->country;
    }

    public function getLine1()
    {
        return $this->line1;
    }

    public function getLine2()
    {
        return $this->line2;
    }

    public function getPostCode()
    {
        return $this->postCode;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setLine1($line1)
    {
        $this->line1 = $line1;
    }

    public function setLine2($line2)
    {
        $this->line2 = $line2;
    }

    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

}
