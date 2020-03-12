<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LceventRepository")
 */
class Lcevent
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $lcsfrq;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $lcdie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lcdie_reason;

    /**
     * @ORM\Column(type="boolean")
     */
    private $lcjxxs;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $lczjnxs;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="lcevent_options_lcbxgxycj"
     * )
     */
    private $lcbxgxycj;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $lczz;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $lczcxjgs;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $lccx;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $lcexxlsc;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $lcxtzt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $lckxxb;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lckxxb_reason;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $fjhzcry;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fjhzcry_reason;

    /**
     * @ORM\Column(type="decimal", precision=3, scale=2, nullable=true)
     */
    private $lclvef;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $lcntbnp;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Patient", inversedBy="lcevent")
     */
    private $patient;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="lcevent_options_ffzxgpci"
     * )
     */
    private $ffzxgpci;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ffzxgcto;

    

    public function __construct()
    {
        $this->lcbxgxycj = new ArrayCollection();
        $this->ffzxgpci = new ArrayCollection();
    }

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLcsfrq(): ?\DateTimeInterface
    {
        return $this->lcsfrq;
    }

    public function setLcsfrq(\DateTimeInterface $lcsfrq): self
    {
        $this->lcsfrq = $lcsfrq;

        return $this;
    }

    public function getLcdie(): ?bool
    {
        return $this->lcdie;
    }

    public function setLcdie(?bool $lcdie): self
    {
        $this->lcdie = $lcdie;

        return $this;
    }

    public function getLcdieReason(): ?string
    {
        return $this->lcdie_reason;
    }

    public function setLcdieReason(?string $lcdie_reason): self
    {
        $this->lcdie_reason = $lcdie_reason;

        return $this;
    }

    public function getLcjxxs(): ?bool
    {
        return $this->lcjxxs;
    }

    public function setLcjxxs(bool $lcjxxs): self
    {
        $this->lcjxxs = $lcjxxs;

        return $this;
    }

    public function getLczjnxs(): ?Options
    {
        return $this->lczjnxs;
    }

    public function setLczjnxs(?Options $lczjnxs): self
    {
        $this->lczjnxs = $lczjnxs;

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getLcbxgxycj(): Collection
    {
        return $this->lcbxgxycj;
    }

    public function addLcbxgxycj(Options $lcbxgxycj): self
    {
        if (!$this->lcbxgxycj->contains($lcbxgxycj)) {
            $this->lcbxgxycj[] = $lcbxgxycj;
        }

        return $this;
    }

    public function removeLcbxgxycj(Options $lcbxgxycj): self
    {
        if ($this->lcbxgxycj->contains($lcbxgxycj)) {
            $this->lcbxgxycj->removeElement($lcbxgxycj);
        }

        return $this;
    }

    public function getLczz(): ?Options
    {
        return $this->lczz;
    }

    public function setLczz(?Options $lczz): self
    {
        $this->lczz = $lczz;

        return $this;
    }

    public function getLczcxjgs(): ?bool
    {
        return $this->lczcxjgs;
    }

    public function setLczcxjgs(?bool $lczcxjgs): self
    {
        $this->lczcxjgs = $lczcxjgs;

        return $this;
    }

    public function getLccx(): ?Options
    {
        return $this->lccx;
    }

    public function setLccx(?Options $lccx): self
    {
        $this->lccx = $lccx;

        return $this;
    }

    public function getLcexxlsc(): ?Options
    {
        return $this->lcexxlsc;
    }

    public function setLcexxlsc(?Options $lcexxlsc): self
    {
        $this->lcexxlsc = $lcexxlsc;

        return $this;
    }

    public function getLcxtzt(): ?bool
    {
        return $this->lcxtzt;
    }

    public function setLcxtzt(?bool $lcxtzt): self
    {
        $this->lcxtzt = $lcxtzt;

        return $this;
    }

    public function getLckxxb(): ?Options
    {
        return $this->lckxxb;
    }

    public function setLckxxb(?Options $lckxxb): self
    {
        $this->lckxxb = $lckxxb;

        return $this;
    }

    public function getLckxxbReason(): ?string
    {
        return $this->lckxxb_reason;
    }

    public function setLckxxbReason(string $lckxxb_reason): self
    {
        $this->lckxxb_reason = $lckxxb_reason;

        return $this;
    }

    public function getFjhzcry(): ?bool
    {
        return $this->fjhzcry;
    }

    public function setFjhzcry(?bool $fjhzcry): self
    {
        $this->fjhzcry = $fjhzcry;

        return $this;
    }

    public function getFjhzcryReason(): ?string
    {
        return $this->fjhzcry_reason;
    }

    public function setFjhzcryReason(string $fjhzcry_reason): self
    {
        $this->fjhzcry_reason = $fjhzcry_reason;

        return $this;
    }

    public function getLclvef(): ?string
    {
        return $this->lclvef;
    }

    public function setLclvef(?string $lclvef): self
    {
        $this->lclvef = $lclvef;

        return $this;
    }

    public function getLcntbnp(): ?string
    {
        return $this->lcntbnp;
    }

    public function setLcntbnp(?string $lcntbnp): self
    {
        $this->lcntbnp = $lcntbnp;

        return $this;
    }

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(?Patient $patient): self
    {
        $this->patient = $patient;

        return $this;
    }

  

    public function getFfzxgcto(): ?bool
    {
        return $this->ffzxgcto;
    }

    public function setFfzxgcto(?bool $ffzxgcto): self
    {
        $this->ffzxgcto = $ffzxgcto;

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getFfzxgpci(): Collection
    {
        return $this->ffzxgpci;
    }

    public function addFfzxgpci(Options $ffzxgpci): self
    {
        if (!$this->ffzxgpci->contains($ffzxgpci)) {
            $this->ffzxgpci[] = $ffzxgpci;
        }

        return $this;
    }

    public function removeFfzxgpci(Options $ffzxgpci): self
    {
        if ($this->ffzxgpci->contains($ffzxgpci)) {
            $this->ffzxgpci->removeElement($ffzxgpci);
        }

        return $this;
    }

   

    
}
