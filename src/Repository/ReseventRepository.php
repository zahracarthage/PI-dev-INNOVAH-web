<?php

namespace App\Repository;

use App\Entity\Resevent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Resevent|null find($id, $lockMode = null, $lockVersion = null)
 * @method Resevent|null findOneBy(array $criteria, array $orderBy = null)
 * @method Resevent[]    findAll()
 * @method Resevent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReseventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Resevent::class);
    }
    public function countByDate(){
        $query = $this->createQueryBuilder('a')
            ->select('SUBSTRING(a.date, 1, 10) as date, COUNT(a) as count')
            ->groupBy('date');
        return $query->getQuery()->getResult();

    }

    // /**
    //  * @return Resevent[] Returns an array of Resevent objects
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
    public function findOneBySomeField($value): ?Resevent
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
