<?php

namespace App\Repository;

use App\Entity\Wlan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Wlan|null find($id, $lockMode = null, $lockVersion = null)
 * @method Wlan|null findOneBy(array $criteria, array $orderBy = null)
 * @method Wlan[]    findAll()
 * @method Wlan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WlanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Wlan::class);
    }

    // /**
    //  * @return Wlan[] Returns an array of Wlan objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Wlan
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
