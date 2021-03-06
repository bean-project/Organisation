<?php
namespace Bean\Component\Organisation\Model;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @deprecated
 */
class Position
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $firstname;

    /**
     * @var string|null
     */
    protected $lastname;

    /**
     * @var array
     */
    protected $roles = array();
    
    public function addRole($role)
    {
        $role = strtoupper($role);
        if (in_array($role, $this->roles)) {
            return $this->roles;
        }
        $this->roles[] = $role;
        return $this->roles;
    }

    public function removeRole($role)
    {
        $role = strtoupper($role);
        $key = array_search($role, $this->roles);
        array_splice($this->roles, $key, 1);
        return $this->roles;
    }


    /**
     * @var Organisation $employer
     */
    protected $employer;


    /**
     * @var AdvancedUserInterface $employee
     */
    protected $employee;


    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return Organisation
     */
    public function getEmployer()
    {
        return $this->employer;
    }

    /**
     * @param Organisation $employer
     */
    public function setEmployer($employer)
    {
        $this->employer = $employer;
    }

    /**
     * @return AdvancedUserInterface
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * @param AdvancedUserInterface $employee
     */
    public function setEmployee($employee)
    {
        $this->employee = $employee;
    }

    /**
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param string|null $firstname
     */
    public function setFirstname(?string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param string|null $lastname
     */
    public function setLastname(?string $lastname): void
    {
        $this->lastname = $lastname;
    }
}