<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PatientRepository")
 */
class Patient
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $birthday;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tall;

    /**
     * @ORM\Column(type="date")
     */
    private $ryrq;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zyh;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }
    
    public function getAge()
    {
        return $this->birthday->diff(new \Datetime())->format('%y')+1;
    }

    public function getTall(): ?int
    {
        return $this->tall;
    }

    public function setTall(?int $tall): self
    {
        $this->tall = $tall;

        return $this;
    }

    public function getRyrq(): ?\DateTimeInterface
    {
        return $this->ryrq;
    }

    public function setRyrq(\DateTimeInterface $ryrq): self
    {
        $this->ryrq = $ryrq;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getZyh(): ?string
    {
        return $this->zyh;
    }

    public function setZyh(string $zyh): self
    {
        $this->zyh = $zyh;

        return $this;
    }
}
