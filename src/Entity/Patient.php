<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PatientRepository")
 * @ORM\HasLifecycleCallbacks()
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

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     * @ORM\JoinColumn(nullable=true)
     */
    private $gender;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     * @ORM\JoinColumn(nullable=true)
     */
    private $scholarship;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     * @ORM\JoinColumn(nullable=true)
     */
    private $marriage;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     * @ORM\JoinColumn(nullable=true)
     */
    private $career;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $weight;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     * @ORM\JoinColumn(nullable=true)
     */
    private $yibao;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fuwei;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $jyyw;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $gxykzqk;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $jtyw;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $tnbkzqk;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $jzyw;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $gxzkzqk;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $xyqk;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $xyqkzhi;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $xyqkyear;

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

    public function getGender(): ?Options
    {
        return $this->gender;
    }

    public function setGender(?Options $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getScholarship(): ?Options
    {
        return $this->scholarship;
    }

    public function setScholarship(?Options $scholarship): self
    {
        $this->scholarship = $scholarship;

        return $this;
    }

    public function getMarriage(): ?Options
    {
        return $this->marriage;
    }

    public function setMarriage(?Options $marriage): self
    {
        $this->marriage = $marriage;

        return $this;
    }

    public function getCareer(): ?Options
    {
        return $this->career;
    }

    public function setCareer(?Options $career): self
    {
        $this->career = $career;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getYibao(): ?Options
    {
        return $this->yibao;
    }

    public function setYibao(?Options $yibao): self
    {
        $this->yibao = $yibao;

        return $this;
    }

    public function getFuwei(): ?int
    {
        return $this->fuwei;
    }

    public function setFuwei(?int $fuwei): self
    {
        $this->fuwei = $fuwei;

        return $this;
    }

    public function getJyyw(): ?Options
    {
        return $this->jyyw;
    }

    public function setJyyw(?Options $jyyw): self
    {
        $this->jyyw = $jyyw;

        return $this;
    }

    public function getGxykzqk(): ?Options
    {
        return $this->gxykzqk;
    }

    public function setGxykzqk(?Options $gxykzqk): self
    {
        $this->gxykzqk = $gxykzqk;

        return $this;
    }

    public function getJtyw(): ?Options
    {
        return $this->jtyw;
    }

    public function setJtyw(?Options $jtyw): self
    {
        $this->jtyw = $jtyw;

        return $this;
    }

    public function getTnbkzqk(): ?Options
    {
        return $this->tnbkzqk;
    }

    public function setTnbkzqk(?Options $tnbkzqk): self
    {
        $this->tnbkzqk = $tnbkzqk;

        return $this;
    }

    public function getJzyw(): ?Options
    {
        return $this->jzyw;
    }

    public function setJzyw(?Options $jzyw): self
    {
        $this->jzyw = $jzyw;

        return $this;
    }

    public function getGxzkzqk(): ?Options
    {
        return $this->gxzkzqk;
    }

    public function setGxzkzqk(?Options $gxzkzqk): self
    {
        $this->gxzkzqk = $gxzkzqk;

        return $this;
    }

    public function getXyqk(): ?Options
    {
        return $this->xyqk;
    }

    public function setXyqk(?Options $xyqk): self
    {
        $this->xyqk = $xyqk;

        return $this;
    }

    public function getXyqkzhi(): ?int
    {
        return $this->xyqkzhi;
    }

    public function setXyqkzhi(?int $xyqkzhi): self
    {
        $this->xyqkzhi = $xyqkzhi;

        return $this;
    }

    public function getXyqkyear(): ?int
    {
        return $this->xyqkyear;
    }

    public function setXyqkyear(?int $xyqkyear): self
    {
        $this->xyqkyear = $xyqkyear;

        return $this;
    }
    
    /**
     * @ORM\PreFlush
     * 清除吸烟信息
     */
    public function clearDependentfomation()
    {
        //吸烟信息
        if(!$this->xyqk || $this->xyqk->getId()!=51){
            $this->setXyqkzhi(NULL);
            $this->setXyqkyear(NULL);
        }
        
    }
}
