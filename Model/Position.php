<?php
namespace Bean\Component\Organisation\Model;

class Position
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var Organisation $organisation
     */
    protected $organisation;

    /**
     * @return Organisation
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * @param Organisation $organisation
     */
    public function setOrganisation($organisation)
    {
        $this->organisation = $organisation;
    }


}