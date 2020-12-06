<?php

namespace App\Repository;

use App\Entity\ClientRecord;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NoResultException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClientRecord|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientRecord|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientRecord[]    findAll()
 * @method ClientRecord[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientRecordRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientRecord::class);
    }

    /**
     * @return ClientRecord
     */
    public function getMaxDateEntry($clientNo): ?ClientRecord
    {
        $subQb = $this->createQueryBuilder('sq')
        ->where('sq.clientIk= :clientNo')
        ->setParameter('clientNo', $clientNo)
        ->select('MAX(sq.recordDate) AS maxDate')
        ->getQuery();
        $subQbResult= $subQb->getSingleResult();

        $qb = $this->createQueryBuilder('mr')
        ->where('mr.clientIk= :clientNo')
        ->andWhere('mr.recordDate = :maxDate')
        ->setParameter('clientNo', $clientNo)
        ->setParameter('maxDate', $subQbResult['maxDate'])
        ->getQuery();
        try{
            $result =$qb->getSingleResult();
        }catch(NoResultException $nre){
            $result = null;
        }

        return $result;
    }

    // /**
    //  * @return ClientRecord[] Returns an array of ClientRecord objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ClientRecord
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
