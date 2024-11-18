<?php
namespace Fabricio\Test\Domain\Model;

/*
 * This file is part of the Fabricio.Test package.
 */

use Neos\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Contacts
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $number;


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return void
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }
}
