<?php

namespace App\Repository;

use App\Entity\Options;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Gedmo\Tree\Entity\Repository\NestedTreeRepository;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Option|null find($id, $lockMode = null, $lockVersion = null)
 * @method Option|null findOneBy(array $criteria, array $orderBy = null)
 * @method Option[]    findAll()
 * @method Option[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OptionsRepository extends NestedTreeRepository
{
    
    use \App\Traits\TreeRepositoryTrait;
    
    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct($em, $em->getClassMetadata(Options::class));
    }
    
    public function findAllBylftQuery($title=null){
        
        $qb =$this->createQueryBuilder('o');
        if($title){
            $qb->leftJoin('o.parent', 'p')
            ->leftJoin('o.children', 'c')
            ->leftJoin('p.children', 'pc')
            ->andWhere('o.title like :title or p.title like :title or c.title like :title or pc.title like :title')
            ->setParameter('title', '%'.$title.'%');
        }
        return $qb->orderBy('o.root,o.parent,o.lft', 'ASC')
        ->getQuery();
    }
    
    public function findChirenOptions($parentId){
        return  $this->createQueryBuilder('o')
        ->where('o.parent=:parentId')
        ->setParameter('parentId',$parentId)
        ->orderBy('o.lft','asc')->getQuery()->execute();
    }

    // /**
    //  * @return Option[] Returns an array of Option objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Option
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
