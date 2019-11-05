<?php
namespace App\Traits;

trait Treetrait
{

    public function getIndentTitle(): ?string
    {
        return str_repeat('--', $this->getLvl()) . $this->getTitle();
    }

    public function getPosition()
    {
        $parent = $this->getParent();
        if (! $parent)
            return 'root';
        else {
            $children = $parent->getChildren();
            $length = count($children);
            if ($length == 1)
                return 'single';
            else if ($children[0]->getId() == $this->getId())
                return 'first';
            else if ($children[$length - 1]->getId() == $this->getId())
                return 'last';
            else
                return 'middle';
        }
    }
}