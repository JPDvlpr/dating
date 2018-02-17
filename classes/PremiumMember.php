<?php

/**
 * Class PremiumMember
 * has
 */
class PremiumMember extends Member
{
    protected $inDoorInterests = [];
    protected $outdoorInterests = [];

    /**
     * @return array
     */
    function getInDoorInterests()
    {
        return $this->inDoorInterests;
    }

    /**
     * @param array $inDoorInterests
     */
    function setInDoorInterests($inDoorInterests)
    {
        $this->inDoorInterests = $inDoorInterests;
    }

    /**
     * @return array
     */
    function getOutdoorInterests()
    {
        return $this->outdoorInterests;
    }

    /**
     * @param array $outdoorInterests
     */
    function setOutdoorInterests($outdoorInterests)
    {
        $this->outdoorInterests = $outdoorInterests;
    }
}