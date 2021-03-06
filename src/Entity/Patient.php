<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private $gxykzqk;

 

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $tnbkzqk;

   

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

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $yjqk;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $yjqkliang;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $yjqkyear;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_jyyw"
     * )
     */
    private $jyyw;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_jtyw"
     * )
     */
    private $jtyw;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_jzyw"
     * )
     */
    private $jzyw;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     */
    private $tfyw;

    /**
     * @ORM\Column(type="boolean")
     */
    private $xjgs;

    /**
     * @ORM\Column(type="boolean")
     */
    private $jwxjt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $pcibs;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_cabgbs"
     * )
     */
    private $cabgbs;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $nzzbs;

    /**
     * @ORM\Column(type="boolean")
     */
    private $wzdmjb;

    /**
     * @ORM\Column(type="boolean")
     */
    private $gxbjzs;

    /**
     * @ORM\Column(type="boolean")
     */
    private $hbexzl;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_kxxbyw"
     * )
     */
    private $kxxbyw;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_knyw"
     * )
     */
    private $knyw;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_ttyy"
     * )
     */
    private $ttyy;

    /**
     * @ORM\Column(type="boolean")
     */
    private $xhdkybs;

    /**
     * @ORM\Column(type="boolean")
     */
    private $xgnbqbs;

    /**
     * @ORM\Column(type="boolean")
     */
    private $tx;

    /**
     * @ORM\Column(type="boolean")
     */
    private $copd;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_xxgjbjy"
     * )
     */
    private $xxgjbjy;

    /**
     * @ORM\Column(type="boolean")
     */
    private $zgzzl;

    /**
     * @ORM\Column(type="boolean")
     */
    private $pyywry;

    /**
     * @ORM\Column(type="boolean")
     */
    private $pypci;

    /**
     * @ORM\Column(type="boolean")
     */
    private $pyxjgsbs;

  
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_yy"
     * )
     */
    private $yy;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_xtxm"
     * )
     */
    private $xtxm;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_bszz"
     * )
     */
    private $bszz;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_xsqj"
     * )
     */
    private $xsqj;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_fbfyyw"
     * )
     */
    private $fbfyyw;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_yyjy"
     * )
     */
    private $yyjy;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_exxlsc"
     * )
     */
    private $exxlsc;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     * @ORM\JoinColumn(nullable=true)
     */
    private $kippip;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_gsbw"
     * )
     */
    private $gsbw;

    /**
     * @ORM\Column(type="boolean")
     */
    private $zzdx;



    /**
     * @ORM\Column(type="boolean")
     */
    private $ysxg;

    /**
     * @ORM\Column(type="boolean")
     */
    private $yqxtzt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $zszcdzz;

    /**
     * @ORM\Column(type="boolean")
     */
    private $yszcdzz;

    /**
     * @ORM\Column(type="boolean")
     */
    private $xfcd;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ssy;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $szy;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $xl;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hx;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $tw;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $sfxyzt;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $jpybhd;

    /**
     * @ORM\Column(type="float")
     */
    private $cm;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $xj;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $xn;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $xlv;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $jx;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $egfr;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $kfxt;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $hba1c;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $jgdbi;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $jgdbt;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $ckmb;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $bnp;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $xhdb;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $hxbyj;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $gysz;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $zdgc;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hdlc;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ldlc;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ns;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nt;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $lvef;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $jzyybb;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $jzyy;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $zjfs;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $yqxdtcs;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $zyjl;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options", inversedBy="patients")
     */
    private $zgzfs;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aspl;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $lbgl;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tgrl;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $dfzgs;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_zytt"
     * )
     */
    private $zytt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $yzmb;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $acei;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $arb;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_lnj"
     * )
     */
    private $lnj;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $bzzj;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $atst;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dba;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dbada;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $mln;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $zxmd;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $xhs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $kdlz;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $adlp;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ldky;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $wcfztq;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $yctqzc;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $iabp;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ecmo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $zcysy;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_gsxgdm"
     * )
     */
    private $gsxgdm;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_hbcto"
     * )
     */
    private $hbcto;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     * @ORM\JoinColumn(nullable=true)
     */
    private $xgbbzs;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $xgjd;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $dmyzgh;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $dmxxfhz;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $xsszxg;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $timixl;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_zyj"
     * )
     */
    private $zyj;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_zrzj"
     * )
     */
    private $zrzj;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_clffzxg"
     * )
     */
    private $clffzxg;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $pcilj;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $zyjjl;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $sscx;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $pcijkj;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ykz;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ykqnzz;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ykqncd;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $zjsl;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $zjzj;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $zjcd;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $hkz;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hkzqnzj;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hkzqncd;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hkzdyl;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $szsc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $wfl;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $shtimi;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $sfrqjz;

    /**
     * @ORM\Column(type="integer")
     */
    private $currentAge;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $fbdd;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fbsj;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $szyy_dba;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $szyy_dafda;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $szyy_qjssxs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $szyy_atp;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $szyy_xsgy;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $szyy_ssxs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $szyy_mf;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $szyy_sn;

    

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $swcy_yy;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $jxxs;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $swcy;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     * @ORM\JoinColumn(nullable=true)
     */
    private $zjnxs;

   

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $zyzz;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $zcxjgs;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $zyqjcx;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     */
    private $zyexxlsc;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $zyxtzt;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $zyts;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $zyfy;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $zyicu;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $zyicu_ts;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $zyzyjsb;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $zyxfcd;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Options")
     * @ORM\JoinTable(
     * name="patient_options_bxgxycj"
     * )
     */
    private $bxgxycj;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Lcevent", mappedBy="patient",cascade={"persist", "remove"})
     * @ORM\JoinTable(
     * name="patient_lcevent"
     * )
     */
    private $lcevents;

    public function __construct()
    {
        $this->jyyw = new ArrayCollection();
        $this->jtyw = new ArrayCollection();
        $this->jzyw = new ArrayCollection();
        $this->tfyw = new ArrayCollection();
        $this->cabgbs = new ArrayCollection();
        $this->kxxbyw = new ArrayCollection();
        $this->knyw = new ArrayCollection();
        $this->ttyy = new ArrayCollection();
        $this->xxgjbjy = new ArrayCollection();
        $this->yy = new ArrayCollection();
        $this->xtxm = new ArrayCollection();
        $this->bszz = new ArrayCollection();
        $this->xsqj = new ArrayCollection();
        $this->fbfyyw = new ArrayCollection();
        $this->yyjy = new ArrayCollection();
        $this->exxlsc = new ArrayCollection();        
        $this->gsbw = new ArrayCollection();
        $this->zytt = new ArrayCollection();
        $this->lnj = new ArrayCollection();
        $this->gsxgdm = new ArrayCollection();
        $this->hbcto = new ArrayCollection();
        $this->zyj = new ArrayCollection();
        $this->zrzj = new ArrayCollection();
        $this->clffzxg = new ArrayCollection();
        $this->bxgxycj = new ArrayCollection();
        $this->lcevents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    

    public function getGxykzqk(): ?Options
    {
        return $this->gxykzqk;
    }

    public function setGxykzqk(?Options $gxykzqk): self
    {
        $this->gxykzqk = $gxykzqk;

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
        //饮酒信息
        if(!$this->yjqk || !in_array($this->yjqk->getId(),[55,56,57])){
            $this->setYjqkliang(NULL);
            $this->setYjqkyear(NULL);
        }
    }

    public function getYjqk(): ?Options
    {
        return $this->yjqk;
    }

    public function setYjqk(?Options $yjqk): self
    {
        $this->yjqk = $yjqk;

        return $this;
    }

    public function getYjqkliang(): ?int
    {
        return $this->yjqkliang;
    }

    public function setYjqkliang(?int $yjqkliang): self
    {
        $this->yjqkliang = $yjqkliang;

        return $this;
    }

    public function getYjqkyear(): ?int
    {
        return $this->yjqkyear;
    }

    public function setYjqkyear(?int $yjqkyear): self
    {
        $this->yjqkyear = $yjqkyear;

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getJyyw(): Collection
    {
        return $this->jyyw;
    }

    public function addJyyw(Options $jyyw): self
    {
        if (!$this->jyyw->contains($jyyw)) {
            $this->jyyw[] = $jyyw;
        }

        return $this;
    }

    public function removeJyyw(Options $jyyw): self
    {
        if ($this->jyyw->contains($jyyw)) {
            $this->jyyw->removeElement($jyyw);
        }

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getJtyw(): Collection
    {
        return $this->jtyw;
    }

    public function addJtyw(Options $jtyw): self
    {
        if (!$this->jtyw->contains($jtyw)) {
            $this->jtyw[] = $jtyw;
        }

        return $this;
    }

    public function removeJtyw(Options $jtyw): self
    {
        if ($this->jtyw->contains($jtyw)) {
            $this->jtyw->removeElement($jtyw);
        }

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getJzyw(): Collection
    {
        return $this->jzyw;
    }

    public function addJzyw(Options $jzyw): self
    {
        if (!$this->jzyw->contains($jzyw)) {
            $this->jzyw[] = $jzyw;
        }

        return $this;
    }

    public function removeJzyw(Options $jzyw): self
    {
        if ($this->jzyw->contains($jzyw)) {
            $this->jzyw->removeElement($jzyw);
        }

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getTfyw(): Collection
    {
        return $this->tfyw;
    }

    public function addTfyw(Options $tfyw): self
    {
        if (!$this->tfyw->contains($tfyw)) {
            $this->tfyw[] = $tfyw;
        }

        return $this;
    }

    public function removeTfyw(Options $tfyw): self
    {
        if ($this->tfyw->contains($tfyw)) {
            $this->tfyw->removeElement($tfyw);
        }

        return $this;
    }

    public function getXjgs(): ?bool
    {
        return $this->xjgs;
    }

    public function setXjgs(?bool $xjgs): self
    {
        $this->xjgs = $xjgs;

        return $this;
    }

    public function getJwxjt(): ?bool
    {
        return $this->jwxjt;
    }

    public function setJwxjt(?bool $jwxjt): self
    {
        $this->jwxjt = $jwxjt;

        return $this;
    }

    public function getPcibs(): ?bool
    {
        return $this->pcibs;
    }

    public function setPcibs(bool $pcibs): self
    {
        $this->pcibs = $pcibs;

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getCabgbs(): Collection
    {
        return $this->cabgbs;
    }

    public function addCabgb(Options $cabgb): self
    {
        if (!$this->cabgbs->contains($cabgb)) {
            $this->cabgbs[] = $cabgb;
        }

        return $this;
    }

    public function removeCabgb(Options $cabgb): self
    {
        if ($this->cabgbs->contains($cabgb)) {
            $this->cabgbs->removeElement($cabgb);
        }

        return $this;
    }

    public function getNzzbs(): ?Options
    {
        return $this->nzzbs;
    }

    public function setNzzbs(?Options $nzzbs): self
    {
        $this->nzzbs = $nzzbs;

        return $this;
    }

    public function getWzdmjb(): ?bool
    {
        return $this->wzdmjb;
    }

    public function setWzdmjb(bool $wzdmjb): self
    {
        $this->wzdmjb = $wzdmjb;

        return $this;
    }

    public function getGxbjzs(): ?bool
    {
        return $this->gxbjzs;
    }

    public function setGxbjzs(bool $gxbjzs): self
    {
        $this->gxbjzs = $gxbjzs;

        return $this;
    }

    public function getHbexzl(): ?bool
    {
        return $this->hbexzl;
    }

    public function setHbexzl(bool $hbexzl): self
    {
        $this->hbexzl = $hbexzl;

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getKxxbyw(): Collection
    {
        return $this->kxxbyw;
    }

    public function addKxxbyw(Options $kxxbyw): self
    {
        if (!$this->kxxbyw->contains($kxxbyw)) {
            $this->kxxbyw[] = $kxxbyw;
        }

        return $this;
    }

    public function removeKxxbyw(Options $kxxbyw): self
    {
        if ($this->kxxbyw->contains($kxxbyw)) {
            $this->kxxbyw->removeElement($kxxbyw);
        }

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getKnyw(): Collection
    {
        return $this->knyw;
    }

    public function addKnyw(Options $knyw): self
    {
        if (!$this->knyw->contains($knyw)) {
            $this->knyw[] = $knyw;
        }

        return $this;
    }

    public function removeKnyw(Options $knyw): self
    {
        if ($this->knyw->contains($knyw)) {
            $this->knyw->removeElement($knyw);
        }

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getTtyy(): Collection
    {
        return $this->ttyy;
    }

    public function addTtyy(Options $ttyy): self
    {
        if (!$this->ttyy->contains($ttyy)) {
            $this->ttyy[] = $ttyy;
        }

        return $this;
    }

    public function removeTtyy(Options $ttyy): self
    {
        if ($this->ttyy->contains($ttyy)) {
            $this->ttyy->removeElement($ttyy);
        }

        return $this;
    }

    public function getXhdkybs(): ?bool
    {
        return $this->xhdkybs;
    }

    public function setXhdkybs(bool $xhdkybs): self
    {
        $this->xhdkybs = $xhdkybs;

        return $this;
    }

    public function getXgnbqbs(): ?bool
    {
        return $this->xgnbqbs;
    }

    public function setXgnbqbs(bool $xgnbqbs): self
    {
        $this->xgnbqbs = $xgnbqbs;

        return $this;
    }

    public function getTx(): ?bool
    {
        return $this->tx;
    }

    public function setTx(bool $tx): self
    {
        $this->tx = $tx;

        return $this;
    }

    public function getCopd(): ?bool
    {
        return $this->copd;
    }

    public function setCopd(bool $copd): self
    {
        $this->copd = $copd;

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getXxgjbjy(): Collection
    {
        return $this->xxgjbjy;
    }

    public function addXxgjbjy(Options $xxgjbjy): self
    {
        if (!$this->xxgjbjy->contains($xxgjbjy)) {
            $this->xxgjbjy[] = $xxgjbjy;
        }

        return $this;
    }

    public function removeXxgjbjy(Options $xxgjbjy): self
    {
        if ($this->xxgjbjy->contains($xxgjbjy)) {
            $this->xxgjbjy->removeElement($xxgjbjy);
        }

        return $this;
    }

    public function getZgzzl(): ?bool
    {
        return $this->zgzzl;
    }

    public function setZgzzl(bool $zgzzl): self
    {
        $this->zgzzl = $zgzzl;

        return $this;
    }

    public function getPyywry(): ?bool
    {
        return $this->pyywry;
    }

    public function setPyywry(bool $pyywry): self
    {
        $this->pyywry = $pyywry;

        return $this;
    }

    public function getPypci(): ?bool
    {
        return $this->pypci;
    }

    public function setPypci(bool $pypci): self
    {
        $this->pypci = $pypci;

        return $this;
    }

    public function getPyxjgsbs(): ?bool
    {
        return $this->pyxjgsbs;
    }

    public function setPyxjgsbs(bool $pyxjgsbs): self
    {
        $this->pyxjgsbs = $pyxjgsbs;

        return $this;
    }

   

   

    /**
     * @return Collection|Options[]
     */
    public function getYy(): Collection
    {
        return $this->yy;
    }

    public function addYy(Options $yy): self
    {
        if (!$this->yy->contains($yy)) {
            $this->yy[] = $yy;
        }

        return $this;
    }

    public function removeYy(Options $yy): self
    {
        if ($this->yy->contains($yy)) {
            $this->yy->removeElement($yy);
        }

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getXtxm(): Collection
    {
        return $this->xtxm;
    }

    public function addXtxm(Options $xtxm): self
    {
        if (!$this->xtxm->contains($xtxm)) {
            $this->xtxm[] = $xtxm;
        }

        return $this;
    }

    public function removeXtxm(Options $xtxm): self
    {
        if ($this->xtxm->contains($xtxm)) {
            $this->xtxm->removeElement($xtxm);
        }

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getBszz(): Collection
    {
        return $this->bszz;
    }

    public function addBszz(Options $bszz): self
    {
        if (!$this->bszz->contains($bszz)) {
            $this->bszz[] = $bszz;
        }

        return $this;
    }

    public function removeBszz(Options $bszz): self
    {
        if ($this->bszz->contains($bszz)) {
            $this->bszz->removeElement($bszz);
        }

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getXsqj(): Collection
    {
        return $this->xsqj;
    }

    public function addXsqj(Options $xsqj): self
    {
        if (!$this->xsqj->contains($xsqj)) {
            $this->xsqj[] = $xsqj;
        }

        return $this;
    }

    public function removeXsqj(Options $xsqj): self
    {
        if ($this->xsqj->contains($xsqj)) {
            $this->xsqj->removeElement($xsqj);
        }

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getFbfyyw(): Collection
    {
        return $this->fbfyyw;
    }

    public function addFbfyyw(Options $fbfyyw): self
    {
        if (!$this->fbfyyw->contains($fbfyyw)) {
            $this->fbfyyw[] = $fbfyyw;
        }

        return $this;
    }

    public function removeFbfyyw(Options $fbfyyw): self
    {
        if ($this->fbfyyw->contains($fbfyyw)) {
            $this->fbfyyw->removeElement($fbfyyw);
        }

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getYyjy(): Collection
    {
        return $this->yyjy;
    }

    public function addYyjy(Options $yyjy): self
    {
        if (!$this->yyjy->contains($yyjy)) {
            $this->yyjy[] = $yyjy;
        }

        return $this;
    }

    public function removeYyjy(Options $yyjy): self
    {
        if ($this->yyjy->contains($yyjy)) {
            $this->yyjy->removeElement($yyjy);
        }

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getExxlsc(): Collection
    {
        return $this->exxlsc;
    }

    public function addExxlsc(Options $exxlsc): self
    {
        if (!$this->exxlsc->contains($exxlsc)) {
            $this->exxlsc[] = $exxlsc;
        }

        return $this;
    }

    public function removeExxlsc(Options $exxlsc): self
    {
        if ($this->exxlsc->contains($exxlsc)) {
            $this->exxlsc->removeElement($exxlsc);
        }

        return $this;
    }

  

   

    /**
     * @return Collection|Options[]
     */
    public function getGsbw(): Collection
    {
        return $this->gsbw;
    }

    public function addGsbw(Options $gsbw): self
    {
        if (!$this->gsbw->contains($gsbw)) {
            $this->gsbw[] = $gsbw;
        }

        return $this;
    }

    public function removeGsbw(Options $gsbw): self
    {
        if ($this->gsbw->contains($gsbw)) {
            $this->gsbw->removeElement($gsbw);
        }

        return $this;
    }

    public function getKippip(): ?Options
    {
        return $this->kippip;
    }

    public function setKippip(?Options $kippip): self
    {
        $this->kippip = $kippip;

        return $this;
    }

    public function getZzdx(): ?bool
    {
        return $this->zzdx;
    }

    public function setZzdx(bool $zzdx): self
    {
        $this->zzdx = $zzdx;

        return $this;
    }



    public function getYsxg(): ?bool
    {
        return $this->ysxg;
    }

    public function setYsxg(bool $ysxg): self
    {
        $this->ysxg = $ysxg;

        return $this;
    }

    public function getYqxtzt(): ?bool
    {
        return $this->yqxtzt;
    }

    public function setYqxtzt(bool $yqxtzt): self
    {
        $this->yqxtzt = $yqxtzt;

        return $this;
    }

    public function getZszcdzz(): ?bool
    {
        return $this->zszcdzz;
    }

    public function setZszcdzz(bool $zszcdzz): self
    {
        $this->zszcdzz = $zszcdzz;

        return $this;
    }

    public function getYszcdzz(): ?bool
    {
        return $this->yszcdzz;
    }

    public function setYszcdzz(bool $yszcdzz): self
    {
        $this->yszcdzz = $yszcdzz;

        return $this;
    }

    public function getXfcd(): ?bool
    {
        return $this->xfcd;
    }

    public function setXfcd(bool $xfcd): self
    {
        $this->xfcd = $xfcd;

        return $this;
    }

    public function getSsy(): ?int
    {
        return $this->ssy;
    }

    public function setSsy(?int $ssy): self
    {
        $this->ssy = $ssy;

        return $this;
    }

    public function getSzy(): ?int
    {
        return $this->szy;
    }

    public function setSzy(?int $szy): self
    {
        $this->szy = $szy;

        return $this;
    }

    public function getXl(): ?int
    {
        return $this->xl;
    }

    public function setXl(?int $xl): self
    {
        $this->xl = $xl;

        return $this;
    }

    public function getHx(): ?int
    {
        return $this->hx;
    }

    public function setHx(?int $hx): self
    {
        $this->hx = $hx;

        return $this;
    }

    public function getTw(): ?float
    {
        return $this->tw;
    }

    public function setTw(?float $tw): self
    {
        $this->tw = $tw;

        return $this;
    }

    public function getSfxyzt(): ?bool
    {
        return $this->sfxyzt;
    }

    public function setSfxyzt(?bool $sfxyzt): self
    {
        $this->sfxyzt = $sfxyzt;

        return $this;
    }

    public function getJpybhd(): ?float
    {
        return $this->jpybhd;
    }

    public function setJpybhd(?float $jpybhd): self
    {
        $this->jpybhd = $jpybhd;

        return $this;
    }

    public function getCm(): ?float
    {
        return $this->cm;
    }

    public function setCm(float $cm): self
    {
        $this->cm = $cm;

        return $this;
    }

    public function getXj(): ?float
    {
        return $this->xj;
    }

    public function setXj(?float $xj): self
    {
        $this->xj = $xj;

        return $this;
    }

    public function getXn(): ?float
    {
        return $this->xn;
    }

    public function setXn(?float $xn): self
    {
        $this->xn = $xn;

        return $this;
    }

    public function getXlv(): ?float
    {
        return $this->xlv;
    }

    public function setXlv(?float $xlv): self
    {
        $this->xlv = $xlv;

        return $this;
    }

    public function getJx(): ?float
    {
        return $this->jx;
    }

    public function setJx(?float $jx): self
    {
        $this->jx = $jx;

        return $this;
    }

    public function getEgfr(): ?float
    {
        return $this->egfr;
    }

    public function setEgfr(?float $egfr): self
    {
        $this->egfr = $egfr;

        return $this;
    }

    public function getKfxt(): ?float
    {
        return $this->kfxt;
    }

    public function setKfxt(?float $kfxt): self
    {
        $this->kfxt = $kfxt;

        return $this;
    }

    public function getHba1c(): ?float
    {
        return $this->hba1c;
    }

    public function setHba1c(?float $hba1c): self
    {
        $this->hba1c = $hba1c;

        return $this;
    }

    public function getJgdbi(): ?float
    {
        return $this->jgdbi;
    }

    public function setJgdbi(?float $jgdbi): self
    {
        $this->jgdbi = $jgdbi;

        return $this;
    }

    public function getJgdbt(): ?float
    {
        return $this->jgdbt;
    }

    public function setJgdbt(?float $jgdbt): self
    {
        $this->jgdbt = $jgdbt;

        return $this;
    }

    public function getCkmb(): ?float
    {
        return $this->ckmb;
    }

    public function setCkmb(?float $ckmb): self
    {
        $this->ckmb = $ckmb;

        return $this;
    }

    public function getBnp(): ?float
    {
        return $this->bnp;
    }

    public function setBnp(?float $bnp): self
    {
        $this->bnp = $bnp;

        return $this;
    }

    public function getXhdb(): ?int
    {
        return $this->xhdb;
    }

    public function setXhdb(?int $xhdb): self
    {
        $this->xhdb = $xhdb;

        return $this;
    }

    public function getHxbyj(): ?float
    {
        return $this->hxbyj;
    }

    public function setHxbyj(?float $hxbyj): self
    {
        $this->hxbyj = $hxbyj;

        return $this;
    }

    public function getGysz(): ?int
    {
        return $this->gysz;
    }

    public function setGysz(?int $gysz): self
    {
        $this->gysz = $gysz;

        return $this;
    }

    public function getZdgc(): ?int
    {
        return $this->zdgc;
    }

    public function setZdgc(?int $zdgc): self
    {
        $this->zdgc = $zdgc;

        return $this;
    }

    public function getHdlc(): ?int
    {
        return $this->hdlc;
    }

    public function setHdlc(?int $hdlc): self
    {
        $this->hdlc = $hdlc;

        return $this;
    }

    public function getLdlc(): ?int
    {
        return $this->ldlc;
    }

    public function setLdlc(?int $ldlc): self
    {
        $this->ldlc = $ldlc;

        return $this;
    }

    public function getNs(): ?int
    {
        return $this->ns;
    }

    public function setNs(?int $ns): self
    {
        $this->ns = $ns;

        return $this;
    }

    public function getNt(): ?int
    {
        return $this->nt;
    }

    public function setNt(?int $nt): self
    {
        $this->nt = $nt;

        return $this;
    }

    public function getLvef(): ?float
    {
        return $this->lvef;
    }

    public function setLvef(?float $lvef): self
    {
        $this->lvef = $lvef;

        return $this;
    }

    public function getJzyybb(): ?Options
    {
        return $this->jzyybb;
    }

    public function setJzyybb(?Options $jzyybb): self
    {
        $this->jzyybb = $jzyybb;

        return $this;
    }

    public function getJzyy(): ?Options
    {
        return $this->jzyy;
    }

    public function setJzyy(?Options $jzyy): self
    {
        $this->jzyy = $jzyy;

        return $this;
    }

    public function getZjfs(): ?Options
    {
        return $this->zjfs;
    }

    public function setZjfs(?Options $zjfs): self
    {
        $this->zjfs = $zjfs;

        return $this;
    }

    public function getYqxdtcs(): ?bool
    {
        return $this->yqxdtcs;
    }

    public function setYqxdtcs(?bool $yqxdtcs): self
    {
        $this->yqxdtcs = $yqxdtcs;

        return $this;
    }

    public function getZyjl(): ?Options
    {
        return $this->zyjl;
    }

    public function setZyjl(?Options $zyjl): self
    {
        $this->zyjl = $zyjl;

        return $this;
    }

    public function getZgzfs(): ?Options
    {
        return $this->zgzfs;
    }

    public function setZgzfs(?Options $zgzfs): self
    {
        $this->zgzfs = $zgzfs;

        return $this;
    }

    public function getAspl(): ?bool
    {
        return $this->aspl;
    }

    public function setAspl(?bool $aspl): self
    {
        $this->aspl = $aspl;

        return $this;
    }

    public function getLbgl(): ?bool
    {
        return $this->lbgl;
    }

    public function setLbgl(?bool $lbgl): self
    {
        $this->lbgl = $lbgl;

        return $this;
    }

    public function getTgrl(): ?bool
    {
        return $this->tgrl;
    }

    public function setTgrl(?bool $tgrl): self
    {
        $this->tgrl = $tgrl;

        return $this;
    }

    public function getDfzgs(): ?int
    {
        return $this->dfzgs;
    }

    public function setDfzgs(int $dfzgs): self
    {
        $this->dfzgs = $dfzgs;

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getZytt(): Collection
    {
        return $this->zytt;
    }

    public function addZytt(Options $zytt): self
    {
        if (!$this->zytt->contains($zytt)) {
            $this->zytt[] = $zytt;
        }

        return $this;
    }

    public function removeZytt(Options $zytt): self
    {
        if ($this->zytt->contains($zytt)) {
            $this->zytt->removeElement($zytt);
        }

        return $this;
    }

    public function getYzmb(): ?bool
    {
        return $this->yzmb;
    }

    public function setYzmb(bool $yzmb): self
    {
        $this->yzmb = $yzmb;

        return $this;
    }

    public function getAcei(): ?bool
    {
        return $this->acei;
    }

    public function setAcei(?bool $acei): self
    {
        $this->acei = $acei;

        return $this;
    }

    public function getArb(): ?bool
    {
        return $this->arb;
    }

    public function setArb(?bool $arb): self
    {
        $this->arb = $arb;

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getLnj(): Collection
    {
        return $this->lnj;
    }

    public function addLnj(Options $lnj): self
    {
        if (!$this->lnj->contains($lnj)) {
            $this->lnj[] = $lnj;
        }

        return $this;
    }

    public function removeLnj(Options $lnj): self
    {
        if ($this->lnj->contains($lnj)) {
            $this->lnj->removeElement($lnj);
        }

        return $this;
    }

    public function getBzzj(): ?bool
    {
        return $this->bzzj;
    }

    public function setBzzj(?bool $bzzj): self
    {
        $this->bzzj = $bzzj;

        return $this;
    }

    public function getAtst(): ?bool
    {
        return $this->atst;
    }

    public function setAtst(?bool $atst): self
    {
        $this->atst = $atst;

        return $this;
    }

    public function getDba(): ?int
    {
        return $this->dba;
    }

    public function setDba(?int $dba): self
    {
        $this->dba = $dba;

        return $this;
    }

    public function getDbada(): ?int
    {
        return $this->dbada;
    }

    public function setDbada(?int $dbada): self
    {
        $this->dbada = $dbada;

        return $this;
    }

    public function getMln(): ?int
    {
        return $this->mln;
    }

    public function setMln(?int $mln): self
    {
        $this->mln = $mln;

        return $this;
    }

    public function getZxmd(): ?bool
    {
        return $this->zxmd;
    }

    public function setZxmd(?bool $zxmd): self
    {
        $this->zxmd = $zxmd;

        return $this;
    }

    public function getXhs(): ?int
    {
        return $this->xhs;
    }

    public function setXhs(?int $xhs): self
    {
        $this->xhs = $xhs;

        return $this;
    }

    public function getKdlz(): ?int
    {
        return $this->kdlz;
    }

    public function setKdlz(?int $kdlz): self
    {
        $this->kdlz = $kdlz;

        return $this;
    }

    public function getAdlp(): ?int
    {
        return $this->adlp;
    }

    public function setAdlp(?int $adlp): self
    {
        $this->adlp = $adlp;

        return $this;
    }

    public function getLdky(): ?int
    {
        return $this->ldky;
    }

    public function setLdky(?int $ldky): self
    {
        $this->ldky = $ldky;

        return $this;
    }

    public function getWcfztq(): ?int
    {
        return $this->wcfztq;
    }

    public function setWcfztq(?int $wcfztq): self
    {
        $this->wcfztq = $wcfztq;

        return $this;
    }

    public function getYctqzc(): ?int
    {
        return $this->yctqzc;
    }

    public function setYctqzc(?int $yctqzc): self
    {
        $this->yctqzc = $yctqzc;

        return $this;
    }

    public function getIabp(): ?int
    {
        return $this->iabp;
    }

    public function setIabp(?int $iabp): self
    {
        $this->iabp = $iabp;

        return $this;
    }

    public function getEcmo(): ?int
    {
        return $this->ecmo;
    }

    public function setEcmo(?int $ecmo): self
    {
        $this->ecmo = $ecmo;

        return $this;
    }

    public function getZcysy(): ?bool
    {
        return $this->zcysy;
    }

    public function setZcysy(?bool $zcysy): self
    {
        $this->zcysy = $zcysy;

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getGsxgdm(): Collection
    {
        return $this->gsxgdm;
    }

    public function addGsxgdm(Options $gsxgdm): self
    {
        if (!$this->gsxgdm->contains($gsxgdm)) {
            $this->gsxgdm[] = $gsxgdm;
        }

        return $this;
    }

    public function removeGsxgdm(Options $gsxgdm): self
    {
        if ($this->gsxgdm->contains($gsxgdm)) {
            $this->gsxgdm->removeElement($gsxgdm);
        }

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getHbcto(): Collection
    {
        return $this->hbcto;
    }

    public function addHbcto(Options $hbcto): self
    {
        if (!$this->hbcto->contains($hbcto)) {
            $this->hbcto[] = $hbcto;
        }

        return $this;
    }

    public function removeHbcto(Options $hbcto): self
    {
        if ($this->hbcto->contains($hbcto)) {
            $this->hbcto->removeElement($hbcto);
        }

        return $this;
    }

    public function getXgbbzs(): ?Options
    {
        return $this->xgbbzs;
    }

    public function setXgbbzs(?Options $xgbbzs): self
    {
        $this->xgbbzs = $xgbbzs;

        return $this;
    }

    public function getXgjd(): ?bool
    {
        return $this->xgjd;
    }

    public function setXgjd(?bool $xgjd): self
    {
        $this->xgjd = $xgjd;

        return $this;
    }

    public function getDmyzgh(): ?bool
    {
        return $this->dmyzgh;
    }

    public function setDmyzgh(?bool $dmyzgh): self
    {
        $this->dmyzgh = $dmyzgh;

        return $this;
    }

    public function getDmxxfhz(): ?bool
    {
        return $this->dmxxfhz;
    }

    public function setDmxxfhz(?bool $dmxxfhz): self
    {
        $this->dmxxfhz = $dmxxfhz;

        return $this;
    }

    public function getXsszxg(): ?bool
    {
        return $this->xsszxg;
    }

    public function setXsszxg(?bool $xsszxg): self
    {
        $this->xsszxg = $xsszxg;

        return $this;
    }

    public function getTimixl(): ?bool
    {
        return $this->timixl;
    }

    public function setTimixl(?bool $timixl): self
    {
        $this->timixl = $timixl;

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getZyj(): Collection
    {
        return $this->zyj;
    }

    public function addZyj(Options $zyj): self
    {
        if (!$this->zyj->contains($zyj)) {
            $this->zyj[] = $zyj;
        }

        return $this;
    }

    public function removeZyj(Options $zyj): self
    {
        if ($this->zyj->contains($zyj)) {
            $this->zyj->removeElement($zyj);
        }

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getZrzj(): Collection
    {
        return $this->zrzj;
    }

    public function addZrzj(Options $zrzj): self
    {
        if (!$this->zrzj->contains($zrzj)) {
            $this->zrzj[] = $zrzj;
        }

        return $this;
    }

    public function removeZrzj(Options $zrzj): self
    {
        if ($this->zrzj->contains($zrzj)) {
            $this->zrzj->removeElement($zrzj);
        }

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getClffzxg(): Collection
    {
        return $this->clffzxg;
    }

    public function addClffzxg(Options $clffzxg): self
    {
        if (!$this->clffzxg->contains($clffzxg)) {
            $this->clffzxg[] = $clffzxg;
        }

        return $this;
    }

    public function removeClffzxg(Options $clffzxg): self
    {
        if ($this->clffzxg->contains($clffzxg)) {
            $this->clffzxg->removeElement($clffzxg);
        }

        return $this;
    }

    public function getPcilj(): ?Options
    {
        return $this->pcilj;
    }

    public function setPcilj(?Options $pcilj): self
    {
        $this->pcilj = $pcilj;

        return $this;
    }

    public function getZyjjl(): ?int
    {
        return $this->zyjjl;
    }

    public function setZyjjl(?int $zyjjl): self
    {
        $this->zyjjl = $zyjjl;

        return $this;
    }

    public function getSscx(): ?bool
    {
        return $this->sscx;
    }

    public function setSscx(?bool $sscx): self
    {
        $this->sscx = $sscx;

        return $this;
    }

    public function getPcijkj(): ?bool
    {
        return $this->pcijkj;
    }

    public function setPcijkj(?bool $pcijkj): self
    {
        $this->pcijkj = $pcijkj;

        return $this;
    }

    public function getYkz(): ?bool
    {
        return $this->ykz;
    }

    public function setYkz(?bool $ykz): self
    {
        $this->ykz = $ykz;

        return $this;
    }

    public function getYkqnzz(): ?int
    {
        return $this->ykqnzz;
    }

    public function setYkqnzz(?int $ykqnzz): self
    {
        $this->ykqnzz = $ykqnzz;

        return $this;
    }

    public function getYkqncd(): ?int
    {
        return $this->ykqncd;
    }

    public function setYkqncd(?int $ykqncd): self
    {
        $this->ykqncd = $ykqncd;

        return $this;
    }

    public function getZjsl(): ?int
    {
        return $this->zjsl;
    }

    public function setZjsl(?int $zjsl): self
    {
        $this->zjsl = $zjsl;

        return $this;
    }

    public function getZjzj(): ?int
    {
        return $this->zjzj;
    }

    public function setZjzj(?int $zjzj): self
    {
        $this->zjzj = $zjzj;

        return $this;
    }

    public function getZjcd(): ?int
    {
        return $this->zjcd;
    }

    public function setZjcd(?int $zjcd): self
    {
        $this->zjcd = $zjcd;

        return $this;
    }

    public function getHkz(): ?bool
    {
        return $this->hkz;
    }

    public function setHkz(?bool $hkz): self
    {
        $this->hkz = $hkz;

        return $this;
    }

    public function getHkzqnzj(): ?int
    {
        return $this->hkzqnzj;
    }

    public function setHkzqnzj(?int $hkzqnzj): self
    {
        $this->hkzqnzj = $hkzqnzj;

        return $this;
    }

    public function getHkzqncd(): ?int
    {
        return $this->hkzqncd;
    }

    public function setHkzqncd(?int $hkzqncd): self
    {
        $this->hkzqncd = $hkzqncd;

        return $this;
    }

    public function getHkzdyl(): ?int
    {
        return $this->hkzdyl;
    }

    public function setHkzdyl(?int $hkzdyl): self
    {
        $this->hkzdyl = $hkzdyl;

        return $this;
    }

    public function getSzsc(): ?int
    {
        return $this->szsc;
    }

    public function setSzsc(?int $szsc): self
    {
        $this->szsc = $szsc;

        return $this;
    }

    public function getWfl(): ?string
    {
        return $this->wfl;
    }

    public function setWfl(?string $wfl): self
    {
        $this->wfl = $wfl;

        return $this;
    }

    public function getShtimi(): ?bool
    {
        return $this->shtimi;
    }

    public function setShtimi(?bool $shtimi): self
    {
        $this->shtimi = $shtimi;

        return $this;
    }

    public function getSfrqjz(): ?bool
    {
        return $this->sfrqjz;
    }

    public function setSfrqjz(?bool $sfrqjz): self
    {
        $this->sfrqjz = $sfrqjz;

        return $this;
    }

    public function getCurrentAge(): ?int
    {
        return $this->currentAge;
    }

    public function setCurrentAge(int $currentAge): self
    {
        $this->currentAge = $currentAge;

        return $this;
    }

    public function getFbdd(): ?Options
    {
        return $this->fbdd;
    }

    public function setFbdd(?Options $fbdd): self
    {
        $this->fbdd = $fbdd;

        return $this;
    }

    public function getFbsj(): ?\DateTimeInterface
    {
        return $this->fbsj;
    }

    public function setFbsj(\DateTimeInterface $fbsj): self
    {
        $this->fbsj = $fbsj;

        return $this;
    }

    public function getSzyyDba(): ?int
    {
        return $this->szyy_dba;
    }

    public function setSzyyDba(?int $szyy_dba): self
    {
        $this->szyy_dba = $szyy_dba;

        return $this;
    }

    public function getSzyyDafda(): ?int
    {
        return $this->szyy_dafda;
    }

    public function setSzyyDafda(?int $szyy_dafda): self
    {
        $this->szyy_dafda = $szyy_dafda;

        return $this;
    }

    public function getSzyyQjssxs(): ?int
    {
        return $this->szyy_qjssxs;
    }

    public function setSzyyQjssxs(?int $szyy_qjssxs): self
    {
        $this->szyy_qjssxs = $szyy_qjssxs;

        return $this;
    }

    public function getSzyyAtp(): ?int
    {
        return $this->szyy_atp;
    }

    public function setSzyyAtp(?int $szyy_atp): self
    {
        $this->szyy_atp = $szyy_atp;

        return $this;
    }

    public function getSzyyXsgy(): ?int
    {
        return $this->szyy_xsgy;
    }

    public function setSzyyXsgy(?int $szyy_xsgy): self
    {
        $this->szyy_xsgy = $szyy_xsgy;

        return $this;
    }

    public function getSzyySsxs(): ?int
    {
        return $this->szyy_ssxs;
    }

    public function setSzyySsxs(?int $szyy_ssxs): self
    {
        $this->szyy_ssxs = $szyy_ssxs;

        return $this;
    }

    public function getSzyyMf(): ?int
    {
        return $this->szyy_mf;
    }

    public function setSzyyMf(?int $szyy_mf): self
    {
        $this->szyy_mf = $szyy_mf;

        return $this;
    }

    public function getSzyySn(): ?int
    {
        return $this->szyy_sn;
    }

    public function setSzyySn(?int $szyy_sn): self
    {
        $this->szyy_sn = $szyy_sn;

        return $this;
    }

    

    public function getSwcyYy(): ?string
    {
        return $this->swcy_yy;
    }

    public function setSwcyYy(?string $swcy_yy): self
    {
        $this->swcy_yy = $swcy_yy;

        return $this;
    }

    public function getJxxs(): ?bool
    {
        return $this->jxxs;
    }

    public function setJxxs(?bool $jxxs): self
    {
        $this->jxxs = $jxxs;

        return $this;
    }

    public function getSwcy(): ?bool
    {
        return $this->swcy;
    }

    public function setSwcy(?bool $swcy): self
    {
        $this->swcy = $swcy;

        return $this;
    }

    public function getZjnxs(): ?Options
    {
        return $this->zjnxs;
    }

    public function setZjnxs(?Options $zjnxs): self
    {
        $this->zjnxs = $zjnxs;

        return $this;
    }

    

    public function getZyzz(): ?Options
    {
        return $this->zyzz;
    }

    public function setZyzz(?Options $zyzz): self
    {
        $this->zyzz = $zyzz;

        return $this;
    }

    public function getZcxjgs(): ?bool
    {
        return $this->zcxjgs;
    }

    public function setZcxjgs(?bool $zcxjgs): self
    {
        $this->zcxjgs = $zcxjgs;

        return $this;
    }

    public function getZyqjcx(): ?Options
    {
        return $this->zyqjcx;
    }

    public function setZyqjcx(?Options $zyqjcx): self
    {
        $this->zyqjcx = $zyqjcx;

        return $this;
    }

    public function getZyexxlsc(): ?Options
    {
        return $this->zyexxlsc;
    }

    public function setZyexxlsc(?Options $zyexxlsc): self
    {
        $this->zyexxlsc = $zyexxlsc;

        return $this;
    }

    public function getZyxtzt(): ?bool
    {
        return $this->zyxtzt;
    }

    public function setZyxtzt(?bool $zyxtzt): self
    {
        $this->zyxtzt = $zyxtzt;

        return $this;
    }

    public function getZyts(): ?int
    {
        return $this->zyts;
    }

    public function setZyts(?int $zyts): self
    {
        $this->zyts = $zyts;

        return $this;
    }

    public function getZyfy(): ?int
    {
        return $this->zyfy;
    }

    public function setZyfy(?int $zyfy): self
    {
        $this->zyfy = $zyfy;

        return $this;
    }

    public function getZyicu(): ?bool
    {
        return $this->zyicu;
    }

    public function setZyicu(?bool $zyicu): self
    {
        $this->zyicu = $zyicu;

        return $this;
    }

    public function getZyicuTs(): ?int
    {
        return $this->zyicu_ts;
    }

    public function setZyicuTs(?int $zyicu_ts): self
    {
        $this->zyicu_ts = $zyicu_ts;

        return $this;
    }

    public function getZyzyjsb(): ?bool
    {
        return $this->zyzyjsb;
    }

    public function setZyzyjsb(?bool $zyzyjsb): self
    {
        $this->zyzyjsb = $zyzyjsb;

        return $this;
    }

    public function getZyxfcd(): ?bool
    {
        return $this->zyxfcd;
    }

    public function setZyxfcd(?bool $zyxfcd): self
    {
        $this->zyxfcd = $zyxfcd;

        return $this;
    }

    /**
     * @return Collection|Options[]
     */
    public function getBxgxycj(): Collection
    {
        return $this->bxgxycj;
    }

    public function addBxgxycj(Options $bxgxycj): self
    {
        if (!$this->bxgxycj->contains($bxgxycj)) {
            $this->bxgxycj[] = $bxgxycj;
        }

        return $this;
    }

    public function removeBxgxycj(Options $bxgxycj): self
    {
        if ($this->bxgxycj->contains($bxgxycj)) {
            $this->bxgxycj->removeElement($bxgxycj);
        }

        return $this;
    }

    /**
     * @return Collection|Lcevent[]
     */
    public function getLcevents(): Collection
    {
        return $this->lcevents;
    }

    public function addLcevent(Lcevent $lcevent): self
    {
        if (!$this->lcevents->contains($lcevent)) {
            $this->lcevents[] = $lcevent;
            $lcevent->setPatient($this);
        }

        return $this;
    }

    public function removeLcevent(Lcevent $lcevent): self
    {
        if ($this->lcevents->contains($lcevent)) {
            $this->lcevents->removeElement($lcevent);
            // set the owning side to null (unless already changed)
            if ($lcevent->getPatient() === $this) {
                $lcevent->setPatient(null);
            }
        }

        return $this;
    }

    
}
