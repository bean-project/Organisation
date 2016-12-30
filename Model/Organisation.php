<?php
namespace Bean\Component\Organisation\Model;

use Doctrine\Common\Collections\Collection;

class Organisation
{
    /**
     * @var Collection
     */
    protected $positions;

    public function addPosition(Position $position)
    {
        $this->positions->add($position);
        $position->setOrganisation($this);
    }

    public function removePosition(Position $position)
    {
        $this->positions->removeElement($position);
        $position->setOrganisation(null);
    }
}