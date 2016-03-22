<?php

namespace ChallengeBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="ChallengeBundle\Repository\PersonRepository")
 * @UniqueEntity("cpf", message="CPF em uso por outro cliente.")
 */
class Person
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
     * @ORM\Column(name="cpf", type="string", unique=true)
     * @Assert\NotBlank(message="Informe o CPF.")
     */
    private $cpf;

    /**
     * @var string
     * @ORM\Column(name="name", type="string")
     * @Assert\NotBlank(message="Informe o nome do cliente.")
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="password", type="string")
     * @Assert\NotBlank(message="Informe a senha.")
     */
    private $password;

    /**
     * @var string
     * @ORM\Column(name="telephone", type="string")
     * @Assert\NotBlank(message="Informe o telefone.")
     */
    private $telephone;

    /**
     * @var string
     * @ORM\Column(name="email", type="string")
     * @Assert\NotBlank(message="Informe um email.")
     * @Assert\Email(message = "Informe um email valido. (Ex: diegodesousas@yahoo.com.br)")
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="birthday", type="date")
     * @Assert\NotBlank(message="Informe a data de nascimento.")
     */
    private $birthday;

    /**
     * @ORM\OneToMany(targetEntity="Address", mappedBy="person", cascade={"persist"})
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     */
    private $address;

    /**
     * @var type
     * @ORM\OneToOne(targetEntity="Details", cascade={"persist"})
     * @ORM\JoinColumn(name="details_id", referencedColumnName="id")
     */
    private $details;

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param string $id
     *
     * @return Person
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Person
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Person
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Person
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set birthday
     *
     * @param DateTime $birthday
     *
     * @return Person
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->address = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add address
     *
     * @param Address $address
     *
     * @return Person
     */
    public function addAddress(Address $address)
    {
        $this->address[] = $address;

        $address->setPerson($this);

        return $this;
    }

    /**
     * Add address
     *
     * @param Address $address
     *
     * @return Person
     */
    public function addAddres(Address $address)
    {
        $this->address[] = $address;

        $address->setPerson($this);

        return $this;
    }

    /**
     * Remove address
     *
     * @param Address $address
     */
    public function removeAddress(Address $address)
    {
        $this->address->removeElement($address);
    }

    /**
     * Remove address
     *
     * @param Address $address
     */
    public function removeAddres(Address $address)
    {
        $this->address->removeElement($address);
    }

    /**
     * Get address
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     *
     * @return Person
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set details
     *
     * @param \ChallengeBundle\Entity\Details $details
     *
     * @return Person
     */
    public function setDetails(\ChallengeBundle\Entity\Details $details = null)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return \ChallengeBundle\Entity\Details
     */
    public function getDetails()
    {
        return $this->details;
    }
}
