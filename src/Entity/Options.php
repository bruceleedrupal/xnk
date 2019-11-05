<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping\Index as Index;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;


/**
 *
 * @Gedmo\Tree(type="nested")
 * @ORM\Table(
 *     name="options",
 *     indexes={
 *          @Index(name="lft_ix", columns={"lft"}),
 *          @Index(name="rgt_ix", columns={"rgt"}),
 *          @Index(name="lft_rgt_ix", columns={"lft", "rgt"}),
 *          @Index(name="lvl_ix", columns={"lvl"})
 *     })
 * @ORM\Entity(repositoryClass="App\Repository\OptionsRepository")
 */
class Options
{
    use \App\Traits\Treetrait;
    /**
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     *
     * @Gedmo\TreeLeft()
     * @ORM\Column(type="integer")
     */
    private $lft;

    /**
     *
     * @Gedmo\TreeLevel()
     * @ORM\Column(type="integer")
     */
    private $lvl;

    /**
     *
     * @Gedmo\TreeRight()
     * @ORM\Column(type="integer")
     */
    private $rgt;

    /**
     *
     * @Gedmo\TreeRoot()
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     * @ORM\JoinColumn(name="tree_root", referencedColumnName="id", onDelete="cascade")
     */
    private $root;

    /**
     *
     * @Gedmo\TreeParent()
     * @ORM\ManyToOne(targetEntity="App\Entity\Options")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="cascade",nullable=true)
     */
    private $parent;

    /**
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Options", mappedBy="parent")
     * @ORM\OrderBy({"lft" = "ASC"})
     */
    private $children;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     *
     * @return int|null
     */
    public function getLft(): ?int
    {
        return $this->lft;
    }

    /**
     *
     * @return int|null
     */
    public function getRgt(): ?int
    {
        return $this->rgt;
    }

    /**
     *
     * @return null|Options
     */
    public function getParent(): ?Options
    {
        return $this->parent;
    }

    /**
     *
     * @param Options $parent
     */
    public function setParent(Options $parent = null): void
    {
        $this->parent = $parent;
    }

    /**
     *
     * @return null|Options
     */
    public function getRoot(): Options
    {
        return $this->root;
    }

    /**
     *
     * @return null|Options[]|ArrayCollection|Collection
     */
    public function getChildren(): ?Collection
    {
        return $this->children;
    }

    /**
     *
     * @return null|int
     */
    public function getLvl(): ?int
    {
        return $this->lvl;
    }

    
}
