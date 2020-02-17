<?php

namespace App\Repository;

use App\Entity\Lcevent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Lcevent|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lcevent|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lcevent[]    findAll()
 * @method Lcevent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LceventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lcevent::class);
    }

    // /**
    //  * @return Lcevent[] Returns an array of Lcevent objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Lcevent
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
