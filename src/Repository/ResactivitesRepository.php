<?php

namespace App\Repository;

use App\Entity\Resactivites;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Resactivites|null find($id, $lockMode = null, $lockVersion = null)
 * @method Resactivites|null findOneBy(array $criteria, array $orderBy = null)
 * @method Resactivites[]    findAll()
 * @method Resactivites[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResactivitesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Resactivites::class);
    }

    // /**
    //  * @return Resactivites[] Returns an array of Resactivites objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Resactivites
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
