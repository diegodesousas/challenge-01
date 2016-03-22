<?php

namespace ChallengeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Details
 *
 * @ORM\Table(name="details")
 * @ORM\Entity(repositoryClass="ChallengeBundle\Repository\DetailsRepository")
 */
class Details
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=15)
     * @Assert\NotBlank(message="Informe o RG.")
     */
    private $rg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expeditionDate", type="date")
     * @Assert\NotBlank(message="Informe a data de expedição.")
     */
    private $expeditionDate;

    /**
     * @ORM\Column(name="shiiper", type="string", length=255)
     * @Assert\NotBlank(message="Informe o orgão expedidor.")
     */
    private $shiiper;

    /**
     * @ORM\ManyToOne(targetEntity="MaritalStatus")
     * @ORM\JoinColumn(name="marital_status_id", referencedColumnName="id")
     * @Assert\NotBlank(message="Informe o estado civíl.")
     */
    private $maritalStatus;

    /**
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * @Assert\NotBlank(message="Informe a categoria.")
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255, nullable=true)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=255)
     * @Assert\NotBlank(message="Informe a profissão.")
     */
    private $profession;

    /**
     * @var float
     *
     * @ORM\Column(name="income", type="float")
     * @Assert\NotBlank(message="Informe a renda bruta.")
     */
    private $income;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rg
     *
     * @param string $rg
     *
     * @return Details
     */
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get rg
     *
     * @return string
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set expeditionDate
     *
     * @param \DateTime $expeditionDate
     *
     * @return Details
     */
    public function setExpeditionDate($expeditionDate)
    {
        $this->expeditionDate = $expeditionDate;

        return $this;
    }

    /**
     * Get expeditionDate
     *
     * @return \DateTime
     */
    public function getExpeditionDate()
    {
        return $this->expeditionDate;
    }

    /**
     * Set maritalStatus
     *
     * @param string $maritalStatus
     *
     * @return Details
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;

        return $this;
    }

    /**
     * Get maritalStatus
     *
     * @return string
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return Details
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return Details
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set income
     *
     * @param float $income
     *
     * @return Details
     */
    public function setIncome($income)
    {
        $this->income = $income;

        return $this;
    }

    /**
     * Get income
     *
     * @return float
     */
    public function getIncome()
    {
        return $this->income;
    }

    /**
     * Set category
     *
     * @param \ChallengeBundle\Entity\Category $category
     *
     * @return Details
     */
    public function setCategory(\ChallengeBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \ChallengeBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set shiiper
     *
     * @param string $shiiper
     *
     * @return Details
     */
    public function setShiiper($shiiper)
    {
        $this->shiiper = $shiiper;

        return $this;
    }

    /**
     * Get shiiper
     *
     * @return string
     */
    public function getShiiper()
    {
        return $this->shiiper;
    }
}
