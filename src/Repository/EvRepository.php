<?php

namespace App\Repository;

use App\Entity\Ev;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ev|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ev|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ev[]    findAll()
 * @method Ev[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ev::class);
    }

    // /**
    //  * @return Ev[] Returns an array of Ev objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ev
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
