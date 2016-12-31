<?php
namespace Bean\Component\Organisation\Model;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;

class Position
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var string
     */
    protected $email;

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
    
}