<?php
/*
 * This file is part of the Bean package.
 *
 * (c) Binh Le
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Bean\Component\Organisation\Model;

use Doctrine\Common\Collections\Collection;

/**
 * @author Binh Le <peter@bean-project.org>
 */
class Organisation
{
    /**
     * @var mixed
     */
    protected $id;

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