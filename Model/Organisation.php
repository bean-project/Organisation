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
     * @var boolean
     */
    protected $enabled;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $slug;

    /**
     * @var Collection $locations
     */
    protected $locations;

    /**
     * @var Collection
     * @deprecated
     */
    protected $positions;
	
	/**
	 * @param Position $position
	 * @deprecated
	 */
    public function addPosition(Position $position)
    {
        $this->positions->add($position);
        $position->setEmployer($this);
    }
	
	/**
	 * @param Position $position
	 * @deprecated
	 */
    public function removePosition(Position $position)
    {
        $this->positions->removeElement($position);
        $position->setEmployer(null);
    }
	
	/**
	 * @var Collection
	 */
	protected $employments;
	
	public function addEmployment(Employment $employment)
	{
		$this->employments->add($employment);
		$employment->setEmployer($this);
	}
	
	public function removeEmployment(Employment $employment)
	{
		$this->employments->removeElement($employment);
		$employment->setEmployer(null);
	}
	
	
	/**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return Collection
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * @param Collection $locations
     */
    public function setLocations($locations)
    {
        $this->locations = $locations;
    }

    /**
     * @return Collection
     * @deprecated
     */
    public function getPositions()
    {
        return $this->positions;
    }

    /**
     * @param Collection $positions
     * @deprecated
     */
    public function setPositions($positions)
    {
        $this->positions = $positions;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }
	
	/**
	 * @return Collection
	 */
	public function getEmployments() {
		return $this->employments;
	}
	
	/**
	 * @param Collection $employments
	 */
	public function setEmployments($employments) {
		$this->employments = $employments;
	}
	
}