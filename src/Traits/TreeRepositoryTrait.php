<?php 
namespace App\Traits;

trait TreeRepositoryTrait {
    public function findAllBylft(){
        return $this->createQueryBuilder('o')
        ->orderBy('o.root,o.parent,o.lft', 'ASC')
        ->getQuery()
        ->getResult()
        ;
    }
}