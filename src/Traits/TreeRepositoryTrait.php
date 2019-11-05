<?php 
namespace App\Traits;

trait TreeRepositoryTrait {
    public function findAllBylft(){
        return $this->findAllBylftQuery()        
        ->getResult()
        ;
    }
    
    public function findAllBylftQuery($title=null){
        
        $qb =$this->createQueryBuilder('o');
        if($title){
            $qb->andWhere('o.title like :title')
            ->setParameter('title', '%'.$title.'%');
        }        
        return $qb->orderBy('o.root,o.parent,o.lft', 'ASC')
        ->getQuery();
    }
}